<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Traits\GeneralTraits;
use App\Setting;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    use GeneralTraits;

    public function index()
    {
        $setting = Setting::getByKey();
        return view('admin.setting.index', [
            'setting' => $setting,
        ]);
    }

    public function store(Request $request)
    {
        if($request->hasFile('logo')){
            $logo = $this->imagePath('logo', 'setting', new Setting());
            Setting::store("logo", $logo);
        }
        if($request->hasFile('fav_icon')){
            $fav_icon = $this->imagePath('fav_icon', 'setting', new Setting());
            Setting::store("fav_icon", $fav_icon);
        }
        Setting::store("website_name", $request->website_name);
        return redirect(route('settings.index'))->with('success', 'Settings saved successfully');
    }
}
