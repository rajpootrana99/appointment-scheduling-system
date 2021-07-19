<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('client.index');
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
