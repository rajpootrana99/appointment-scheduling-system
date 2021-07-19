<?php

namespace App\Http\Controllers\Lawyer;

use App\Http\Controllers\Controller;
use App\LawyerInformation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LawyerController extends Controller
{
    public function index(){
        $lawyer = LawyerInformation::where('user_id', Auth::user()->id)->first();
        return view('lawyer.index', [
            'lawyer' => $lawyer,
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
        return view('lawyer.appointments', [
            'lawyer' => $lawyer,
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
        return view('lawyer.my-clients', [
            'lawyer' => $lawyer,
        ]);
    }

    public function clientProfile(){
        return view('lawyer.client-profile');
    }

    public function changeLawyerPassword(){
        $lawyer = LawyerInformation::where('user_id', Auth::user()->id)->first();
        return view('lawyer.change-lawyer-password', [
            'lawyer' => $lawyer,
        ]);
    }

    public function Reviews(){
        $lawyer = LawyerInformation::where('user_id', Auth::user()->id)->first();
        return view('lawyer.reviews', [
            'lawyer' => $lawyer,
        ]);
    }
}
