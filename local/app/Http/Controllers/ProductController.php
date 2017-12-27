<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $products = Product::orderBy('id', 'DESC')->paginate(5);
        return view('backend.product.index', compact('products'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dd_categories = Category::orderBy('order')->get();
        foreach ($dd_categories as $key => $data) {
            if ($data->level == CATEGORY_CAP_1) {
                $data->name = ' ---- ' . $data->name;
            } else if ($data->level == CATEGORY_CAP_2) {
                $data->name = ' --------- ' . $data->name;
            } else if ($data->level == CATEGORY_CAP_3) {
                $data->name = ' ------------------ ' . $data->name;
            } else if ($data->level == CATEGORY_CAP_3) {
                $data->name = ' ------------------ ' . $data->name;
            }
        }
        $newArray = [];
        self::showCategoryDropDown($dd_categories, 0, $newArray);
        $dd_categories = array_pluck($newArray, 'name', 'id');
        return view('backend.product.create', compact('roles', 'dd_categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product();
        $name = $request->input('name');
        $description = $request->input('description');
        $order = $request->input('order');
        $isActive = $request->input('product_is_active');
        $categoryID = $request->input('category');
        $seoTitle = $request->input('seo_title');
        $seoDescription = $request->input('seo_description');
        $price = $request->input('price');
        $sale = $request->input('sale');
        if ($price) {
            $product->price = $price;
            if ($sale) {
                $product->sale = $sale;
                if ($sale != 0 && $price != 0)
                    $product->final_price = (int)$price - ((int)$price * (int)$sale / 100);
            }
        }
        if ($order) {
            $product->order = $order;
        }
        if ($isActive) {
            $product->isActive = 1;
        } else {
            $product->isActive = 0;
        }
        if ($description) {
            $product->description = $description;
        }
        if ($seoTitle) {
            $product->seo_title = $seoTitle;
        }
        if ($seoDescription) {
            $product->seo_description = $seoDescription;
        }
        $image = $request->input('image');
        $image = substr($image, strpos($image, 'images'), strlen($image) - 1);
        $product->name = $name;
        $product->path = chuyen_chuoi_thanh_path($name);
        $product->image = $image;
        $product->category_id = $categoryID;
        $product->user_id = Auth::user()->id;
        $product->save();
        return redirect()->route('product.index')
            ->with('success', 'Tạo Mới Thành Công Sản Phẩm');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $dd_categories = Category::orderBy('order')->get();
        foreach ($dd_categories as $key => $data) {
            if ($data->level == CATEGORY_CAP_1) {
                $data->name = ' ---- ' . $data->name;
            } else if ($data->level == CATEGORY_CAP_2) {
                $data->name = ' --------- ' . $data->name;
            } else if ($data->level == CATEGORY_CAP_3) {
                $data->name = ' ------------------ ' . $data->name;
            }
        }
        $newArray = [];
        self::showCategoryDropDown($dd_categories, 0, $newArray);
        $dd_categories = array_pluck($newArray, 'name', 'id');
        $dd_categories = array_map(function ($index, $value) {
            return ['index' => $index, 'value' => $value];
        }, array_keys($dd_categories), $dd_categories);
        return view('backend.product.edit', compact('product', 'dd_categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $name = $request->input('name');
        $description = $request->input('description');
        $order = $request->input('order');
        $isActive = $request->input('product_is_active');
        $categoryID = $request->input('category');
        $seoTitle = $request->input('seo_title');
        $seoDescription = $request->input('seo_description');
        $price = $request->input('price');
        $sale = $request->input('sale');
        if ($price) {
            $product->price = $price;
            if ($sale) {
                $product->sale = $sale;
                if ($sale != 0 && $price != 0)
                    $product->final_price = (int)$price - ((int)$price * (int)$sale / 100);
            }
        }
        if ($order) {
            $product->order = $order;
        }
        if ($isActive) {
            $product->isActive = 1;
        } else {
            $product->isActive = 0;
        }
        if ($description) {
            $product->description = $description;
        }
        if ($seoTitle) {
            $product->seo_title = $seoTitle;
        }
        if ($seoDescription) {
            $product->seo_description = $seoDescription;
        }
        $image = $request->input('image');
        $image = substr($image, strpos($image, 'images'), strlen($image) - 1);
        $product->name = $name;
        $product->path = chuyen_chuoi_thanh_path($name);
        $product->image = $image;
        $product->category_id = $categoryID;
        $product->user_id = Auth::user()->id;
        $product->save();
        return redirect()->route('product.index')
            ->with('success', 'Cập Nhật Thành Công sản Phẩm');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('product.index')
            ->with('success', 'Đã Xóa Thành Công');
    }

    public function search(Request $request)
    {
        $keywords = preg_replace('/\s+/', ' ', $request->input('txtSearch'));
        $products = Product::where('name', 'like', '%' . $keywords . '%')->orderBy('id', 'DESC')->paginate(5);
        return view('backend.product.index', compact('products', 'keywords'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    public function showCategoryDropDown($dd_categories, $parent_id = 0, &$newArray)
    {
        foreach ($dd_categories as $key => $data) {
            if ($data->parent_id == $parent_id) {
                array_push($newArray, $data);
                $dd_categories->forget($key);
                self::showCategoryDropDown($dd_categories, $data->id, $newArray);
            }
        }
    }
}
