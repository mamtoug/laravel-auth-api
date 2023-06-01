<?php

namespace MedianetDev\LaravelAuthApi\Http\Controllers\Traits;

use Illuminate\Auth\Events\Verified;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use MedianetDev\LaravelAuthApi\Http\Helpers\ApiResponse;

trait VerifiesEmails
{
    /**
     * Mark the authenticated user's email address as verified.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function verify(Request $request)
    {
        if (! hash_equals((string) $request->route('code'), (string) sprintf('%04d', hexdec(substr(sha1($request->user()->getKey().$request->user()->getEmailForVerification()), 0, 3))))) {
            return ApiResponse::send(['error' => __('laravel-auth-api::translation.verifies_emails.bad_codes')], 0, 403, __('laravel-auth-api::translation.verifies_emails.bad_codes'));
        }

        if ($request->user()->hasVerifiedEmail()) {
            return ApiResponse::send(['success' => __('laravel-auth-api::translation.verifies_emails.already_verified')], 1, 200, __('laravel-auth-api::translation.verifies_emails.already_verified'));
        }

        if ($request->user()->markEmailAsVerified()) {
            event(new Verified($request->user()));
        }

        return ApiResponse::send(['success' => __('laravel-auth-api::translation.verifies_emails.verified_success')], 1, 200, __('laravel-auth-api::translation.verifies_emails.verified_success'));
    }

    /**
     * Resend the email verification notification.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function resend(Request $request)
    {
        if (Auth::guard('apiauth')->user()->hasVerifiedEmail()) {
            return ApiResponse::send(['success' => __('laravel-auth-api::translation.verifies_emails.already_verified')], 1, 200, __('laravel-auth-api::translation.verifies_emails.already_verified'));
        }

        Auth::guard('apiauth')->user()->sendEmailVerificationNotification();

        return ApiResponse::send(['success' => __('laravel-auth-api::translation.verifies_emails.resent_success')], 1, 200, __('laravel-auth-api::translation.verifies_emails.resent_success'));
    }
}
