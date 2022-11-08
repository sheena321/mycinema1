<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\userDetails_model;

class user_controller extends Controller
{

function login_user(Request $req){
echo "hi";
$u_psw=$req->userpsw;
$u_eml=$req->email;
$data=userDetails_model::all();
echo $u_eml;
echo $u_psw;
foreach($data as $i){
    // print_r($i);
    if($i->email==$u_eml && $i->password==$u_psw){
        $req->session()->put('username',$i->username);
        return view('userdash',['usr_name'=>$i]);
    }
}

}


// $u_name=
// $u_psw=$req->usrpsw;
// $u_eml=$req->email;
// $u_mob
// $u_dist
// $u_stat
}