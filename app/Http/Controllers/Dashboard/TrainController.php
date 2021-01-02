<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Tag;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TrainController extends Controller
{
    public function encrypt(){
        $message = 'welcome to IUG';

        $hashed = Hash::make($message);
        //dd($hashed);

        $encrypted = encrypt($message);
        $decrypted_message = decrypt($encrypted);
        try{
            $decrypted_message = decrypt($encrypted.'123');
        }catch (DecryptException $de){
            dd('encrypted text was changed');
        }
        $decrypted_message = decrypt($encrypted.'123');
        dd($decrypted_message);
    }
    public function poly_relationships(){
        /*$user = User::find(14);
        dd($user->image->url);
        dd($user->image);

        $post = Post::find(51);
        dd($post->image->url);
        dd($user->image);

        $video = Video::find(6);
        foreach ($video->shares as $share){
            echo $share->url.'<br>';
        }
        dd();
        dd($video->shares);

        $post = Post::find(65);
        foreach ($post->shares as $share){
            echo $share->url.'<br>';
        }
        dd();
        dd($post->shares);

        $post = Post::find(110);
        foreach ($post->tags as $tag){
            echo $tag->name.'<br>';
        }
        dd();
        dd($post->tags);

        $video = Video::find(81);
        foreach ($video->tags as $tag){
            echo $tag->name.'<br>';
        }
        dd();
        dd($video->tags);*/
//        $tag = Tag::find(3);
//        dd($tag->posts);

//        $tag = Tag::find(1);
//        dd($tag->videos);

    }

    public function relationships()
    {
        /*$user = User::find(5);
        dd($user->phone);

        $phone = Phone::find(3);
        dd($phone->user);

        $post = Post::find(6);

        foreach ($post->comments as $comment){
            echo $comment->name.' '.$comment->email.'<br>';
        }
        dd();
        dd($post->comments);

        $comment = Comment::find(9);
        dd($comment->post);
        dd($comment->post->title);

        $user = User::find(10);
        foreach ($user->roles as $role){
            echo $role->name.'<br>';
        }
        dd();
        dd($user->roles);

        $role = Role::find(5);
        foreach ($role->users as $user){
            echo $user->email.'<br>';
        }
        dd();
        dd($role->users);*/

    }

    public function orm()
    {
        /*$categories = Category::all();

        foreach ($categories as $category){
            echo $category->code.'<br>';
        }

        $categories = Category::where('id','>',15)->get();

        $category = Category::find(1);
        $categories = Category::find([1,2,3]);

        $category = Category::findorfail(100);

        dd(Post::min('views'));

        $category = new Category();
        $category->name = 'finance';
        $category->code = 'FIN';
        $category->save();


        $category = Category::create([
            'name' => 'Food',
            'code' => 'FOo'
        ]);

        $category = Category::find(1);
        $category->name = 'Clothes';
        $category->code = 'CLT';
        $category->save();

        $categories = Category::where('id','>',5)->update([
            'code' => 'ABC'
        ]);

        $category = Category::find(28);
        $category->delete();


        $category = Category::destroy(26);
        $category = Category::destroy([24,25]);


        $category = Category::find(10)->delete();

        $categories = Category::withTrashed()->get();
        $categories = Category::onlyTrashed()->get();
        $categories = Category::withTrashed()->find(10)->restore();
        dd($categories);*/
    }

    public function querybuilder()
    {
        //$posts = Post::all();
        //$posts = DB::table('posts')->get();
        //$posts = DB::table('posts')->limit(10)->get();
        //$posts = DB::table('posts')->where('category_id',2)->get();
        //$posts = DB::table('posts')->where('category_id','<=',2)->get();
        /*$posts = DB::table('posts')->where([
           ['category_id',2],
           ['user_id','>=',5]
        ])->get();*/

        /*$posts = DB::table('posts')
            ->where('user_id',10)
            ->where('category_id',3)
            ->select('title','views')
            ->get();*/

        //$posts = DB::table('posts')->pluck('id');
        //$posts = DB::table('posts')->pluck('title','views');
        //$posts = DB::table('posts')->find(10);
        /*$posts = DB::table('posts')
            ->where('category_id',3)
            ->select('title','views')
            ->orderBy('views','asc')
            ->get();*/

        /*$views_average = DB::table('posts')->avg('views');
        dd($views_average);*/

        /*$views_min = DB::table('posts')->min('views');
        dd($views_min);*/

        /*$views_max = DB::table('posts')->max('views');
        dd($views_max);*/

        /*$posts = DB::table('posts')->orderBy('shares','desc')
            ->chunk(1000,function ($items){
            foreach ($items as $item){
                echo $item->shares.' '.$item->title.'<br>';
            }
        });*/
        //$posts = DB::table('posts')->whereIn('category_id',[2,5])->get();
        //$posts = DB::table('posts')->whereBetween('category_id',[2,7])->get();
        //$posts = DB::table('posts')->whereNull('category_id')->get();
        /*$posts = DB::table('posts')
            ->join('categories','categories.id','posts.category_id')
            ->select('posts.title','categories.name','posts.views')->get();

        $posts = DB::table('posts')->skip(10)->take(5)->get();


        $posts = DB::table('posts')->where('category_id',2)->get();
        $posts = DB::table('posts')->where('category_id',2)->first();
        $posts = DB::table('posts')->find(3);
        dd($posts);*/
        /*DB::table('categories')->insert([
           'name' => 'Polictical',
           'code' => 'PLT',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('categories')->insert([
            ['name' => 'Health', 'code' => 'HLT', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Economy', 'code' => 'ECY', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]
        ]);

        DB::table('categories')->where('id',22)->update([
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::tomorrow(),
        ]);

        DB::table('posts')->where('id',1)->increment('views');
        DB::table('posts')->where('id',1)->increment('views',5);
        DB::table('posts')->where('id',1)->decrement('views');
        DB::table('posts')->where('id',1)->decrement('views',4);

        DB::table('comments')->delete();
        DB::table('comments')->truncate();*/

//        DB::enableQueryLog();
//
//        $posts = DB::table('posts')->whereIn('category_id', [2, 5])->get();
//
//        $posts = DB::table('posts')->where('category_id', '<=', 2)->get();
//
//        $posts = DB::table('posts')->where([
//            ['category_id', 2],
//            ['user_id', '>=', 5]
//        ])->get();
//
//        dd(DB::getQueryLog());
        return view('dashboard.posts.index');
    }

}
