<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.posts.index', ['posts' => Post::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Post;
        $post->title = $request->input('title');
        $post->sub_title = $request->input('sub_title');
        $post->paragraph1 = $request->input('paragraph_1');
        $post->paragraph2 = $request->input('paragraph_2');
        $post->paragraph3 = $request->input('paragraph_3');
        $post->image = $request->input('image_url');
        $post->caption_image = $request->input('caption_image');
        $post->quote = $request->input('quote');
        $post->published = $request->input('publish');
        $post->save();

        return redirect()->route('admin.posts')->withFlashSuccess(' Posts Added Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function api_post(){
        $posts = Post::all();
        if($posts){
            $status = 200;
        }else{
            $status = 404;
        }
        return response()->json(['status' => $status, 'data' => $posts],$status);
    }

    public function api_post_detail(Request $request,$id){
        $post = Post::find($id);
        if($post){
            $status = 200;
        }else{
            $status = 404;
        }
        return response()->json(['status' => $status, 'data' => $post],$status);
    }
}
