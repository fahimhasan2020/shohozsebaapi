<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class DoctorRating extends Model
{
    protected $fillable = ['user_id','doctor_id','appointment_id','rating','comment','visible'];
    protected $table = "doctor_rating";
}
