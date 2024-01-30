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

    public function postNotificationForUser(Request $request){
        $value = DB::table('user_notification')->insert([
            'user_id'=>$request->user_id,
            'type'=>$request->type,
            'title'=>$request->title,
            'description'=>$request->description,
        ]);
        if($value){
            return response()->json(['status' => true,'success'=>'Notification added']);
        }else{
            return response()->json(['status' => false,'failed'=>'Notification did not add']);
        }
    }

    public function getNotificationByUser($type,$user){
        $notifications = DB::table('user_notification')
            ->where('type', $type)
            ->orderBy('id', 'desc')
            ->where('user_id', $user)
            ->get();
            return $notifications;
    }

    public function deleteNotification($id){
        DB::table('user_notification')
            ->where('id', $id)
            ->delete();
        return response()->json(['status' => true,'success'=>'Notification deleted']);
    }
    
    public function deleteAllNotification($type,$userId){
        DB::table('user_notification')
        ->where('type', $type)
        ->where('user_id', $userId)
            ->delete();
        return response()->json(['status' => true,'success'=>'All notification deleted']);
    }


}
