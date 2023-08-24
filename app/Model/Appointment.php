<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = ['user_id','doctor_id','name','age','blood_group','starting_time','description','type','gender','previous_prescription','status'];
    protected $table = 'appointment';
}
