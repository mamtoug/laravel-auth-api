<?php

namespace MedianetDev\LaravelAuthApi\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ChangeUserProfileInfoRequest extends FormRequest
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
        return [
            'name'     => 'required|min:6',
            'email'    => 'required|email|unique:users,email,'. Auth::id(),
            'password' => 'required',
        ];
    }

    /**
     * Configure the validator instance.
     *
     * @param \Illuminate\Validation\Validator $validator
     *
     * @return void
     */
    public function withValidator($validator)
    {
        //TODO: translate the validation error messages for all requests and why not publish those language files
        $validator->after(function ($validator) {
            // check old password matches
            if (! Hash::check($this->input('password'), Auth::user()->password)) {
                $validator->errors()->add('password', 'the password is incorrect.');
            }
        });
    }
}
