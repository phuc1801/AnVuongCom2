<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class AccountController extends Controller
{

    public function updateProfile(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|min:3',
            'email' => 'required|string|email|max:255|regex:/^[^\s@]+@[^\s@]+\.[^\s@]+$/',
            'phone' => ['required', 'string', 'max:12', 'regex:/^(0[1-9]\d{8}|\+84[1-9]\d{8})$/'],
            'address' => 'required|string|max:255|min:10',
        ], [
            'phone.regex' => 'Số điện thoại phải bắt đầu từ 0 (hoặc +84) và có 9 số sau đó',
            'email.regex' => 'Email phải đúng định dạng (có @, .com)'
        ]);

        $id = Auth::guard('admin')->id();
        $user = User::find($id);
        $user->email = $request->input('email');
        $user->name = $request->input('name');
        $user->phone = $request->input('phone');
        $user->address = $request->input('address');
        $user->save();
        return response()->json([
            'success' => true,
            'message' => 'Đã cập nhật thành công',
            'data' => [
                'name' => $user->name,
                'email' => $user->email,
                'phone' => $user->phone,
                'address' => $user->address,
            ]
        ]);
    }

    public function updatePass(Request $request)
    {
        $request->validate([
            'current_password' => 'required|string',
            'password' => 'required|string|confirmed|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&]).+$/|min:8',
        ], [
            'password.regex' => 'Mật khẩu mới phải có ít nhất 8 kí tự, 1 chữ hoa, 1 chữ thường, 1 số và 1 ký tự đặc biệt (@$!%*?&).',
            'password.confirmed' => 'Mật khẩu nhập lại không khớp',
        ]);

        $id = Auth::guard('admin')->id();
        $user = User::find($id);

        if (!Hash::check($request->current_password, $user->password)) {
            return response()->json([
                'success' => false,
                'message' => 'Sai mật khẩu nhé',
            ]);
        }

        $user->password = Hash::make($request->input('password'));
        $user->save();
        return response()->json([
            'success' => true,
            'message' => 'Đã cập nhật thành công',
        ]);
    }

    public function updateAvatar(Request $request)
    {
        $id = Auth::guard('admin')->id();
        $user = User::find($id);
        $imagePath = null;
        $fileName = '';
        if ($request->hasFile('avatar')) {
            if ($user->avatar) {
                Storage::disk('public')->delete('img/users/' . $user->avatar);
            }
            $imagePath = $request->file('avatar');
            $fileName = now()->timestamp . '_' . uniqid() . '.' . $imagePath->getClientOriginalExtension();
            $imagePath = $imagePath->storeAs('img/users/', $fileName, 'public');

            $user->avatar = $fileName;
            $user->save();
            return response()->json([
                'success' => true,
                'message' => 'Đã cập nhật thành công',
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Lỗi rồi! Vui lòng thử lại',
            ]);
        }
    }

    public function returnBlade()
    {
        $user = Auth::guard('admin')->user();
        return view('admin.pages.profile', compact('user'));
    }
}
