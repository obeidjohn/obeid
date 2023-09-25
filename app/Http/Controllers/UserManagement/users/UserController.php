<?php

namespace App\Http\Controllers\UserManagement\users;

class UserController
{
    public function index(){
        return view('manage.users.index');
    }

}
