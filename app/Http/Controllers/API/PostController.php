<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $posts = Post::all();
//        $posts = DB::table('posts')->where('category_id',3)->select('title','views')->get();
        $posts = DB::table('posts')->where('category_id','<=',2)->get();

        $count  =count($posts);
        return response([
            'Status' => 'Success',
            'Counts' => $count,
            'Data' => $posts
        ]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $rules = [
            'title' => 'required|max:50',
            'code'=>'required|unique:posts|integer',
            'body' => 'required',
            'category_id' => 'required|integer',
            'author_email' => 'required|email',
        ];


        $messages = [
            'title.required' => 'The Post title field should be entered',
            'title.max' => 'Title should not be more than 50 character',
            'code.unique' => 'Post code should not duplicated'
        ];

        $validator = Validator::make($request->all(),$rules,$messages);
        if($validator->fails()){
            return response([
                'Status' => 'errors',
                'errors' => $validator->errors()
            ]);
        }


        $post = Post::create([
            'title' => $request->title,
            'body' => $request->body,
            'code' => $request->code,
            'category_id' => $request->category_id,
            'author_email' => $request->author_email
        ]);

        return response([
            'Status' => 'Success',
            'data' => $post
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(post $post)
    {
        return response([
            'Status' => 'Success',
            'data' => $post
        ]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, post $post)
    {
        $rules = [
            'title' => 'required|max:50',
            'code'=>'required|unique:posts|integer',
            'body' => 'required',
            'category_id' => 'required|integer',
            'author_email' => 'required|email',
        ];


        $messages = [
            'title.required' => 'The Post title field should be entered',
            'title.max' => 'Title should not be more than 50 character',
            'code.unique' => 'Post code should not duplicated'
        ];

        $validator = Validator::make($request->all(),$rules,$messages);
        if($validator->fails()){
            return response([
                'Status' => 'errors',
                'errors' => $validator->errors()
            ]);
        }

        $post = Post::update([
            'title' => $request->title,
            'body' => $request->body,
            'code' => $request->code,
            'category_id' => $request->category_id,
            'author_email' => $request->author_email
        ]);

        return response([
            'Status' => 'Success',
            'data' => $post
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(post $post)
    {
        $post->delete();

        return response([
            'Status' => 'Post Deleted Successfully',
            'data' => $post
        ]);

    }
}
