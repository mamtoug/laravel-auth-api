<?php

namespace Mamtoug\LaravelAuthApi\Http\Controllers;

use Mamtoug\LaravelAuthApi\Http\Helpers\ApiResponse;
use Mamtoug\LaravelAuthApi\Http\Requests\SocialAccountRequest;
use Mamtoug\LaravelAuthApi\Models\ApiUser;
use Mamtoug\LaravelAuthApi\Models\LinkedSocialAccount;

class LinkedSocialAccountController extends Controller
{
    public function findOrCreate(SocialAccountRequest $request)
    {
        // see if any social account with the given data exists
        $socialAccount = $this->getSocialAccount($request);

        // if there is a social account return the associated user and the access token
        if ($socialAccount) {
            return ApiResponse::send([
                'flag' => 0,
                'user' => $socialAccount->user,
                'access_token' => $socialAccount->user->createToken('AppName')->accessToken,
            ], 1, 200, __('laravel-auth-api::translation.linked_social.find_associated', ['provider_name' => $request->provider_name]));
        }

        if (strtolower($request->provider_name) === "apple"){
            // try to get a user with the given email address
            $linked = LinkedSocialAccount::where('provider_id', $request->provider_id)->first();
            $user = is_object($linked)  ? $linked->user : null ;
        }else{
            // try to get a user with the given email address
            $user = ApiUser::where('email', $request->email)->first();
        }


        // if there is no user with that email address create one
        $newUser = false;
        if (! $user) {

            if ( $request->email == null ) {
                $request->merge(['email' => $this->generateFakeEmail(10)]);
            }

            $user = ApiUser::create($request->only(
                array_merge(['name', 'email'], array_keys(config('laravel-auth-api.extra_columns')))
            ));
            $newUser = true;
        }

        // create and link a social account
        $user->linkedSocialAccounts()->create($request->only(['provider_name', 'provider_id', 'email']));

        // return the new created user and the access token
        if ($newUser) {
            return ApiResponse::send([
                'flag' => 1,
                'user' => $user,
                'access_token' => $user->createToken('AppName')->accessToken,
            ], 1, 201, __('laravel-auth-api::translation.linked_social.user_created'));
        }

        return ApiResponse::send([
            'flag' => 0,
            'user' => $user,
            'access_token' => $user->createToken('AppName')->accessToken,
        ], 1, 201, __('laravel-auth-api::translation.linked_social.social_account_created_for_user', ['name' => $request->name]));
    }

    private function getSocialAccount(SocialAccountRequest $request)
    {
        return LinkedSocialAccount::where('provider_name', $request->provider_name)
            ->where('provider_id', $request->provider_id)
            ->orderBy('id', 'desc')->first();
    }


    private  function generateFakeEmail($length = 10, $domain = 'example.com') {
        $characters = 'abcdefghijklmnopqrstuvwxyz0123456789';
        $email = '';

        for ($i = 0; $i < $length; $i++) {
            $email .= $characters[rand(0, strlen($characters) - 1)];
        }

        return $email . '@' . $domain;
    }

}
