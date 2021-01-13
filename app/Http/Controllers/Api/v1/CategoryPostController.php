<?php

namespace App\Http\Controllers\Api\v1;

use App\CategoryPost;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['categorys']=CategoryPost::all();
        return view('layouts.category.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $category = new CategoryPost;
        $category->title=$request->title;
        $category->save();
        return redirect()->route('category.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CategoryPost  $categoryPost
     * @return \Illuminate\Http\Response
     */
    public function show($categoryPost)
    {
        $data['category'] =CategoryPost::find($categoryPost);
        return view('layouts.category.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CategoryPost  $categoryPost
     * @return \Illuminate\Http\Response
     */
    public function edit(CategoryPost $categoryPost)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CategoryPost  $categoryPost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $categoryPost)
    {
        $data=$request->all();
        $category=CategoryPost::find($categoryPost);
        $category->title=$data['title'];
        $category->save();
        // return redirect()->back();
        // $category->save();
        return redirect()->route('category.index')->with('status','ĐÃ suawr thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CategoryPost  $categoryPost
     * @return \Illuminate\Http\Response
     */
    public function destroy($categoryPost)
    {
        $category=CategoryPost::find($categoryPost)->delete();
        return redirect()->back();
    }
}
