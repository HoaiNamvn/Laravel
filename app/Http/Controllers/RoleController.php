<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use App\User;

class RoleController extends Controller
{
    //
    function show()
    {  #tìm user có quyền có id bằng 4
        // $users = Role::find(4)
        //     ->users;
        // return $users;
        $roles = User::find(4)
            ->roles;
        return $roles;
    }
}
