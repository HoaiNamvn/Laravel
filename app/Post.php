<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; //thí line auto added

class Post extends Model
{ // khai báo sủ dụng softdelete
    use SoftDeletes;
    //
    // protected $table = 'table_name';
    protected $fillable = ['title', 'content', 'user_id', 'votes'];
}
