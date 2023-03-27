<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Model\Subscribers\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Hash;
use Auth;

class UserAuthenticationController extends Controller
{
    public function register(Request $request){
        $request->validate([
            'email'=>'required|email|unique:subscriber',
            'password'=>'required|min:8',
        ]);
        $user = Subscriber::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        if ($user){
            $response = ['user'=>$user];
            return response($response,201);
        }else{
            return response()->json(['fault'=>'Something went wrong. Try again later'],500);
        }
    }
    public function login(Request $request)
    {
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);
        $user = Subscriber::where('email', $request->username)->first();
        if (! $user || ! Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }
        $token = $user->createToken("Oppo G18 Pro")->plainTextToken;
        $response = [
            'user'=>$user,
            'token'=>$token
        ];
        return response($response,201);
    }
}
