<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;

use function Flasher\Toastr\Prime\toastr;

class ResetPasswordController extends Controller
{
    function showResetForm($token){
        return view('clients.resetPass', ['token' => $token]);
    }

    function resetPassword(Request $request){
        $request->validate([
            'email' => 'required|string|email|max:255|exists:users,email|regex:/^[^\s@]+@[^\s@]+\.[^\s@]+$/',
            'password' => 'required|string|confirmed|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&]).+$/|min:8',
            'token' => 'required'
        ],[
            'password.regex' => 'Mật khẩu phải có ít nhất 8 kí tự, 1 chữ hoa, 1 chữ thường, 1 số và 1 ký tự đặc biệt (@$!%*?&).',
            'password.confirmed' => 'Mật khẩu nhập lại không khớp',
            'email.regex' => 'Email phải đúng định dạng (có @, .com)',
            'email.exists' => 'Email này chưa được đăng ký trong hệ thống',
            'token.required' => 'Mã token không hợp lệ hoặc đã hết hạn'
        ]);

        $status = Password::reset(
            $request->only('email','password','password_confirmation','token'),
            function($user, $password){
                $user->forceFill([
                    'password' => Hash::make($password),
                ])->save();
            }
        );

        if($status === Password::PASSWORD_RESET)
        {
            toastr()->success('Mật khẩu đã được thay đổi, vui lòng đăng nhập lại');
            return redirect()->route('login');
        }
        else{
            toastr()->error('Không thể đặt lại mật khẩu, vui lòng thử lại');
            return back()->withErrors(['email' => __($status)]);
        }
    }
}
