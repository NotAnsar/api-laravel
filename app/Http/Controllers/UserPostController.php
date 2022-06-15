<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
class UserPostController extends Controller
{
    function add(Request $req){
$user=new user;
$user->firstName=$req->firstName;
$user->lastName=$req->lastName;
$user->password=$req->password;
$user->email=$req->email;
$user->role=$req->role;
$result=$user->save();
if($result)
{
    return ["Result"=>"Data has been saved"];
}
else
{
    return ["Result"=>"operation failed"];
}

    }
}
