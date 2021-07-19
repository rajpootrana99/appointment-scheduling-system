<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Spatie\Permission\Models\Role;

class ClientController extends Controller
{
    public function index(){
        $role = Role::where('name', Config::get('constants.roles.User'))->first();
        $clients = $role->users()->get();
        return view('admin.client.index', [
            'clients' => $clients,
        ]);
    }
}
