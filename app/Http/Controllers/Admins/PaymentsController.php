<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentsController extends Controller
{
    public function updateOldPayment(Request $request)
    {
        $request->validate([
            'status' => 'required|in:pending,complete,fail,paid_back',
        ]);
        try {
            $payment = Payment::findOrFail($request->payment_id);
            if (!$payment) {
                return response()->json([
                    'success' => false,
                    'message' => 'Không tìm thấy ảnh phù hợp!'
                ]);
            } else {
                $payment->status = $request->status;
                $payment->save();
                return response()->json([
                    'success' => true,
                    'message' => 'Đã cập nhật thành công',
                ]);
            }
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'message' => 'Lỗi lòi mắt rồi homie!'
            ]);
        }
    }

    public function returnBlade()
    {
        $payments = Payment::all();
        return view('admin.pages.payments', compact('payments'));
    }
}
