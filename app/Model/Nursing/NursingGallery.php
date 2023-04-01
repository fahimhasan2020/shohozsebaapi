<?php

namespace App\Model\Nursing;

use Illuminate\Database\Eloquent\Model;

class NursingGallery extends Model
{
    protected $fillable = ['id','n_id','photo'];

    protected $table = 'nursing_gallery';
}
