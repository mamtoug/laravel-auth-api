<?php

namespace Mamtoug\LaravelAuthApi\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Mamtoug\LaravelAuthApi\Http\Helpers\ApiResponse;
use Mamtoug\LaravelAuthApi\Http\Requests\ChangePasswordRequest;

class ChangePasswordController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function changePassword(ChangePasswordRequest $request)
    {
        $user = Auth::guard('apiauth')->user();
        $user->password = Hash::make($request->new_password);
        $user->save();

        return ApiResponse::send(['status' => __('laravel-auth-api::translation.change_password.success')], 1, 200, __('laravel-auth-api::translation.change_password.success'));
    }
}
