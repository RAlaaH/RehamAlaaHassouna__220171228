<?php

namespace App\Http\Controllers\Dashboard;

use App\Category;
use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

//use Illuminate\Support\Facades\Validator;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
//        dd($posts);  //return 3-Item

//        foreach($posts as $post){
//            dd($post->category);   //return or print null
//        }





        return view('dashboard.posts.index',compact('posts'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('dashboard.posts.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*$request->validate([
           'title' => 'required|max:50',
           'code'=>'required|unique:posts|integer',
           'body' => 'required',
           'category_id' => 'required|integer',
           'author_email' => 'required|email'
        ]);*/

        $rules = [
            'title' => 'required|max:50',
            'code'=>'required|unique:posts|integer',
            'body' => 'required',
            'category_id' => 'required|integer',
            'author_email' => 'required|email',
            'post_image' => 'required|mimes:jpeg,png,bmp,jpg'
        ];


        $messages = [
            'title.required' => 'The Post title field should be entered',
            'title.max' => 'Title should not be more than 50 character',
            'code.unique' => 'Post code should not duplicated'
        ];

        $validator = Validator::make($request->all(),$rules,$messages);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }
        //dd($request->toArray());
        $post = new Post();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->code = $request->code;
        $post->category_id = $request->category_id;
        $post->author_email = $request->author_email;

        $postImage = $request->file('post_image');
        $fileName = time().'.'.$postImage->extension();
        $postImage->move('post_images',$fileName);


        $post->feature_image = $fileName;
        $post->large_image = $fileName;
        $post->save();

        return redirect()->route('dashboard.posts.index')->with('success','Post created successffuly');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $categories = Category::all();
        return view('dashboard.posts.edit',compact('post','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $post->title = $request->title;
        $post->body = $request->body;
        $post->category_id = $request->category_id;

        $post->save();

        return redirect()->route('dashboard.posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('dashboard.posts.index');
    }
}
