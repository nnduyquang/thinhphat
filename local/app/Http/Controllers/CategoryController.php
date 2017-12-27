<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
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
        $categories = [];
        self::showCategoryDropDown($dd_categories, 0, $categories);
        return view('backend.category.index', compact('categories'))
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
            }else if ($data->level == CATEGORY_CAP_3) {
                $data->name = ' ------------------ ' . $data->name;
            }
        }
        $newArray = [];
        self::showCategoryDropDown($dd_categories, 0, $newArray);
        $dd_categories = array_prepend(array_pluck($newArray, 'name', 'id'), 'Menu Cha', '-1');
        return view('backend.category.create', compact('roles', 'dd_categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new Category();
        $name = $request->input('name');
        $order = $request->input('order');
        $description = $request->input('description');
        $seoTitle = $request->input('seo_title');
        $seoDescription = $request->input('seo_description');
        $isActive = $request->input('category_is_active');
        $parentID = $request->input('parent');
        if ($parentID != CATEGORY_CAP_CHA) {
            $category->parent_id = $parentID;
            $level = Category::where('id', '=', $parentID)->first()->level;
            $category->level = (int)$level + 1;
        } else
            $category->level = 0;
        if ($order) {
            $category->order = $order;
        }
        if ($description) {
            $category->description = $description;
        }
        if ($seoTitle) {
            $category->seo_title = $seoTitle;
        }
        if ($seoDescription) {
            $category->seo_description = $seoDescription;
        }

        if ($isActive) {
            $category->isActive = 1;
        } else {
            $category->isActive = 0;
        }
        $image = $request->input('image');
        $image = substr($image, strpos($image, 'images'), strlen($image) - 1);
        $category->name = $name;
        $category->path = chuyen_chuoi_thanh_path($name);
        $category->image = $image;
        $category->user_id = Auth::user()->id;
        $category->save();
        return redirect()->route('category.index')
            ->with('success', 'Tạo Mới Thành Công Loại Sản Phẩm');
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
        $category = Category::find($id);
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
        $dd_categories = array_prepend(array_pluck($newArray, 'name', 'id'), 'Menu Cha', '-1');
        $dd_categories = array_map(function ($index, $value) {
            return ['index' => $index, 'value' => $value];
        }, array_keys($dd_categories), $dd_categories);
        return view('backend.category.edit', compact('category', 'dd_categories'));
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
        $category = Category::find($id);
        $name = $request->input('name');
        $isActive = $request->input('category_is_active');
        $order = $request->input('order');
        $description = $request->input('description');
        $seoTitle = $request->input('seo_title');
        $seoDescription = $request->input('seo_description');
        $parentID = $request->input('parent');
        if ($parentID != $category->parent_id) {
            if ($parentID != CATEGORY_CAP_CHA) {
                $category->parent_id = $parentID;
                $level = Category::where('id', '=', $parentID)->first()->level;
                $category->level = (int)$level + 1;
            } else {
                $category->parent_id = 0;
                $category->level = 0;
            }
        }
        if ($order) {
            $category->order = $order;
        }
        if ($description) {
            $category->description = $description;
        }
        if ($seoTitle) {
            $category->seo_title = $seoTitle;
        }
        if ($seoDescription) {
            $category->seo_description = $seoDescription;
        }
        if ($isActive) {
            $category->isActive = 1;
        } else {
            $category->isActive = 0;
        }
        $image = $request->input('image');
        $image = substr($image, strpos($image, 'images'), strlen($image) - 1);
        $category->name = $name;
        $category->path = chuyen_chuoi_thanh_path($name);
        $category->image = $image;
        $category->user_id = Auth::user()->id;
        $category->save();
        return redirect()->route('category.index')
            ->with('success', 'Cập Nhật Thành Công Loại Sản Phẩm');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('category.index')
            ->with('success', 'Đã Xóa Thành Công');
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
