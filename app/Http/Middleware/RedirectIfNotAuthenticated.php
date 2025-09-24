<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfNotAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     **/
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->is('admin') || $request->is('admin/*')) {
            if (!Auth::guard('admin')->check()) {
                if ($request->expectsJson()) {
                    return response()->json([
                        'success' => false,
                        'message' => 'Vui lòng đăng nhập để vào trang quản trị'
                    ], 401);
                }
                toastr()->error('Vui lòng đăng nhập để vào trang quản trị');
                return redirect()->guest(route('admin.login'));
            }
        } else {
            if (!Auth::guard('web')->check()) {
                if ($request->expectsJson()) {
                    return response()->json([
                        'success' => false,
                        'message' => 'Vui lòng đăng nhập để có trải nghiệm tốt nhất'
                    ], 401);
                }
                toastr()->error('Vui lòng đăng nhập để có trải nghiệm tốt nhất');
                return redirect()->guest(route('login'));
            }
            if (Auth::guard('web')->user()->status !== 'active') {
                Auth::guard('web')->logout();
                toastr()->error('Tài khoản của bạn chưa được kích hoạt. Vui lòng kiểm tra email hoặc liên hệ hỗ trợ.');
                return redirect()->guest(route('login'));
            }
        }

        return $next($request);
    }
}
