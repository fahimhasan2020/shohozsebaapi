<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class AppointmentTransectionRecord extends Model
{
    protected $fillable = ['id','user_id','doctor_id','appointment_id','transection_amount'];
    protected $table = "appointment_transection_record";
}
