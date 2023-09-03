<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class MedicineOrder extends Model
{
    protected $fillable = ['id','user_name','user_id','status','cart','total','vat','full_total','phone','email','address'];
    protected $table = "medicine_order";
    protected $casts = [
        'cart' => 'array',
    ];
}
