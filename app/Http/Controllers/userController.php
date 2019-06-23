<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class userController extends Controller
{
    function search($data){
        //https://seenual.com/laravel-5-4-database-query-builder/
        $users = DB::table('users')
            ->where('name','like',$data);
    }
}
