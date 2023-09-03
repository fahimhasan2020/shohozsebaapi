<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class MedicineInvoice extends Model
{
    protected $fillable = ['id','user_name','user_id','status','cart','total','picture','vat','full_total','phone','email','address'];
    protected $table = "medicine_invoice";
}
