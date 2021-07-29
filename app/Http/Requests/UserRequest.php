<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return tap([
            'name' => 'required',
            'phone' => 'required|numeric',
            'email' => 'required|email|exists:users'
        ], function (){
            if(request()->hasFile('image')){
                request()->validate([
                    'image' => 'required|file|image',
                ]);
            }
        });
    }
}
