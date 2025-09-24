<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use App\Mail\ActivationMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\URL;

class AuthController extends Controller
{
    function showLoginForm()
    {
        // if (!session()->has('url.intended')) {
        //     session(['url.intended' => Url::previous()]);
        // }
        return view('clients.login');
    }

    function showRegisterForm()
    {
        return view('clients.register');
    }

    function login(Request $request)
    {
        $request->validate(
            [
                'email' => 'required|string|email|max:255|regex:/^[^\s@]+@[^\s@]+\.[^\s@]+$/',
                'password' => 'required|max:255'
            ],
            ['email.regex' => 'Email phải đúng định dạng (có @, .com)']
        );

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'status' => 'active'], $request->has('remember') ? true : false)) {
            if (Auth::user()->role->name == 'customer') {
                $request->session()->regenerate();
                $request->session()->regenerateToken();
                toastr()->success('Chào mừng tới với An Vượng');
                // return redirect()->intended('/');
                // chỗ này vướng cái fetch cập nhật giỏ ở các trang, nếu muốn dùng thì phải đổi các trang thành reload, nhưng mà cũng chỉ lấy được trang nào auth
                return redirect('/');
            } else {
                Auth::logout();
                toastr()->error('Bạn không có quyền truy cập');
                return redirect()->back();
            }
        } else {
            toastr()->error('Thông tin đăng nhập chưa chính xác hoặc bạn chưa kích hoạt tài khoản');
            return redirect()->back();
        }
    }

    function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    function handleGoogleCallback(Request $request)
    {
        try {
            $googleUser = Socialite::driver('google')->user();
            $findUser = User::where('google_id', $googleUser->getId())->orWhere('email', $googleUser->getEmail())->first();
            if ($findUser) {
                if ($findUser->role->name == 'customer') {
                    if (!$findUser->google_id) {
                        $data = ['google_id' => $googleUser->getId()];
                        if ($findUser->status !== 'active') {
                            $data['status'] = 'active';
                        }
                        $findUser->update($data);
                    }
                    Auth::login($findUser);
                } else {
                    toastr()->error('Bạn không có quyền truy cập');
                    return redirect()->route('login');
                }
            } else {
                $randomSt = 'Av@1' . Str::random(8);
                $randomSt = str_shuffle($randomSt);
                $newUser = User::create(
                    [
                        'name' => $googleUser->getName(),
                        'email' => $googleUser->getEmail(),
                        'password' => Hash::make($randomSt),
                        'status' => 'active',
                        'role_id' => 2,
                        'google_id' => $googleUser->getId(),
                    ]
                );
                Auth::login($newUser);
            }
            $request->session()->regenerate();
            $request->session()->regenerateToken();
            toastr()->success('Chào mừng tới với An Vượng');
            return redirect()->intended('/');
        } catch (\Throwable $th) {
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            toastr()->error('Không thể đăng nhập bằng google. Vui lòng thử lại!');
            toastr()->error(__($th->getMessage()));
            return redirect()->route('login');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        toastr()->success('Đăng xuất thành công! Tạm biệt quý khách, chúc ngày mới tốt lành!');
        return redirect()->route('login');
    }

    function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|min:3',
            'email' => 'required|string|email|max:255|unique:users,email|regex:/^[^\s@]+@[^\s@]+\.[^\s@]+$/',
            'phone' => ['required', 'string', 'max:12', 'regex:/^(0[1-9]\d{8}|\+84[1-9]\d{8})$/', 'unique:users,phone',],
            'password' => 'required|string|confirmed|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&]).+$/|min:8'
        ], [
            'password.regex' => 'Mật khẩu phải có ít nhất 8 kí tự, 1 chữ hoa, 1 chữ thường, 1 số và 1 ký tự đặc biệt (@$!%*?&).',
            'password.confirmed' => 'Mật khẩu nhập lại không khớp',
            'phone.regex' => 'Số điện thoại phải bắt đầu từ 0 (hoặc +84) và có 9 số sau đó',
            'email.regex' => 'Email phải đúng định dạng (có @, .com)'
        ]);

        // check if email exist
        $existEmail = User::where('email', $request->email)->first();
        if ($existEmail) {
            if ($existEmail->isPending()) {
                toastr()->error('Email đã được đăng ký, vui lòng truy cập email của bạn để kích hoạt!');
                return redirect()->back();
            }
            toastr()->error('Email đã được đăng ký');
            return redirect()->back();
        }

        // create token active
        $token = Str::random(64);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'status' => 'pending',
            'role_id' => 2,
            'activation_token' => $token,
        ]);

        Mail::to($user->email)->send(new ActivationMail($user, $token));

        toastr()->success('Đăng ký thành công, vui lòng kiểm tra email của bạn để kích hoạt tài khoản!', ['positionClass' => 'toast-top-left']);
        return redirect()->route('login');
    }

    function activate($token)
    {
        $user = User::where('activation_token', $token)->first();
        if ($user) {
            $user->status = 'active';
            $user->activation_token = null;
            $user->save();

            toastr()->success('Kích hoạt thành công, vui lòng đăng nhập!', ['positionClass' => 'toast-top-left']);
            return redirect()->route('login');
        }
        toastr()->error('Token không hợp lệ hoặc đã hết hạn');
        return redirect()->route('login');
    }
}
