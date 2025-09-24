<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductSerial;
use Illuminate\Http\Request;

class ProductSerialController extends Controller
{
    public function getProducts()
    {
        return Product::all();
    }

    public function getProductSerials()
    {
        return ProductSerial::with('product')->get();
    }

    public function addNewProductSerial(Request $request)
    {
        $request->validate(
            [
                'product_id' => 'required|integer|exists:products,id',
                'serial_number' => 'required|string',
            ],
        );

        ProductSerial::create([
            'product_id' => $request->input('product_id'),
            'serial_number' => $request->input('serial_number'),
            'status' => 'in_stock'
        ]);

        return redirect()->route('admin.product-serial-add')->with('success', 'Serial sản phẩm đã thêm thành công!');
    }

    public function updateOldProductSerial(Request $request)
    {
        $request->validate(
            [
                'serial_number' => 'required|string',
                'product_id' => 'required|integer|exists:products,id',
            ],
        );
        try {
            $productSerial = ProductSerial::findOrFail($request->serial_id);
            if (!$productSerial) {
                return response()->json([
                    'success' => false,
                    'message' => 'Không tìm thấy serial phù hợp!'
                ]);
            } else {
                $existSerial = ProductSerial::where('product_id', $request->product_id)->where('serial_number', $request->serial_number)->first();
                if ($existSerial) {
                    return response()->json([
                        'success' => false,
                        'message' => 'Đã tồn tại serial này ở ' . $existSerial->product->name
                    ]);
                }
                $productSerial->product_id = $request->product_id;
                $productSerial->serial_number = $request->serial_number;
                $productSerial->save();
                $product = $productSerial->product;
                $product->refreshQuantityAndStatus();
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

    public function deleteOldProductSerial(Request $request)
    {
        try {
            $productSerial = ProductSerial::findOrFail($request->serial_id);
            if (!$productSerial) {
                return response()->json([
                    'success' => false,
                    'message' => 'Không tìm thấy sản phẩm phù hợp!'
                ]);
            } else {
                if ($productSerial->status !== 'in_stock') {
                    return response()->json([
                        'success' => false,
                        'message' => 'Serial đang được sử dụng rồi. Không thể xóa!'
                    ]);
                }
                $productSerial->delete();
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

    public function showFormProductSerial()
    {
        $products = $this->getProducts();
        return view('admin.pages.product_serial_add', compact('products'));
    }

    public function returnBlade()
    {
        $products = $this->getProducts();
        $productSerials = $this->getProductSerials();
        return view('admin.pages.product_serials', compact('products', 'productSerials'));
    }
}
