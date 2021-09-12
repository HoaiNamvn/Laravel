<?php

namespace App\Http\Controllers;

use App\Mail\DemoMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class DemoController extends Controller
{
    function sendmail()
    {
        Mail::to('doanhoainam098@gmail.com')->send(new DemoMail);
    }
}
