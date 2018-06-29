<?php

namespace App\Repositories\Menu;

use App\Menu;
use App\CategoryItem;
use App\Post;
use App\Repositories\EloquentRepository;

class MenuRepository extends EloquentRepository implements MenuRepositoryInterface
{
    public function getModel()
    {
        return Menu::class;
    }

    public function getAllMenu()
    {
        $list_sidebar = CategoryItem::select('id', 'name', 'level', 'parent_id','path')->where(function($query){
            $query->where('level', '=', 0)->orWhere('level', '=', 1);
        })->where('isActive','=',1)->orderBy('order')->get();
        $menu_sidebar = [];
        self::showCategoryDropDown($list_sidebar, 0, $menu_sidebar);
        $menu_horizon= CategoryItem::where('level', '=', 0)->orderBy('order')->get();
        $catalogues=Post::where('post_type','=',2)->where('isActive','=',1)->get();
        $data['menu_sidebar']=$menu_sidebar;
        $data['menu_horizon']=$menu_horizon;
        $data['catalogues']=$catalogues;
        return $data;
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