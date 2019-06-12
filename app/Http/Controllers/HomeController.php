<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function home()
    {
        return view('home');
    }
    public function nav()
    {
        return view('layouts.nav');
    }

    public function blog()
    {
        return view('blog');
    }
    
    public function index()
    {
        $users = DB::select('select * from users');
        return view('index')
            ->with(compact('users'));
    }
}
