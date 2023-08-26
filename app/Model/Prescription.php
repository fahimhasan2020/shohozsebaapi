<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{
    protected $fillable = ['id','user_id','doctor_id','prescription','appointment_id'];
    protected $table = 'prescription';
}
