<?php

namespace App\Model\Doctors;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

class Doctor  extends Authenticatable
{
    use HasApiTokens,Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['email',"password","online","description","lat","lng","degrees","department","visit","first_name","last_name","gender","profile_picture","mbbs_certificate","fcps_certificate","blood_group","age","experience","suspended","blocked","deactivated","date_of_birth","phone_number"];
    protected $table = "doctor";
    protected $hidden = [
        'password', 'remember_token',
    ];
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
