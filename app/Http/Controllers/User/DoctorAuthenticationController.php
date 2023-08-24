<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Validation\ValidationException;
use DB;
use App\Model\Doctors\Doctor;
use Storage;

class DoctorAuthenticationController extends Controller
{
    public function updateOnline($id,$value){
        $doctor = Doctor::findOrFail($id);
        $doctor->online =  $value;
        $doctor->update();
        return response()->json(['success'=>'Updated']);
    }
    public function getOnline($id){
        $doctor = Doctor::findOrFail($id);
        return $doctor->online;
    }
    public function register(Request $request)
    {
        $request->validate([
            'first_name'=>'required', //done
            'last_name'=>'required', //done
            'email'=>'required|unique:doctor', //done
            'phone_number'=>'required|unique:doctor', //done
            'description'=>'required', //done
            'department'=>'required', //done
            'lat'=>'required', //done
            'lng'=>'required', //done
            'degrees'=>'required',
            'visit'=>'required',
            'gender'=>'required',
            'profile_picture'=>'required',
            'mbbs_certificate'=>'required',
            'blood_group'=>'required',
            'age'=>'required',
            'experience'=>'required',
            'date_of_birth'=>'required',
        ]);
        $file = $request->file('profile_picture');
        $filename = uniqid() . "_" . $file->getClientOriginalName();
        $file->move(public_path('public/images'), $filename);
        $profilePicture = URL::to('/') . '/public/images/' . $filename;

        $files = $request->file('mbbs_certificate');
        $filenames = uniqid() . "_" . $files->getClientOriginalName();
        $files->move(public_path('public/images'), $filenames);
        $mbbsCertificate =URL::to('/') . '/public/images/' . $filenames;

        $fcpsCertificate = "";
        if($request->hasFile('fcps_certificate')){
            $filess = $request->file('fcps_certificate');
            $filenamess = uniqid() . "_" . $filess->getClientOriginalName();
            $filess->move(public_path('public/images'), $filenamess);
            $fcpsCertificate = URL::to('/') . '/public/images/' . $filenamess;
        }
        DB::table('doctor')->insert(['first_name'=>$request->first_name,'last_name'=>$request->last_name,'email'=>$request->email,'phone_number'=>$request->phone_number,'description'=>$request->description,'lat'=>$request->lat,'lng'=>$request->lng,'degrees'=>$request->degrees,'visit'=>$request->visit,'gender'=>$request->gender,'profile_picture'=>$profilePicture,'mbbs_certificate'=> $mbbsCertificate,'blood_group'=>$request->blood_group,'age'=>$request->age,'experience'=>$request->experience,'date_of_birth'=>$request->date_of_birth,'fcps_certificate'=>$fcpsCertificate,'department'=>$request->department]);
        return response()->json(['success'=>'Account registered sucessfully. Wait for approval']);
    }
    
    public function login(Request $request)
    {
        $request->validate(['phone_number'=>'required']);
        $user = Nursing::where('phone_number', $request->phone_number)->first();
        if (!$user) {
            throw ValidationException::withMessages([
                'phone' => ['The provided number is incorrect'],
            ]);
        }else if($user->approved == 0){
            throw ValidationException::withMessages([
                'phone' => ['Account is under verification'],
            ]);
        }else if($user->suspended == 1){
            throw ValidationException::withMessages([
                'phone' => ['Account is suspended. Contact authority'],
            ]);
        }
        $otp = rand(1111,9999);
        $to = $request->phone_number;
        $token = "ea8d985738b5a530e785ded316150b1b";
        $message = "আপনার ওটিপি কোড হলো:".$otp."    Qu9aM1TQT30";
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

    public function loginOtpVerification(Request $request)
    {
       $request->validate(['phone_number'=>'required']);
       $user = Nursing::where('phone_number', $request->phone_number)->first();
       $token = $user->createToken("Oppo G18 Pro")->plainTextToken;
        $response = [
            'user'=>$user,
            'token'=>$token
        ];
        return response($response,201);

    }

    public function get($id)
    {
        $user = Nursing::where('id', $id)->first();
        return response()->json(['user'=>$user]);
    }

    public function postContact(Request $request)
    {
        $request->validate([
            'provider_type'=>'required',
            'provider_email'=>'required',
            'provider_phone'=>'required',
            'provider_id'=>'required',
            'provider_subject'=>'required',
            'provider_details'=>'required'
        ]);

        DB::table('contact_support')->insert([ 'provider_type'=>$request->provider_type,
        'provider_email'=>$request->provider_email,
        'provider_phone'=>$request->provider_phone,
        'provider_id'=>$request->provider_id,
        'provider_subject'=>$request->provider_subject,
        'provider_details'=>$request->provider_details]);
        return response()->json(['success'=>'Query sent to support. Please wait for the response']);
    }

    public function changeActivity($id,$state)
    {
        
        DB::table('nursing')->where('id',$id)->update([
            'active'=>(int)$state
        ]);
        return response()->json(['success'=>'Nursing updated']);
    }

    public function updateDp(Request $request)
    {
      $request->validate([
            'id'=>'required',
            'image'=>'required'
        ]);
        $image_64s = $request['image'];
        $image_64 = 'data:image/jpeg;base64,'.$image_64s;
        $extension = explode('/', explode(':', substr($image_64, 0, strpos($image_64, ';')))[1])[1];
        $replace = substr($image_64, 0, strpos($image_64, ',')+1); 
        $image = str_replace($replace, '', $image_64); 
        $image = str_replace(' ', '+', $image); 
        $imageName = 'np'.$request->id.'.png';
        Storage::disk('public')->put($imageName, base64_decode($image));
        DB::table('nursing')->where('id',$request->id)->update([
            'profile_picture'=> 'np'.$request->id.'.png'
        ]);
        return response()->json(['Success'=>'Pic uploaded']);
    }
}
