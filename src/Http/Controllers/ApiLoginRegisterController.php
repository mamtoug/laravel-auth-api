<?php

namespace Mamtoug\LaravelAuthApi\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Mamtoug\LaravelAuthApi\Http\Helpers\ApiResponse;
use Mamtoug\LaravelAuthApi\Http\Requests\ApiUserLoginRequest as LoginRequest;
use Mamtoug\LaravelAuthApi\Http\Requests\ApiUserRegisterRequest as RegisterRequest;

class ApiLoginRegisterController extends Controller
{
    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:apiauth')->only('getUser');
    }

    public $successStatus = 200;

    public function register(RegisterRequest $request)
    {
        $user = config('laravel-auth-api.user_model_fqn');
        $input = $request->only(
            array_merge(['name', 'email', 'password'], array_keys(config('laravel-auth-api.extra_columns')))
        );
        $input['password'] = bcrypt($input['password']);
        $user = (new $user)->create($input);
        if (config('laravel-auth-api.auto_send_verify_email', false)) {
            $user->sendEmailVerificationNotification();
        }
        $success = [];
        $success['access_token'] = $user->createToken('AppName')->accessToken;
        $success['user'] = $user->toArray();

        return  ApiResponse::send($success, 1, 201, __('laravel-auth-api::translation.account_created'));
    }

    public function login(LoginRequest $request)
    {
        if (Auth::guard('apiauthweb')->attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::guard('apiauthweb')->user();
            $success = [];
            $success['access_token'] = $user->createToken('AppName')->accessToken;
            $success['user'] = $user->toArray();

            return ApiResponse::send($success, 1, 200);
        } else {
            return ApiResponse::send(['error' => __('laravel-auth-api::translation.unauthorized')], 0, 401, __('laravel-auth-api::translation.failed_authentication'));
        }
    }

    public function getUser()
    {
        $user = Auth::guard('apiauth')->user();

        return ApiResponse::send($user, 1, 200);
    }
}
