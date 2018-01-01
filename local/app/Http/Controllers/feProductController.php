<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Product;
use Illuminate\Http\Request;

class feProductController extends Controller
{
    public function getDetailProduct($pathCategory, $pathProduct)
    {
        $product = Product::where('path', '=', $pathProduct)->first();
        $list_sidebar = Category::select('id', 'name', 'level', 'parent_id','path')->where('level', '=', 0)->orWhere('level', '=', 1)->orderBy('order')->get();
        $menu_horizon= Category::where('level', '=', 0)->orderBy('order')->get();
        $menu_sidebar = [];
        $order_product = [];
        self::showCategoryDropDown($list_sidebar, 0, $menu_sidebar);
        $category = Category::where('path', '=', $pathCategory)->first();
        self::getAllProductByCategory($category, $order_product);
        foreach ($order_product as $key => $data) {
            if ($data->id == $product->id) {
                unset($order_product[$key]);
                break;
            }
        }
        $order_product = collect($order_product)->sortByDESC('created_at')->take(4);
        $catalogues=Post::where('post_type','=',2)->where('isActive','=',1)->get();
        return view('frontend.detail.detail', compact('product', 'menu_sidebar', 'order_product','menu_horizon','catalogues'));
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

    public function getAllProductByCategory($category, &$list_product)
    {
        $list = Product::where('category_id', '=', $category->id)->orderBy('created_at')->get();
        foreach ($list as $key2 => $data2) {
            $data2->path = $category->path . '/san-pham/' . $data2->path;
            array_push($list_product, $data2);
        }
        $sub = Category::where('parent_id', '=', $category->id)->get();
        foreach ($sub as $key => $data) {
            self::getAllProductByCategory($data, $list_product);
        }
    }
}
