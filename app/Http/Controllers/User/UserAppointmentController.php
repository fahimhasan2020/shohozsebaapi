<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Appointment;
use App\Model\AppointmentHistory;
use App\Model\DoctorRating;
use App\Model\Doctors\Doctor;
use App\Model\Prescription;
use DB;
use Illuminate\Support\Facades\URL;
use App\Model\AppointmentTransectionRecord;

class UserAppointmentController extends Controller
{
    public function changeAppointmentStatus($id,$status){
        $appointment = Appointment::findOrFail($id);
        $appointment->status = $status;
        $appointment->update();
    }
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
            return response()->json(['status'=>true,'success'=>'Appointment created']);
        }else{
            return response()->json(['status'=>false,'failed'=>'Failed to create appointment']);
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
    public function postPrescription(Request $request){
        $prescriptionFile = '';
        if($request->hasFile('prescription')){
            $filess = $request->file('prescription');
            $filenamess = uniqid() . "_" . $filess->getClientOriginalName();
            $filess->move(public_path('public/images'), $filenamess);
            $prescriptionFile = URL::to('/') . '/public/images/' . $filenamess;
        }
        $postPrescription = Prescription::create([
            'user_id'=>$request->user_id,
            'doctor_id'=>$request->doctor_id,
            'appointment_id'=>$request->appointment_id,
            'prescription'=>$prescriptionFile
        ]);
        if($postPrescription){
            return response()->json(['status'=>true,'success'=>'Prescription created']);
        }else{
            return response()->json(['status'=>false,'failed'=>'Failed to create prescription']);
        }
    }
    public function getPrescriptionByUserId($id){
        $appointment = Prescription::where(['user_id'=>$id])->get();
        return $appointment;
    }
    public function getPrescriptionByDoctorId($id){
        $appointment = Prescription::where(['doctor_id'=>$id])->get();
        return $appointment;
    }
    public function getPrescriptionByAppointmentId($id){
        $appointment = Prescription::where(['appointment_id'=>$id])->get();
        return $appointment;
    }
    public function postAppointmentHistory(Request $request){
        $request->validate([
            'user_id'=>'required', //done
            'doctor_id'=>'required', //done
            'name'=>'required', //done
            'age'=>'required', //done
            'blood_group'=>'required', //done
            'type'=>'required', //done
            'gender'=>'required', //done
        ]);

        $creates = AppointmentHistory::create([
            'user_id' => $request->user_id,
            'appointment_id' => $request->appointment_id,
            'prescription_id' => $request->prescription_id,
            'doctor_id' => $request->doctor_id,
            'name' => $request->name,
            'age' => $request->age,
            'blood_group' => $request->blood_group,
            'starting_time' => $request->starting_time,
            'description' => $request->description,
            'type' => $request->type,
            'gender' => $request->gender,
            'previous_prescription' => $request->previous_prescription,
        ]);
        if($creates){
            return response()->json(['status'=>true,'success'=>'Appointment history created']);
        }else{
            return response()->json(['status'=>false,'failed'=>'Failed to create appointment history']);
        }
    }
    public function getAppointmentHistoryByUserId($id){
        $appointment = AppointmentHistory::where(['user_id'=>$id])->get();
        return $appointment;
    }
    public function getAppointmentHistoryByDoctorId($id){
        $appointment = AppointmentHistory::where(['doctor_id'=>$id])->get();
        return $appointment;
    }
    public function getAppointmentHistoryByAppointmentId($id){
        $appointment = AppointmentHistory::where(['appointment_id'=>$id])->get();
        return $appointment;
    }
    public function postAppointmentTransectionRecord(Request $request){
        $record = AppointmentTransectionRecord::create([
            'user_id'=>$request->user_id,
            'doctor_id'=>$request->doctor_id,
            'appointment_id'=>$request->appointment_id,
            'transection_amount'=>$request->transection_amount,
        ]);
        if($record){
            return response()->json(['status'=>true,'success'=>'History created successfully']);
        }else{
            return response()->json(['status'=>false,'failed'=>'Failed to create transection history']);
        }
    }
    public function getAppointmentTransectionHistoryByUserId($id){
        $appointment = AppointmentTransectionRecord::where(['user_id'=>$id])->get();
        return $appointment;
    }   
    public function getAppointmentTransectionHistoryByDoctorId($id){
        $appointment = AppointmentTransectionRecord::where(['doctor_id'=>$id])->get();
        return $appointment;
    }
    public function getAppointmentTransectionHistoryByAppointmentId($id){
        $appointment = AppointmentTransectionRecord::where(['appointment_id'=>$id])->get();
        return $appointment;
    }
    public function postReview(Request $request){
        $review = DoctorRating::create([
            'user_id'=>$request->user_id,
            'doctor_id'=>$request->doctor_id,
            'appointment_id'=>$request->appointment_id,
            'rating'=>$request->rating,
            'comment'=>$request->comment,
        ]);
        if($review){
            return response()->json(['status'=>true,'success'=>'Review created successfully']);
        }else{
            return response()->json(['status'=>false,'failed'=>'Failed to create review']);
        }
    }
    public function getReviewByUserId($id){
        $appointment = DoctorRating::where(['user_id'=>$id])->get();
        return $appointment;
    }
    public function getReviewByDoctorId($id){
        $appointment = DoctorRating::where(['user_id'=>$id])->get();
        return $appointment;
    }
    public function getReviewByAppointmentId($id){
        $appointment = DoctorRating::where(['appointment_id'=>$id])->get();
        return $appointment;
    }
    public function changeAppointmentReviewStatus($id,$status){
        $appointment = DoctorRating::findOrFail($id);
        $appointment->visible = $status;
        $updates = $appointment->update();
        if($updates){
            return response()->json(['status'=>true,'success'=>'Review status changed successfully']);
        }else{
            return response()->json(['status'=>false,'failed'=>'Failed to change review  status']);
        }
    }
    public function lastAppointedDoctor($id){
        $appointment = Appointment::where('user_id', $id)
        ->latest() 
        ->first();
        if($appointment){
            $doctor = DB::table('doctor')
            ->join('doctor_departments', 'doctor.department', '=', 'doctor_departments.id')
            ->select('doctor.*', 'doctor_departments.name as department_name')
            ->where(['doctor.deactivated'=> 1,'doctor.id'=>$appointment['doctor_id']])
            ->first();
            $prescriptionFile = Prescription::where('appointment_id',$appointment['id'])->first();
            return response()->json(['status'=>true,'appointment'=>$appointment,'doctor'=>$doctor,'prescription'=>$prescriptionFile]);
        }else{
            return response()->json(['status'=>false]);
        }
    }
    public function searchDoctor($searchText){
        $doctor = DB::table('doctor')
            ->join('doctor_departments', 'doctor.department', '=', 'doctor_departments.id')
            ->select('doctor.*', 'doctor_departments.name as department_name')
            ->where('first_name', 'LIKE', "%$searchText%")
            ->orWhere('last_name', 'LIKE', "%$searchText%")
            ->get();
        return $doctor;
    }
}
