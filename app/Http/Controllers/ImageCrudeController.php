<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ImageCrude;
class ImageCrudeController extends Controller
{
    public function create(Request $request){
        $images=new ImageCrud();
        $request->validate([
            'title'=>'required',
            'image'=>'required|max:1024'
        ]);

        $filename="";
        if($request->hasFile('image')){
            $filename=$request->file('image')->store('posts','public');
        }else{
            $filename=Null;
        }

        $images->title=$request->title;
        $images->image=$filename;
        $result=$images->save();
        if($result){
            return response()->json(['success'=>true]);
        }else{
            return response()->json(['success'=>false]);
        }
    }
    
    public function get(){
        $images=ImageCrud::orderBy('id','DESC')->get();
        return response()->json($images);
    }

    public function edit(){
        $images=ImageCrud::findOrFail($id);
        return response()->json($images);
    }


}