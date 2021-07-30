<?php

namespace App\Http\Controllers\Admin;

use App\Appointment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AppointmentController extends Controller
{
    public function index(){
        $appontments = Appointment::with('user', 'lawyer', 'lawyerType')->get();
        return view('admin.appointment.index', [
            'appointments' => $appontments,
        ]);
    }

    public function updateStatus(Appointment $appointment, Request $request){
        $appointment->update([
            'status' => $request->status,
        ]);
        return redirect(route('appointment.index'));
    }

    public function update(Request $request){
        $validator = Validator::make($request->all(), [
            'appointment_date' => 'required',
            'appointment_time' => 'required',
        ]);
        if (!$validator->passes()){
            return response()->json(['status' => 0, 'error' => $validator->errors()->toArray()]);
        }
        $appointment = Appointment::where('id', $request->id)->update([
            'appointment_date' => $request->appointment_date,
            'appointment_time' => $request->appointment_time,
        ]);
        if ($appointment){
            return response()->json(['status' => 1, 'msg' => 'Appointment Updated']);
        }

    }
}
