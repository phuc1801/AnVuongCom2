<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Mail\ActivationMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

class AuthAdminController extends Controller
{
    function showLoginForm()
    {
        return view('admin.login.admin_login');
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

        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password, 'status' => 'active'], $request->has('remember') ? true : false)) {
            if (Auth::guard('admin')->user()->role->name === 'admin') {
                $request->session()->regenerate();
                $request->session()->regenerateToken();
                toastr()->success('Login successfully. Welcome back, Master!');
                return redirect()->route('admin.dashboard');
            } else {
                Auth::guard('admin')->logout();
                toastr()->error('Bạn không có quyền truy cập');
                return redirect()->back();
            }
        } else {
            toastr()->error('Thông tin đăng nhập chưa chính xác');
            return redirect()->back();
        }
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        toastr()->success('Goodbye, Master!');
        return redirect()->route('admin.login');
    }
}
