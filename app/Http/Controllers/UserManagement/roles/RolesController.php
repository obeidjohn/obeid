<?php

namespace App\Http\Controllers\UserManagement\roles;
use App\Http\Controllers\Controller;

class RolesController extends Controller
{
    public function index(){
        return view('manage.roles.index');
    }

}
