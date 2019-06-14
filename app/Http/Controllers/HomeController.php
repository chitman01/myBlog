<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Blog;

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
    public function index()
    {
        if (auth()->user()->isAdmin()) {
            return view('admin/dashboard');
        } else {
            return view('/');
        }
    }

    public function home()
    {
        $data = DB::select('select * from blogs');
        return view('home')
            ->with(compact('data'));
    }
    public function nav()
    {
        return view('layouts.nav');
    }

    public function view()
    {

        return view('view');
    }

    public function user()
    {
        $user = DB::select('select * from users');
        return view('user')
            ->with(compact('user'));
    }

    public function check($id)
    {
        $data = DB::find($id);
        dd($data);
    }
}
