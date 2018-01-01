<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CatalogueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $catalogues = Post::where('post_type','=',2)->orderBy('id', 'DESC')->get();
        return view('backend.catalogue.index', compact('catalogues'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.catalogue.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $catalogue = new Post();
        $title = $request->input('title');
        $description = $request->input('description');
        $content = $request->input('content');
        $seoTitle = $request->input('seo_title');
        $seoDescription = $request->input('seo_description');
        $isActive = $request->input('page_is_active');
        $image = $request->input('image');
        $image = substr($image, strpos($image, 'images'), strlen($image) - 1);
        if ($isActive) {
            $catalogue->isActive = 1;
        } else {
            $catalogue->isActive = 0;
        }
        if ($description) {
            $catalogue->description = $description;
        }
        if ($seoTitle) {
            $catalogue->seo_title = $seoTitle;
        }
        if ($seoDescription) {
            $catalogue->seo_description = $seoDescription;
        }
        $catalogue->title = $title;
        $catalogue->path = chuyen_chuoi_thanh_path($title);
        $catalogue->image = $image;
        $catalogue->content = $content;
        $catalogue->post_type = 2;
        $catalogue->user_id = Auth::user()->id;
        $catalogue->save();
        return redirect()->route('catalogue.index')
            ->with('success', 'Tạo Mới Thành Công Catalogue');
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
        $catalogue = Post::find($id);
        return view('backend.catalogue.edit', compact('catalogue'));
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
        $catalogue = Post::find($id);;
        $title = $request->input('title');
        $description = $request->input('description');
        $content = $request->input('content');
        $seoTitle = $request->input('seo_title');
        $seoDescription = $request->input('seo_description');
        $isActive = $request->input('page_is_active');
        $image = $request->input('image');
        $image = substr($image, strpos($image, 'images'), strlen($image) - 1);
        if ($isActive) {
            $catalogue->isActive = 1;
        } else {
            $catalogue->isActive = 0;
        }
        if ($description) {
            $catalogue->description = $description;
        }
        if ($seoTitle) {
            $catalogue->seo_title = $seoTitle;
        }
        if ($seoDescription) {
            $catalogue->seo_description = $seoDescription;
        }
        $catalogue->title = $title;
        $catalogue->path = chuyen_chuoi_thanh_path($title);
        $catalogue->image = $image;
        $catalogue->content = $content;
        $catalogue->post_type = 2;
        $catalogue->user_id = Auth::user()->id;
        $catalogue->save();
        return redirect()->route('catalogue.index')
            ->with('success', 'Cập Nhật Thành Công Catalogue');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $catalogue = Post::find($id);
        $catalogue->delete();
        return redirect()->route('catalogue.index')
            ->with('success', 'Đã Xóa Thành Công');
    }
    public function search(Request $request)
    {
        $keywords = preg_replace('/\s+/', ' ', $request->input('txtSearch'));
        $catalogues = Post::where('title', 'like', '%' . $keywords . '%')->where('post_type','=',2)->orderBy('id', 'DESC')->paginate(5);
        return view('backend.catalogue.index', compact('catalogues', 'keywords'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }
}
