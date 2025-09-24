<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VoucherController extends Controller
{

    public function addNewVoucher(Request $request)
    {
        $request->validate(
            [
                'name' => 'required|string|max:255',
                'expiry_date' => 'required|date|after:now',
                'value' => 'required|string|regex:/^[0-9]+$/',
                'product_id' => 'required|integer|exists:products,id',
                'code' => 'required|string|max:255',
            ],
        );
        Coupon::create([
            'product_id' => $request->input('product_id'),
            'name' => $request->input('name'),
            'expiry_date' => $request->input('expiry_date'),
            'value' => $request->input('value'),
            'code' => $request->input('code'),
        ]);

        return redirect()->route('admin.voucher-add')->with('success', 'Voucher đã thêm thành công!');
    }

    public function updateOldVoucher(Request $request)
    {
        $request->validate(
            [
                'name' => 'required|string|max:255',
                'expiry_date' => 'required|date|after:now',
                'value' => 'required|string|regex:/^[0-9]+$/',
                'product_id' => 'required|integer|exists:products,id',
                'status' => 'required|in:valid,invalid',
                'code' => 'required|string|max:255',
            ],
        );
        try {
            $voucher = Coupon::findOrFail($request->voucher_id);
            if (!$voucher) {
                return response()->json([
                    'success' => false,
                    'message' => 'Không tìm thấy voucher phù hợp!'
                ]);
            } else {
                $voucher->product_id = $request->product_id;
                $voucher->expiry_date = $request->expiry_date;
                $voucher->status = $request->input('status');
                $voucher->value = $request->input('value');
                $voucher->code = $request->code;
                $voucher->name = $request->name;
                $voucher->save();

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

    public function deleteOldVoucher(Request $request)
    {
        try {
            $voucher = Coupon::findOrFail($request->voucher_id);
            if (!$voucher) {
                return response()->json([
                    'success' => false,
                    'message' => 'Không tìm thấy mã phù hợp!'
                ]);
            } else {
                $voucher->delete();
                return response()->json([
                    'success' => true,
                    'message' => 'Đã xóa thành công!'
                ]);
            }
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'message' => 'Lỗi lòi mắt rồi homie!'
            ]);
        }
    }

    public function showFormVoucher()
    {
        $products = Product::all();
        return view('admin.pages.voucher_add', compact('products'));
    }

    public function returnBlade()
    {
        $products = Product::all();
        $vouchers = Coupon::with('product')->get();
        return view('admin.pages.vouchers', compact('vouchers', 'products'));
    }
}
