<?php

namespace App\Http\Controllers;

use App\Post;
use App\CategoryPost;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() //getAll list
    {
        $data['posts'] =post::all();
        return view('layouts.post.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() //getAdd
    {
        $data['categorys']=CategoryPost::all();
        return view('layouts.post.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) //postAdd
    {
        // dd($request->all());
        $post= new Post;
        $post->title=$request->title;
        $post->views=$request->views;
        $post->short_desc=$request->short_desc;
        $post->desc=$request->desc;
        if ($request->hasFile('image')) {
            $file=$request->image;
            $fileName=Str::slug($request->title, '-').'-1'.'.'.$file->getClientOriginalExtension();
            $file->move('public/images',$fileName);
            $post->image=$fileName;
        }else
        {
            $post->image='no-img.jpg';
        }
        $post->post_category_id=$request->post_category_id;
        $post->save();
        return redirect()->back();


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($post) //getEdit
    {
        $data['post'] =Post::find($post);
        $data['categorys']=CategoryPost::all();
        return view('layouts.post.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $post) //postEdit
    {
        // dd($request->all());
        $posts= Post::find($post);
        $posts->title=$request->title;
        $posts->short_desc=$request->short_desc;
        $posts->desc=$request->desc;
        if ($request->hasFile('image')) {
            unlink('public/images/'.$posts->image);
            $file=$request->image;
            $fileName=Str::slug($request->title, '-').'-1'.'.'.$file->getClientOriginalExtension();
            $file->move('public/images',$fileName);
            $posts->image=$fileName;
        }
        $posts->post_category_id=$request->post_category_id;
        $posts->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy( $post) //GetDell
    {
$post=Post::destroy($post);

return redirect()->route('post.index');
    }
}
