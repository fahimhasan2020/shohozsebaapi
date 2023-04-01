<?php

namespace App\Model\Nursing;

use Illuminate\Database\Eloquent\Model;

class NursingOrder extends Model
{
    protected $fillable = ['id','n_id','u_id','service_name','service_category_id','service_details','service_price','service_from_date','service_to_date'];

    protected $table = 'nursing_order';
}
