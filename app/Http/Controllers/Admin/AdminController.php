<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminRequest;
use App\Http\Traits\GeneralTraits;
use App\LawyerInformation;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class AdminController extends Controller
{
    use GeneralTraits;
    public function index(){
        $role = Role::where('name', Config::get('constants.roles.User'))->first();
        $clients = $role->users()->get();
        $lawyers = LawyerInformation::with('user')->get();
        return view('admin.index', [
            'clients' => $clients,
            'lawyers' => $lawyers,
        ]);
    }

    public function profileIndex(){
        return view('admin.profile.index');
    }

    public function updateProfile($profile, AdminRequest $request){
        User::where('id', $profile)->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);
        $this->storeImage(User::where('id', $profile)->first());
        return redirect(route('profile.index'))->with('success', 'Profile updated successfully');
    }

    public function storeImage($user){
        $user->update([
            'image' => $this->imagePath('image', 'user', $user),
        ]);
    }

    public function updatePassword($profile, Request $request){
        $request->validate([
            'password' => 'required',
            'new_password' => 'required',
            'password_confirmation' => 'required|same:new_password'
        ]);
        if(User::where('eamil', Auth::user()->email)->where('password',Hash::check($request->password, 'password'))){
            User::where('email', Auth::user()->email)->update([
                'password' => Hash::make($request->new_password),
            ]);
            return redirect(route('profile.index'))->with('success', 'Password updated successfully');
        }
        return redirect(route('profile.index'))->with('Error', 'You entered wrong password');
    }
}
