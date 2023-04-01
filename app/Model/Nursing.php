<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Nursing extends Authenticatable
{
    use HasApiTokens,Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id','name','email','phone_number','lat','lng','details','total_rating','rating_star','profile_picture','trade_licence','approved','suspended'];


    protected $table = 'nursing';
}
