<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Category;
use App\Models\Gallery;
use App\Models\CartItem;
use App\Models\Attribute;
use App\Models\ProductAttribute;
use Illuminate\Http\Request;

class ListProductController extends Controller
{
    // dùng lại ở các blade nè
    public function getCategories()
    {
        return Category::with(['children' => function ($query) {
            $query->withCount('products');
        }])
            ->withCount('products')
            ->get();
    }

    public function getLeftBanner()
    {
        return Gallery::where('type', 'left_banner')
            ->where('is_active', 1)
            ->orderBy('display_order', 'desc')
            ->first();
    }

    public function getRightBanner()
    {
        return Gallery::where('type', 'right_banner')
            ->where('is_active', 1)
            ->orderBy('display_order', 'desc')
            ->first();
    }

    public function getCartItem()
    {
        if (Auth::check())
            return CartItem::where('user_id', Auth::id())->sum('number');
        else
            return 0;
    }

    public function getTopBanner()
    {
        return Gallery::where('type', 'top_banner')
            ->where('is_active', 1)
            ->orderBy('display_order', 'desc')
            ->first();
    }

    //
    private function getFilterProducts(Request $request, $id)
    {
        $id = (int) $id;
        $query = Product::query();

        $query->where('category_id', $id);

        // Lọc theo khoảng giá
        if ($request->filled('price_min')) {
            $query->where('price', '>=', (int) $request->price_min);
        }
        if ($request->filled('price_max')) {
            $query->where('price', '<=', (int) $request->price_max);
        }

        if ($request->has('filters')) {
            foreach ($request->filters as $attributeName => $values) {
                if (!empty($values) && is_array($values)) {
                    // Lấy attribute_id dựa trên name
                    $attribute = Attribute::where('name', $attributeName)->first();
                    if ($attribute) {
                        $attributeId = $attribute->id;
                        // Tìm các product_id có giá trị value khớp với filter
                        $productIds = ProductAttribute::where('attribute_id', $attributeId)
                            ->whereIn('value', $values)
                            ->pluck('product_id')
                            ->unique();

                        $query->whereIn('id', $productIds);
                    }
                }
            }
        }

        // Sắp xếp
        switch ($request->sort) {
            case 'name_asc':
                $query->orderBy('name', 'asc');
                break;
            case 'name_desc':
                $query->orderBy('name', 'desc');
                break;
            case 'price_asc':
                $query->orderBy('price', 'asc');
                break;
            case 'price_desc':
                $query->orderBy('price', 'desc');
                break;
            default:
                $query->latest();
        }

        return $query->with('primaryImage')->paginate(12)->withQueryString();
    }

    public function getOutlineProducts($id)
    {
        $id = (int) $id;
        return Product::where('category_id', $id)
            ->where('outline', 1)
            ->limit(8)
            ->get();
    }

    public function getThisCate($id)
    {
        return Category::findOrFail($id);
    }

    //
    public function getFilterC($id)
    {
        $category = $this->getThisCate($id);

        $filterAttributes = $category->filterAttributes()
            ->with([
                'getFilterProducts' => function ($q) use ($id) {
                    $q->where('products.category_id', $id);
                }
            ])
            ->get();

        $filters = [];

        foreach ($filterAttributes as $attr) {
            // short_value từ pivot (product_attribute)
            $values = $attr->getFilterProducts
                ->pluck('pivot.value')
                ->unique()
                ->values();

            $filters[$attr->name] = $values;
        }
        return $filters;
    }

    //

    public function returnBlade(Request $request, $slug, $id)
    {
        // dùng lại ở các blade này
        $categories = $this->getCategories();
        $leftBanner = $this->getLeftBanner();
        $rightBanner = $this->getRightBanner();
        $topBanner = $this->getTopBanner();
        $countItem = $this->getCartItem();
        //

        $products = $this->getFilterProducts($request, $id);

        $outlineProducts = $this->getOutlineProducts($id);

        $filter = $this->getFilterC($id);

        $thisCategory = $this->getThisCate($id);

        // Nếu là AJAX thì chỉ trả về partial list
        if ($request->ajax()) {
            return view('clients.partials.filter_list_product', compact('products'))->render();
        }

        // Nếu load lần đầu thì trả về trang đầy đủ
        return view('clients.pages.list_product', compact('slug', 'id', 'products', 'outlineProducts', 'filter', 'categories', 'leftBanner', 'rightBanner', 'topBanner', 'countItem', 'thisCategory'));
    }
}
