<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
//use App\Http\Controllers\Hash;


use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    public function index($id){
        $user=user::find($id);
        $user=(object)[
            'id'=> $user->user_id,
            'firstName'=>$user->firstName,
            'lastName'=>$user->lastName,
            'email'=>$user->email,
            'role'=> $user->role
           ];
            return $user;
    }
    
    public function register(Request $request) {
    $user=new user;
    $user->firstName=$request->input('firstName');
    $user->lastName=$request->input('lastName');
    $user->password= Hash::make($request->input('password'));
    $user->email=$request->input('email');
    $user->role=$request->input('role');
    $user->save();

   
   $user=(object)[
    'id'=> $user->user_id,
    'firstname'=>$user->firstName,
    'lastname'=>$user->lastName,
    'email'=>$user->email,
    'role'=> $user->role
   ];
    return $user;
}




function login(Request $request) {
   
    $email=$request->input('email');
    $password=$request->input('password');

    $user= user::where('email',$email)->first();
    if(!Hash::check($password,$user->password)) {
        return["error"=>"Email or password is not matched"];
    }
    
    $user=(object)[
        'id'=> $user->user_id,
        'firstname'=>$user->firstName,
        'lastname'=>$user->lastName,
        'email'=>$user->email,
        'role'=> $user->role
    ];
    
    return $user;
}

}