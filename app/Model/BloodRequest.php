<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;


class BloodRequest extends Model
{
    protected $table = "blood_request";
    protected $fillable = ["group","active","userId","donorId","donorName","purchagable","userName","phone","lat","lng","location_details","donation_time","push_token","details","donor_lat","donor_lng"];
}