<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use DB;

class UserController extends Controller
{
    public function index(){
        return 'Api User Panel';
    }
    public function uploadPhoto(Request $request){
        if($request->hasFile('image')){
            $file = $request->file('image');
            $filename = uniqid() . "_" . $file->getClientOriginalName();
            $file->move(public_path('public/images'), $filename);
             $url = URL::to('/') . '/public/images/' . $filename;
             return response()->json(['isSuccess' => true, 'url' => $url]);
        }
        return response()->json(['isSuccess' => false]);
        
    }
}
