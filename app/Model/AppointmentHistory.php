<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class AppointmentHistory extends Model
{
    protected $fillable = ['id','appointment_id','user_id','doctor_id','name','age','blood_group','starting_time','description','type','gender','previous_prescription','prescription_id'];
    protected $table = 'appointment_history';
}
