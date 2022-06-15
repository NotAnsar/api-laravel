<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;

class UsersController extends Controller
{
    public function index(){
        $users=user::All();
        // $users=(object)[
        //     'user_id'=> $users->user_id,
        //     'firstName'=>$users->firstName,
        //     'lastName'=>$users->lastName,
        //     'email'=>$users->email,
        //     'role'=> $users->role
        // ];          
        $users=user::query()->paginate(6);
        return $users;
    }
    public function index1(){
        $users=user::All();
        
        return $users;
    }



    
  
}