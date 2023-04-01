<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class UserController extends Controller
{
    public function index(){
        return 'Api User Panel';
    }

    public function userConfigs()
    {
        $configs = DB::table('social_platforms')->where('id',1)->first();
        return response()->json(['configs'=>$configs]);
    }
}
