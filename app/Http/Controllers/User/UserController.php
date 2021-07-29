<?php

namespace App\Http\Controllers\User;

use App\Appointment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(){
        $appointments = Appointment::where('user_id', Auth::id())->get();
        return view('client.index', [
            'appointments' => $appointments,
        ]);
    }

    public function favourites(){
        return view('client.favourites');
    }

    public function profileSettings(){
        return view('client.profile-settings');
    }

    public function changeUserPassword(){
        return view('client.change-password');
    }
}
