<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Payment;
use App\Models\WarrantySerial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use PhpParser\Node\Stmt\TryCatch;

class OrderController extends Controller
{

    public function confirmOrder(Request $request)
    {
        $orderId = $request->order_id;
        $order = Order::find($orderId);
        if ($order) {
            $order->status = 'processing';
            $order->save();
            return response()->json([
                'success' => true,
                'data' => ['id' => $order->id],
                'message' => 'Xác nhận đơn hàng thành công!'
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Không tìm thấy đơn hàng!'
            ]);
        }
    }

    public function shippingOrder(Request $request)
    {
        $orderId = $request->order_id;
        $order = Order::find($orderId);
        if ($order) {
            $order->status = 'shipping';
            $order->save();
            return response()->json([
                'success' => true,
                'data' => ['id' => $order->id],
                'message' => 'Cập nhật thành công!'
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Không tìm thấy đơn hàng!'
            ]);
        }
    }

    public function completedOrder(Request $request)
    {
        $orderId = $request->order_id;
        $order = Order::find($orderId);
        if ($order) {
            $order->status = 'completed';
            $order->save();
            $payment = Payment::where('order_id', $order->id)->first();
            if ($payment->status === 'pending') {
                $payment->status = 'complete';
                $payment->paid_at = now();
                $payment->save();
            }
            return response()->json([
                'success' => true,
                'data' => ['id' => $order->id],
                'message' => 'Cập nhật thành công!'
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Không tìm thấy đơn hàng!'
            ]);
        }
    }

    public function cancelledOrder(Request $request)
    {
        $orderId = $request->order_id;
        $order = Order::find($orderId);
        if ($order) {
            $order->status = 'cancelled';
            $order->save();
            return response()->json([
                'success' => true,
                'data' => ['id' => $order->id],
                'message' => 'Cập nhật thành công!'
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Không tìm thấy đơn hàng!'
            ]);
        }
    }

    public function sendMailInvoice(Request $request)
    {
        $order = Order::with(['orderItems.product', 'shippingAddress', 'user', 'payment', 'coupon'])->find($request->order_id);
        try {
            Mail::send('admin.emails.invoice', compact('order'), function ($message) use ($order) {
                $message->to($order->user->email)->subject('Hóa đơn của khách hàng' . $order->shippingAddress->name);
            });
            $order->sendMail = 1;
            $order->save();
            return response()->json([
                'success' => true,
                'message' => 'Hóa đơn đã được gửi qua email!'
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'message' => 'Không thể gửi mail! Lỗi ' . $th->getMessage(),
            ]);
        }
    }

    public function showOrderDetail($id)
    {
        $order = Order::with(['orderItems.product', 'shippingAddress', 'user', 'payment', 'coupon'])->find($id);
        return view('admin.pages.order_detail', compact('order'));
    }

    public function returnBlade()
    {
        $orders = Order::with(['orderItems.orderItemDetails.productSerial', 'shippingAddress.user', 'payment', 'coupon'])->orderByDesc('id')->get();
        return view('admin.pages.orders', compact('orders'));
    }
}
