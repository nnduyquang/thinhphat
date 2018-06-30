<?php

namespace App\Http\Controllers;


use App\CategoryItem;
use App\Post;
use App\Product;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function showHomepage()
    {
        $list_sidebar2 = CategoryItem::where('level', '=', 0)->where('isActive','=',1)->orderBy('order')->get();
        $list_product = [];
        $final_array = [];
        foreach ($list_sidebar2 as $key => $data) {
            self::getAllProductByCategory($data, $list_product);

            $list_subMenu=CategoryItem::where('parent_id','=',$data->id)->get();
            array_push($final_array, array(["category" => $data, "list_product" => collect($list_product)->sortByDESC('created_at')->take(12),"list_subMenu"=>$list_subMenu]));
            $list_product = [];
        }
        $bestSaleProduct=Product::where('is_best_sale',1)->where('isActive',ACTIVE)->orderBy('updated_at','DESC')->take(8)->get();
        foreach ($bestSaleProduct as $key=>$data){
            $data->price=chuyen_thap_phan($data->price);
            $data->final_price=chuyen_thap_phan($data->final_price);
        }
        return view('frontend.homepage.index', compact('final_array','bestSaleProduct'));
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
    public function getFrontendContentCategory()
    {
        $list_sidebar2 = CategoryItem::where('level', '=', 0)->where('isActive','=',1)->orderBy('order')->get();
        $final_array = [];
        foreach ($list_sidebar2 as $key => $data) {
            $list_subMenu=CategoryItem::where('parent_id','=',$data->id)->get();
            array_push($final_array, array(["category" => $data,"list_subMenu"=>$list_subMenu]));
        }
        return view('frontend.common.menu.m-category', compact('final_array'));
    }
    public function getDetailCatalogue($pathCatalogue){
        $catalogue=Post::where('post_type','=',2)->where('path','=',$pathCatalogue)->first();
        return view('frontend.catalogue.catalogue', compact('catalogue'));
    }
    public function getPage($type)
    {
        if($type==2){
            $configs = Config::whereIn('name', ['config-introduce'])->first();
            $data['content']=$configs->content;
        }
        $data['type'] = $type;
        return view('frontend.page.index', compact('data'));
    }

}
