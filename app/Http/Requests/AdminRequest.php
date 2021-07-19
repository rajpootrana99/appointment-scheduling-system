<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequest extends FormRequest
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
            'email' => 'email|required|exists:users',
            'phone' => 'required|numeric'
        ], function (){
            if (request()->hasFile('image')){
                request()->validate([
                    'image' => 'required|file|image'
                ]);
            }
        });
    }
}
