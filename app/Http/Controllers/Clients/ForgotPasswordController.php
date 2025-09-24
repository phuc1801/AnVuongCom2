<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class ForgotPasswordController extends Controller
{
    function showForgotPassForm(){
        return view('clients.forgotPassE');
    }

    function sendResetLink(Request $request){
        $request->validate([
            'email' => 'required|string|email|max:255|exists:users,email|regex:/^[^\s@]+@[^\s@]+\.[^\s@]+$/',
        ],[
            'email.regex' => 'Email phải đúng định dạng (có @, .com)'
        ]);
        $checkStatus = Password::sendResetLink($request->only('email'));
        if($checkStatus === Password::RESET_LINK_SENT){
            toastr()->success('Link đổi mật khẩu đã được gửi vào email của bạn. Vui lòng kiểm tra hòm thư để thực hiện việc đổi mật khẩu');
            toastr()->warning('Link chỉ có hiệu lực trong vòng 60 phút!');
            return back();
        }
        else{
            toastr()->error('Không thể gửi email đặt lại mật khẩu');
            return back()->withErrors(['email' => __($checkStatus)]);
        }
    }
}
