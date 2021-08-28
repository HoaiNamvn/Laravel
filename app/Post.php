<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
   // protected $table = 'table_name';
   protected $fillable = ['title','content','user_id','votes'];

}
