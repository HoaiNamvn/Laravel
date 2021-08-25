<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    //
    function add()
    {
        DB::table('posts')->insert(
            ['title' => 'Post4', 'content' => 'content4', 'user_id' => 1]
        );
    }
    function show()
    {
         // $posts = DB::table('posts') ->select('id','title','content') ->get();
        // foreach($posts as $post){
        //     echo $post->title."&nbsp";
        //     echo $post->content;
        //     echo "<br>";
        // }
        //return $posts;
        //    $posts =DB::table('posts') ->where('id',1) ->first();
        // $posts =DB::table('posts') ->find(2);
        //    echo $posts ->title;
        //    print_r($posts);
        // $number_posts = DB::table('posts')->where('user_id', 1)->count();
        // echo $number_posts;
        $max = DB::table('posts') -> max('user_id');
        $min = DB::table('posts') -> min('user_id');
        $avg = DB::table('posts') -> avg('user_id');  
        echo $max."<br>".$min."<br>".$avg;
    }
}