<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; //thí line auto added

class Post extends Model
{ // khai báo sủ dụng softdelete
    use SoftDeletes;
    //
    // protected $table = 'table_name';
    // xác định những trường sẽ được duyệt
    protected $fillable = ['title', 'content', 'user_id', 'votes','thumbnail'];
    #tạo mối quan hệ giữa post và feature

    function FeaturedImages()
    {
        return $this->hasOne('App\FeaturedImages');
    }
    function user()
    {
        return $this->belongsTo('App\User');
    }
}
