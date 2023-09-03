<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    protected $fillable = ['id','name','brand','type','description','picture','weight','unit_price','stock','unit_value'];
    protected $table = "medicine";
    
}
