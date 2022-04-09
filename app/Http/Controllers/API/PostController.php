<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\context;

class PostController extends Controller
{
      public function index()
    {
        $posts = context::all()->toArray();
        return array_reverse($posts);
    }
 
    // add post
    public function add(Request $request)
    {
        $post = new context([
            'title' => $request->input('title'),
            'description' => $request->input('description')
        ]);
        $post->save();
 
        return response()->json('The post successfully added');
    }
 
    // edit post
    public function edit($id)
    {
        $post = context::find($id);
        return response()->json($post);
    }
 
    // update post
    public function update($id, Request $request)
    {
        $post = context::find($id);
        $post->update($request->all());
 
        return response()->json('The post successfully updated');
    }
 
    // delete post
    public function delete($id)
    {
        $post = context::find($id);
        $post->delete();
 
        return response()->json('The post successfully deleted');
    }
}
