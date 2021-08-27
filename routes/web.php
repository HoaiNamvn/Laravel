<?php
use App\Post;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\UsersController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('users/profile', function () {
    return route('profile');  //trae lại đường dẫn dài  qua function route 
})->name('profile');

// dat ten cho route
// Route::get('admin/product/add', function () {
//     return route('product.add');  //định danh modun  . action  
// })->name('product.add');

// // Định tuyến có tham số tùy chọn 
// Route::get('users/{id?}', function ($id = 0) { // id? có thể có hoặc không
//     //id= 0 khong co id , lấy ra danh sách của những user
//     return $id;
// });

// Định tuyến với tham số có ràng buộc biểu thức chính quy điều kiện 
// Route::get('product/{id}', function ($id) {
//     return $id;
// })->where('id', '[0-9]+'); //->gán điều kiện tham số id có cấu trúc từ 1-9 và có ít nhất 1 kí tư
// Route::get('product/{slug}/{id}', function ($slug, $id) {
//     return $id . '---' . $slug;
// })->where(['slug' => '[A-Za-z0-9-_]+']); //->gán điều kiện tham số id có cấu trúc từ 1-9 và có ít nhất 1 kí tư
//có thể gắn điều kiện ở file routesivicePropider ở đó điều kiện đó sẽ áp dụng cho tất cả các file 

// ĐInh tuyến qua 1 view của hệ thống biểu
Route::view('/welcome', 'welcome'); //duongdan,tenview
Route::view('/post', 'post', ['id' => 20]);

//ĐInh tuyến qua controller 
//gõ lênh  php artisan make::controller NAME

Route::get('/post/{id}', 'PostController@detail'); // tencontroller@action trong file controller 


//　　bai tap  routing
// Route::get('admin/post/add', function () {
//     return "Admin: Thêm bài viết ";
// });
// Route::get('admin/post/update/{id}', function ($id) {
//     return "Admin: Cập nhật bài viết có tham số id : ".$id;
// });
// Route::get('admin/post/show ', function () {
//     return "Admin: Show list  bài viết ";
// });
// Route::get('admin/post/delete/{id}', function ($id) {
//     return "Admin: Xóa bài viết có ID  ";
// });

// 
// Route::get('product/show/{$id}','ProductController@show');
Route::get('product/show/{id}', 'ProductController@show');
Route::get('product/update/{id}', 'ProductController@update');
Route::get('product/create/{id}', 'ProductController@create');
Route::resource('post', 'PostController');

# bài tâp controller 
#thay vì trỏ đường dẫnrồi tự khai function thì chúng ta gọi luôn controller 
#đã được khai bái vào controller@funciton
// Route::get('admin/post/add', 'AdminPostController@add');
// Route::get('admin/post/update/{id}', 'AdminPostController@update');
// Route::get('admin/post/show', 'AdminPostController@show');
// Route::get('admin/post/delete/{id}', 'AdminPostController@delete');


//Route::get('post/index', 'PostController@index');

Route::get('admin/post/show', 'AdminPostController2@show');
// Route::get('child', function () {
//     return view('child', array('data' => 9));
// });
Route::get('child',function(){
    return view('child',['data'=>5,'post_title'=>'Khóa học laravel ']);
});

Route::get('demo',function(){
    $users =array(
        1 =>array(
            'name'=> 'Phan Văn Cương '),
        2 =>array(
            'name'=> 'Đoàn Hoài Nam '),
        3 =>array(
            'name'=> 'Đoàn Hoài Dat '),
    );
    return view('demo',compact('users'));
});


# bài tâp view
Route::get('admin/post/create', 'AdminPostController@create');
Route::get('admin/post/update/{id}', 'AdminPostController@update');
Route::get('admin/post/show', 'AdminPostController@show');

#insert data in databse at route 
Route::get('users/insert',function(){
   DB::table('users') ->insert(
       ['name' =>'DOAN THI THUY CHI','email'=>'doanthithuychi021@gmail.com','password'=>bcrypt('chi123')]);
});
#bai tap controller
// Route::get('post1/add','PostController@add');
// Route::get('post1/show','PostController@show');
// Route::get('post1/update/{id}','PostController@update');
// Route::get('post1/delete/{id}','PostController@delete');

# bai tap query builder
Route::get('Admin/product/add','AdminProductController@add');
Route::get('Admin/product/show','AdminProductController@show');
Route::get('Admin/product/update/{id}','AdminProductController@update');
Route::get('Admin/product/delete/{id}','AdminProductController@delete');

#ELOQUENT ORM 
// Route::get('post/read',function(){
//     $posts =Post::all();
//     return $posts;
// });
  #------ in controller
  Route::get('posts/read','PostController@read');
