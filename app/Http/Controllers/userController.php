<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class userController extends Controller
{//https://seenual.com/laravel-5-4-database-query-builder/
    function search(Request $data)
    {
        if ($data->ajax()) {
            $output = "";
            $users = DB::table('users')->where('name', 'LIKE', '%' . $data->search . '%')->get();
            if ($users) {
                foreach ($users as $key => $raw) {
                    $output .= '<tr>' .
                        '<td>' . $raw->id . '</td>' .
                        '<td>' . $raw->name . '</td>' .
                        '<td>' . $raw->email . '</td>' .
                        '<td>' . $raw->email_verified_at . '</td>' .
                        '<td>' . $raw->remember_token . '</td>' .
                        '<td>' . $raw->type . '</td>' .
                        '<td>' . $raw->created_at . '</td>' .
                        '<td>' . $raw->updated_at . '</td>' .
                        '</tr>';
                }
                return Response($output);
            }
        }
    }

    function navigation_user(){
        $data1 = 4;
        $data2 = 6;
        $count = DB::table('users')
            ->whereBetween('id', array($data1, $data2))->get();
        dd($count);
        return Response($count);
    }
}
