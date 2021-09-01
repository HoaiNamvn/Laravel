<?php

namespace App\Http\Controllers;

use App\FeaturedImages;
use Illuminate\Http\Request;

class FeaturedImangesController extends Controller
{
    //
    function read()
    {
        $post = FeaturedImages::find(1)
            ->post;
        return $post;
    }
}
