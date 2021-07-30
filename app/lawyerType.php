<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class lawyerType extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
    ];

    public function lawyerInformations(){
        return $this->hasMany(LawyerInformation::class);
    }

    public function appointments(){
        return $this->hasMany(Appointment::class);
    }
}
