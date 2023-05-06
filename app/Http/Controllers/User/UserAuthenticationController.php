<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Model\Subscribers\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Laravel\Sanctum\PersonalAccessToken;
use Hash;
use Auth;
use Carbon\Carbon;
use DB;


class UserAuthenticationController extends Controller
{
    
    public function login(Request $request)
    {
        $this->validate($request, [
            'phoneNumber' => 'required'
        ]);

        $user = Subscriber::where('phone_number', $request->phoneNumber)->first();
        if(!$user){
           $newUser =  Subscriber::create([
                'phone_number'=>$request->phoneNumber
            ]);
            $otp = rand(1111,9999);
            $to = $request->phoneNumber;
            $token = "ea8d985738b5a530e785ded316150b1b";
            $message = "আপনার ওটিপি কোড হলো:".$otp."    depnHoB23DE";
            $url = "http://api.greenweb.com.bd/api.php?json";
            $data= array(
                'to'=>"$to",
                'message'=>"$message",
                'token'=>"$token"
                ); 
            $ch = curl_init(); 
            curl_setopt($ch, CURLOPT_URL,$url);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($ch, CURLOPT_ENCODING, '');
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $smsresult = curl_exec($ch);    
            return response()->json(['otp'=>$otp]);

        }else{
            if($user->suspended == 1){
                throw ValidationException::withMessages([
                    'error' => ['Account is suspended. Contact authority'],
                ]);
            }else{
                $otp = rand(1111,9999);
                $to = $request->phoneNumber;
                $token = "ea8d985738b5a530e785ded316150b1b";
                $message = "আপনার ওটিপি কোড হলো:".$otp."    depnHoB23DE";
                $url = "http://api.greenweb.com.bd/api.php?json";
                $data= array(
                    'to'=>"$to",
                    'message'=>"$message",
                    'token'=>"$token"
                    ); 
                $ch = curl_init(); 
                curl_setopt($ch, CURLOPT_URL,$url);
                curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
                curl_setopt($ch, CURLOPT_ENCODING, '');
                curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $smsresult = curl_exec($ch);    
                return response()->json(['otp'=>$otp]);
            }
        }
    }

    public function loginOtpVerification(Request $request)
    {
       $request->validate(['phoneNumber'=>'required']);
       $user = Subscriber::where('phone_number', $request->phoneNumber)->first();
       $token = $user->createToken("Oppo G18 Pro")->plainTextToken;
        $response = [
            'user'=>$user,
            'token'=>$token
        ];
        return response($response,201);

    }

    public function socialLogin(Request $request){
        $request->validate([
            'email'=>'required',
            'first_name'=>'required',
            'last_name'=>'required',
            'profile_picture'=>'required'
        ]);
        $user = Subscriber::where('email', $request->email)->first();
        if(!$user){
            $newuser = Subscriber::create([
                'email' => $request->email,
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'profile_picture' => $request->profile_picture,
            ]);
            $findUser = Subscriber::where('email', $request->email)->first();
            $token = $findUser->createToken("Oppo G18 Pro")->plainTextToken;
            $response = [
                'user'=>$findUser,
                'token'=>$token
            ];
            return response($response,201);
        }else{
            $token = $user->createToken("Oppo G18 Pro")->plainTextToken;
            $response = [
                'user'=>$user,
                'token'=>$token
            ];
            return response($response,201);
        }
    }

    public function verifyLogin(Request $request)
    {
        $request->validate([
            'token'=>'required'
        ]);
        $token = PersonalAccessToken::findToken($request->token);
        if ($token) {
            if ($token->expires_at && $token->expires_at->isPast()) {
                return response()->json(['error'=>'Token expired']);
            } else {
                $user = $token->tokenable;
                $response = [
                    'user'=>$user,
                    'token'=>$request->token
                ];
                return response($response,201);
            }  
        }
    }

    public function detailsUpdate(Request $request)
    {
       $request->validate([
        'userId'=>'required'
       ]);
       $user = SUbscriber::findOrFail($request->userId);
       if($request->has('first_name')){
        $user->first_name = $request->input('first_name');
       }
       if($request->has('last_name')){
        $user->last_name = $request->input('last_name');
       }
       if($request->has('blood_group')){
        $user->blood_group = $request->input('blood_group');
       }
       $updated = $user->save();
       if($updated){
        return response()->json(['success'=>'Profile updated']);
       }else{
        return response()->json(['error'=>'Something went wrong']);
       }
    }

    public function doctorDepartments()
    {
        $departments = DB::table('doctor_departments')->get();
        return $departments;
        //return view('visual',['departments'=>$departments]);
    }
}
