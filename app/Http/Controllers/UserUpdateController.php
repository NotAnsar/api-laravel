<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
class UserUpdateController extends Controller
{
   
    function update(Request $request){
        $user=user::find($request->user_id);
        $user->firstName = $request->firstName;
        $user->lastName = $request->lastName;
        $user->role = $request->role;
        $user->email = $request->email;

       



        $result=$user->save();
        if($result){
            return ["result"=>"record has been updated","user"=>$user,"req"=>$request];

        }
        else{
            return ["result"=>"update opreration has failed"];
        }
    }
}