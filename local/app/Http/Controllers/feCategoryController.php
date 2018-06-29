<?php

namespace App\Http\Controllers;


use App\CategoryItem;
use App\Post;
use App\Product;
use Illuminate\Http\Request;

class feCategoryController extends Controller
{
    public function getDetailCategory($pathCategory){
        $category=CategoryItem::where('path','=',$pathCategory)->first();
        $sub_Category=CategoryItem::where('parent_id','=',$category->id)->get();
        $list_product=[];
        self::getAllProductByCategory($category, $list_product);
        $catalogues=Post::where('post_type','=',2)->where('isActive','=',1)->get();
        return view('frontend.category.category', compact('category','sub_Category','list_product'));
    }

    public function getAllProductByCategory($category, &$list_product)
    {
        $list = Product::where('category_product_id', '=', $category->id)->orderBy('created_at')->get();
        foreach ($list as $key2 => $data2) {
            $data2->path='/san-pham/'.$category->path.'/'.$data2->path;
            $data2->price=number_format($data2->price, 0, ',', '.');
            $data2->final_price=number_format($data2->final_price, 0, ',', '.');
            array_push($list_product, $data2);
        }
        $sub = CategoryItem::where('parent_id', '=', $category->id)->get();
        foreach ($sub as $key => $data) {
            self::getAllProductByCategory($data, $list_product);
        }
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
