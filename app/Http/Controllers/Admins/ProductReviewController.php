<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;

class ProductReviewController extends Controller
{
    public function getReviews()
    {
        return Review::with('product', 'user')->get();
    }

    public function updateOldProductReview(Request $request)
    {
        try {
            $review = Review::findOrFail($request->review_id);

            if (!$review) {
                return response()->json([
                    'success' => false,
                    'message' => 'Không tìm thấy đánh giá phù hợp!'
                ]);
            } else {
                $review->status = $request->boolean('status');
                $review->save();
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

    public function deleteOldProductReview(Request $request)
    {
        try {
            $review = Review::findOrFail($request->review_id);
            if (!$review) {
                return response()->json([
                    'success' => false,
                    'message' => 'Không tìm thấy đánh giá phù hợp!'
                ]);
            } else {
                $review->delete();
                return response()->json([
                    'success' => true,
                    'message' => 'Đã xóa thành công'
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
        $reviews = $this->getReviews();
        return view('admin.pages.product_reviews', compact('reviews'));
    }
}
