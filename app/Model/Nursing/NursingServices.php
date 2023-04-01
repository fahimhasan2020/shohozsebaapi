<?php

namespace App\Model\Nursing;

use Illuminate\Database\Eloquent\Model;

class NursingServices extends Model
{
    protected $fillable = ['id','n_id','service_name','service_category_id','service_details','service_daily_price','service_weekly_price','service_monthly_price'];
    protected $table = 'nursing_services';
}
