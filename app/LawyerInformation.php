<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LawyerInformation extends Model
{
    use HasFactory;

    protected $fillable =[
        'lawyer_type_id',
        'user_id',
        'cnic',
        'address',
        'city',
        'education',
        'passing_year'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function lawyerType(){
        return $this->belongsTo(lawyerType::class);
    }
}
