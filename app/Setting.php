<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'key',
        'value',
    ];

    public static function store($key, $value)
    {
        if(self::where(['key' => $key])->count()){
            return self::where(['key' => $key])->update(['value' => $value]);
        }
        return self::create(['key' => $key, 'value' => $value]);

    }

    public static function getByKey($key = '')
    {
        if ($key) {
            return Setting::where('key', $key)->value('value');
        }
        $response = [];
        $settings = Setting::get();
        foreach ($settings as $key => $setting) {
            $response[$setting->key] = $setting->value;
        }
        return $response;
    }
}
