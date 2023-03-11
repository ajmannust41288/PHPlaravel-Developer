<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
// use App\Models\User;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    // function loadview(){
    //     $data=['sam','jam','kalim'];
    //     return view("users",['users'=>$data]);
    // }
    //
    // function getData(Request $req){
    //     return $req->input();
    //    }
    // function index(){
    //     // return DB::insert("INSERT INTO users VALUES (5,'zubair','khan','bannu')");
    //     return DB::select('select * from users');
    // }
//   function getdata()
//   {
//     return User::all();
//   }
function index(){
    $data=Http::get('reqres.in/api/users?page=1');
    return view('users',['collection'=>$data['data']]);//first is the filename
}
}
