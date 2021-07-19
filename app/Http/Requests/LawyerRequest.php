<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LawyerRequest extends FormRequest
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
            'lawyer_type_id' => 'required',
            'cnic' => 'required|numeric',
            'address' => 'required',
            'city' => 'required',
            'education' => 'required',
            'passing_year' => 'required|numeric',
            'name' => 'required',
            'phone' => 'required|numeric',
            'password' => 'required|confirmed'
        ], function (){
            if ($this->route('lawyerInformation')){
                request()->validate([
                    'email' => 'required|email|exists:users',
                ]);
            }
            else{
                request()->validate([
                    'email' => 'required|email|unique:users',
                ]);
            }
            if(request()->hasFile('image')){
                request()->validate([
                    'image' => 'required|file|image',
                ]);
            }
        });
    }
}
