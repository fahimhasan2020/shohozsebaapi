<?php

namespace App\Model\Doctors;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = ['email',"password","online","description","lat","lng","degrees","department","visit","first_name","last_name","gender","profile_picture","mbbs_certificate","fcps_certificate","blood_group","age","experience","suspended","blocked","deactivated","date_of_birth","phone_number"];
    protected $table = "doctor";
}
