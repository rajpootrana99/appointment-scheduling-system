<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
