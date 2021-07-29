<?php

namespace App\Http\Controllers\User;

use App\Appointment;
use App\Http\Controllers\Controller;
use App\Http\Requests\PasswordRequest;
use App\Http\Requests\UserRequest;
use App\Http\Traits\GeneralTraits;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    use GeneralTraits;
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

    public function store(UserRequest $request){
        $user = User::where('id', Auth::id())->first();
        $user->update($request->all());
        $this->storeImage($user);
        return redirect(route('profile-settings'));
    }

    public function updatePassword(PasswordRequest $request){
        if(User::where('id', Auth::id())->where('password',Hash::check($request->old_password, 'password'))){
            User::where('id', Auth::id())->update([
                'password' => Hash::make($request->new_password),
            ]);
            return redirect(route('change-user-password'))->with('success', 'Password updated successfully');
        }
        return redirect(route('change-user-password'))->with('error', 'You entered wrong password');
    }

    public function storeImage($user){
        $user->update([
            'image' => $this->imagePath('image', 'user', $user),
        ]);
    }
}
