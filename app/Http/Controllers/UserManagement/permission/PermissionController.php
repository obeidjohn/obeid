<?php

namespace App\Http\Controllers\UserManagement\permission;
use App\Http\Controllers\Controller;

class PermissionController extends Controller
{
    public function index(){
        return view('manage.permission.index');
    }

}
