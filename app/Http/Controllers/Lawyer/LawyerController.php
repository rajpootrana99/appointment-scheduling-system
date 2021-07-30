<?php

namespace App\Http\Controllers\Lawyer;

use App\Appointment;
use App\Http\Controllers\Controller;
use App\LawyerInformation;
use App\Review;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LawyerController extends Controller
{
    public function index(){
        $lawyer = LawyerInformation::where('user_id', Auth::user()->id)->first();
        $appointments = Appointment::where('lawyer_id', Auth::id())->where('status', '0')->get();
        $total_clients = Appointment::where('lawyer_id', Auth::id())->get();
        $today_clients = Appointment::where('lawyer_id', Auth::id())->where('appointment_date', Carbon::now())->get();
        return view('lawyer.index', [
            'lawyer' => $lawyer,
            'appointments' => $appointments,
            'total_clients' => $total_clients,
            'today_clients' => $today_clients,
        ]);
    }

    public function profileSettings(){
        $lawyer = LawyerInformation::where('user_id', Auth::user()->id)->first();
        return view('lawyer.profile-settings', [
            'lawyer' => $lawyer,
        ]);
    }

    public function appointments(){
        $lawyer = LawyerInformation::where('user_id', Auth::user()->id)->first();
        $appointments = Appointment::where('lawyer_id', Auth::id())->where('status', '1')->get();
        return view('lawyer.appointments', [
            'lawyer' => $lawyer,
            'appointments' => $appointments,
        ]);
    }

    public function scheduleTimings(){
        $lawyer = LawyerInformation::where('user_id', Auth::user()->id)->first();
        return view('lawyer.schedule-timings', [
            'lawyer' => $lawyer,
        ]);
    }
    public function myClients(){
        $lawyer = LawyerInformation::where('user_id', Auth::user()->id)->first();
        $appointments = Appointment::where('lawyer_id', Auth::id())->distinct()->get(['user_id']);
        return view('lawyer.my-clients', [
            'lawyer' => $lawyer,
            'appointments' => $appointments,
        ]);
    }

    public function clientProfile(User $user){
        $lawyers = Appointment::where('user_id', $user->id)->distinct()->take(2)->get();
        return view('lawyer.client-profile', [
            'user' => $user,
            'lawyers' => $lawyers,
        ]);
    }

    public function changeLawyerPassword(){
        $lawyer = LawyerInformation::where('user_id', Auth::user()->id)->first();
        return view('lawyer.change-lawyer-password', [
            'lawyer' => $lawyer,
        ]);
    }

    public function Reviews(){
        $lawyer = LawyerInformation::where('user_id', Auth::user()->id)->first();
        $reviews = Review::where('lawyer_id', Auth::id())->get();
        return view('lawyer.reviews', [
            'lawyer' => $lawyer,
            'reviews' => $reviews,
        ]);
    }

    public function updateStatus(Appointment $appointment, Request $request){
        $appointment->update([
            'status' => $request->status,
        ]);
        return redirect(route('lawyer'));
    }
}
