<?php

namespace App\Http\Controllers\Admin;

use App\Appointment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index(){
        $appontments = Appointment::with('user', 'lawyer', 'lawyerType')->get();
        return view('admin.appointment.index', [
            'appointments' => $appontments,
        ]);
    }
}
