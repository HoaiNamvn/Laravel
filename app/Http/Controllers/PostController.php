<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    //
    function add()
    {
        #khai báo giá trị cho các trường field đã khai báotrên database
        // DB::table('posts')->insert(
        //     ['title' => 'Post5', 'content' => 'content5', 'user_id' => 4, 'votes' => 50]
        // );
        // $post = new Post;

        // $post -> title = "laravel 1";
        // $post -> content = "content laravel 1";
        // $post ->user_id = 1;
        // $post -> votes = 60;

        // $post ->save();
        // Post::create([
        //     'title' => 'Create3',
        //     'content' => 'content create 3',
        //     'user_id' => 1,
        //     'votes' => 97
        // ]);
        return view('admin.post.create');
    }
    function store(Request $request)  // yêu cầu  lấy object
    {
        // kiểm duyêt data
        $request->validate(
            [
                'title' => 'required|max:100',  //yêu cầu
                'content' => 'required'
            ],
            [
                'required' => 'Trường :attribute không được hổ trợ '
            ],
            [
                'required' => ':attribute không được để trống ',
                'min' => ':attribute có độ dài ít nhất :min ký tự ',
                'max' => ':attribute có độ dài tối đa :max ký tự '
            ],
            [
                'title' => 'Tiêu đề ',
                'content' => 'Nội dung '
            ]
        );
        $input = $request->all();
        if ($request->hasFile('file')) {
            echo " Có file ";
            // get size file
            $file = $request->file;
            echo "<br>";
            //get name file
            echo $filename = $file->getClientOriginalName();
            echo "<br>";
            //gret extension
            echo $file->getClientOriginalExtension();
            echo "<br>";
            // get size file size
            echo $file->getSize();
            echo "<br>";
            // move file into server
            // tham so 1 dia chi save file , tham so 2 ten cua file
            $path =  $file->move('public/uploads', $file->getClientOriginalName());
            $thumbnail = 'public/uploads/' . $filename;
            $input['thumbnail'] = $thumbnail;
        }
        // thêm thông tin uesr_id
        $input['user_id'] = 4;
        //gọi create method trong model
        Post::create($input);
        //     return $request->input();
        //chuyen huong qua mot url
        // return redirect('post/show');
        //chuyen huong kem theo flashing section
        return redirect('post/show')->with('status', 'Thêm bài viết thành công !');
        //chuyen huong qua mot route
        // return redirect()->route('post.show');
    }
    function show()

    {
        return redirect()->away('http://unitop.vn');
        // $posts = DB::table('posts') ->select('id','title','content') ->get();
        // foreach($posts as $post){
        //     echo $post->title."&nbsp";
        //     echo $post->content;
        //     echo "<br>";
        // }
        //return $posts;
        #find by id
        //    $posts =DB::table('posts') ->where('id',1) ->first();
        // $posts =DB::table('posts') ->find(2);
        //    echo $posts ->title;
        //    print_r($posts);
        // $number_posts = DB::table('posts')->where('user_id', 1)->count();
        // echo $number_posts;
        # max min average

        // $max = DB::table('posts') -> max('user_id');
        // $min = DB::table('posts') -> min('user_id');
        // $avg = DB::table('posts') -> avg('user_id');
        // echo $max."<br>".$min."<br>".$avg."<br>";
        #join table on condition

        // $posts = DB::table('posts')
        // ->join('users','users.id','=','posts.user_id')
        // ->select('users.name','posts.*')
        // ->get();
        // print_r($posts);
        // return $posts;

        #get on condition
        // $posts = DB::table('posts')
        // ->where('title',"like","%iphone%")
        // ->get();

        #AND condition
        // $posts = DB::table('posts')
        //     ->where(
        //         [
        //             ['title', 'like', '%iphone%'],
        //             ['votes', '>', 60]
        //         ]
        //     )->get();

        #OR condition
        // $posts =DB::table('posts')
        // ->where('votes','<',16)
        // ->orwhere('user_id','=',1)
        // ->get();

        #Gruop by and orderBy
        // $posts = DB::table('posts')
        // ->selectRaw("COUNT('id') as number_posts,user_id")
        // ->groupBy('user_id')
        // ->orderBy('number_posts','desc')
        // ->get();
        #Order by sắp xếp theo thứ tự
        // $posts = DB::table('posts')
        //     ->orderBy('votes') // hoac  orderBy('votes','desc') giam
        //     ->get();

        #limit
        // $posts = DB::table('posts')
        //     ->offset(2)
        //     ->limit(3)
        //     ->get();
        // echo "<pre>";
        // print_r($posts);
        // echo "</pre>";
        // $posts = Post::all();
        // return view('admin.post.index', compact('posts'));
    }
    function update($id)
    {
        #query builder
        // DB::table('posts')
        //     ->where('id', $id)
        //     ->update([
        //         'title' => 'Macbook 2021',
        //         'votes' => 30,
        //         'content' => 'event open macbook 2021'
        //     ]);
        // echo "Đã cập nhật thành công ";
        #ELOQUENT ORM
        // $post =  Post::find($id);
        // $post -> title = "laravel 2";
        // $post -> content = "content laravel 2";
        // $post ->user_id = 4;
        // $post -> votes = 90;

        // $post ->save();
        $post = Post::where('id', $id)
            ->update([
                'title' => 'Update',
                'content' => 'content Update',
                'user_id' => 4,
                'votes' => 70
            ]);
    }
    function delete($id)
    { #query builder
        // DB::table('posts')
        //     ->where('id', $id)
        //     ->delete();
        #xoa bang ElOQUENT ORM delete()
        $post = Post::find($id);
        $post->delete();
        # cách xóa thường dùng , xóa không theo id mặc định
        // Post::where('user_id',$id)
        // ->delete();
        # xóa theo destroy
        // Post::destroy($id);
        # xóa bản ghi theo destroy có input là 1 array
        // return Post::destroy([1, 5]);  // trả về số bản ghi đẫ được xóa
    }
    function read()
    {
        #lấy danh sách bản ghi
        // $posts = Post::all(); // Post la ten model
        // echo "<pre>";
        // print_r($posts);
        // echo "</pre>";
        //$posts = Post::where('title','like','%iphone%') -> get();
        #lấy 1 bản ghi theo điều kiện
        // $post = Post::where('user_id', 4)->first();
        // return $post->content;
        #tìm bản ghi theo id
        // $post = Post::find(9);
        // return $post ->id;
        #lấy1 danh sách bản ghi  theo id
        // $posts = Post::find([1,5,10]);
        // return $posts ;
        # groupBy theo user_id
        // $posts = Post::selectRaw('count(id) as number_post, user_id')
        //     ->groupBy('user_id')
        //     ->orderBy('number_post',) //desc
        //     ->get();
        // return $posts;
        #limit
        // $posts = Post::limit(2)
        //     ->offset(3)
        //     ->get();

        // return $posts;
        # đọc bản ghi bao gồm bản ghi đã xóa tạm thời
        // $posts = Post::withTrashed()
        //     ->get();
        // return $posts;
        #chỉ lấy những phần tử đã được xóa
        // $posts = Post::onlyTrashed()
        //     ->get();
        // return $posts;
        // $post = Post::find(1)
        //     ->FeaturedImages;
        // return $post;
        $user = Post::find(18)
            ->user;
        // return $user;
        $posts = User::find(4)
            ->posts;
        return $posts;
    }
    # restore delete file -> value is  NO NULL
    function restore($id)
    {
        $posts = Post::onlyTrashed()
            ->where('id', $id)
            ->restore();
    }
    # xóa vĩnh viễn
    function permanentlyDelete($id)
    {
        Post::onlyTrashed()
            ->where('id', $id)
            ->forceDelete();
    }
}
