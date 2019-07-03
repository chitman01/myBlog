<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    function index()
    {
        return view('admin/dashboard');
        //return view('nav');
    }

    function profile(){
        return view('admin/profile');
    }
}
