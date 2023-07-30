<?php

namespace Mamtoug\LaravelAuthApi\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Mamtoug\LaravelAuthApi\Http\Helpers\ApiResponse;
use Mamtoug\LaravelAuthApi\Http\Requests\ChangeUserProfileInfoRequest;

class ChangeUserProfileInfoController extends Controller
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

    public function update(ChangeUserProfileInfoRequest $request)
    {
        $user = Auth::guard('apiauth')->user();
        $oldEmail = $user->email;

        $user->update($request->only(
            array_merge(['name', 'email'],
                array_keys(config('laravel-auth-api.extra_columns'))
            )));
        if ($user->email !== $oldEmail) {
            $user->email_verified_at = null;
            $user->save();
            if (config('laravel-auth-api.auto_send_verify_email', false)) {
                try {
                    $user->sendEmailVerificationNotification();
                } catch (\Throwable $th) {
                    app('log')->warning(
                        __('laravel-auth-api::translation.update_account.cannot_send_email_verification').$user->email.'; '.$th->getMessage()
                    );
                }
            }
        }

        return ApiResponse::send(['status' => __('laravel-auth-api::translation.update_account.success')], 1, 200, __('laravel-auth-api::translation.update_account.success'));
    }
}
