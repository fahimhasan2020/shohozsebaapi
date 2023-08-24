<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Appointment;

class UserAppointmentController extends Controller
{
    public function postAppointment(Request $request){
        $request->validate([
            'user_id'=>'required', //done
            'doctor_id'=>'required', //done
            'name'=>'required', //done
            'age'=>'required', //done
            'blood_group'=>'required', //done
            'type'=>'required', //done
            'gender'=>'required', //done
        ]);

        $previousPrescription = '';

        if($request->hasFile('previous_prescription')){
            $filess = $request->file('previous_prescription');
            $filenamess = uniqid() . "_" . $filess->getClientOriginalName();
            $filess->move(public_path('public/images'), $filenamess);
            $previousPrescription = URL::to('/') . '/public/images/' . $filenamess;
        }

        $creates = Appointment::create([
            'user_id' => $request->user_id,
            'doctor_id' => $request->doctor_id,
            'name' => $request->name,
            'age' => $request->age,
            'blood_group' => $request->blood_group,
            'starting_time' => $request->starting_time,
            'description' => $request->description,
            'type' => $request->type,
            'gender' => $request->gender,
            'previous_prescription' => $previousPrescription,
        ]);
        if($creates){
            return response()->json(['status'=>true,'success'=>'Account registered sucessfully. Wait for approval']);
        }else{
            return response()->json(['status'=>false,'success'=>'Account registered sucessfully. Wait for approval']);
        }

    }

    public function getByUserId($id){
        $appointment = Appointment::where(['user_id'=>$id,'status'=>1])->get();
        return $appointment;
    }
    public function getByDoctorId($id){
        $appointment = Appointment::where(['doctor_id'=>$id,'status'=>1])->get();
        return $appointment;
    }
}
