<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'phone', 'image'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
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

    public function lawyerInformation(){
        return $this->belongsTo(LawyerInformation::class);
    }

    public function userAppointments(){
        return $this->hasMany(Appointment::class, 'user_id', 'id');
    }

    public function lawyerAppointments(){
        return $this->hasMany(Appointment::class, 'lawyer_id', 'id');
    }

    public function userReviews(){
        return $this->hasMany(Review::class, 'user_id', 'id');
    }

    public function lawyerReviews(){
        return $this->hasMany(Review::class, 'lawyer_id', 'id');
    }

}
