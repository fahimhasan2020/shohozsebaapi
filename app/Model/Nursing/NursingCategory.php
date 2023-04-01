<?php

namespace App\Model\Nursing;

use Illuminate\Database\Eloquent\Model;

class NursingCategory extends Model
{
    protected $fillable = ['id','name','details','photo'];

    protected $table = 'nursing';
}
