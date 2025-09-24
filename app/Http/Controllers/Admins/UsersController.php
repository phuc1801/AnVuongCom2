<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function returnBlade()
    {
        $users = User::with('role')->paginate(9);
        return view('admin.pages.users', compact('users'));
    }

    public function updateStatusUser(Request $request)
    {
        $status = $request->status;
        $user_id = $request->userId;
        $user = User::findOrFail($user_id);

        if (!$user) {
            return response()->json([
                'success' => false,
                'message' => 'Không tìm thấy người dùng'
            ]);
        }

        $user->status = $status;
        $user->save();

        return response()->json([
            'success' => true,
            'message' => 'Cập nhật thành công!'
        ]);
    }
}
