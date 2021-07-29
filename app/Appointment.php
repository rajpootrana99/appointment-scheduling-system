<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'lawyer_id',
        'lawyer_type_id',
        'appointment_date',
        'appointment_time',
        'status',
    ];

    public function getStatusAttribute($attribute){
        return $this->statusOptions()[$attribute] ?? 0;
    }

    public function statusOptions(){
        return [
            0 => 'Pending',
            1 => 'Confirmed',
            2 => 'Rejected',
        ];
    }

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
    public function lawyer(){
        return $this->hasOne(User::class, 'id', 'lawyer_id');
    }
    public function lawyerType(){
        return $this->belongsTo(lawyerType::class);
    }
}
