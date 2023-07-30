<?php

return [
    'failed_authentication' => 'Wrong credentials! Please try again',
    'unauthorized' => 'Unauthorized',
    'account_created' => 'Account created successfully',
    'unique_email_validation' => 'The email address is already in use.',
    'access' => [
        'users' => [
            'delete_user_confirm' => 'Are you sure you want to delete this user permanently? Anywhere in the application that references this user\'s id will most likely error. Proceed at your own risk. This can not be un-done.',
            'if_confirmed_off' => '(If confirmed is off)',
            'restore_user_confirm' => 'Restore this user to its original state?',
        ],
    ],

    'notification' => [
        'reset_password' => [
            'subject' =>  'Reset Password Notification',
            'line_1' => 'You are receiving this email because we received a password reset request for your account.',
            'line_2' => 'This password reset link will expire in :count minutes.',
            'line_3' => 'If you did not request a password reset, no further action is required.',
        ],
        'verify_email' => [
            'subject' => 'Verify Email Address',
            'line_1' => 'Please click the button below to verify your email address.',
            'line_2' => 'If you did not create an account, no further action is required.',
        ],
    ],

    'verifies_emails' => [
        'already_verified' => 'email already verified.....',
        'bad_codes' => 'Bad codes.',
        'verified_success' => 'Email verified successfully.',
        'resent_success' => 'Email resent successfully.',
    ],

    'change_password' => [
        'success' => 'Password changed successfully.',
        'failed' => 'Password change failed.',
    ],

    'update_account' => [
        'success' => 'Account updated successfully.',
        'cannot_send_email_verification' => 'Cannot send verification email to this address: ',
    ],

    'linked_social' => [
        'find_associated' => 'find an associated user account with this :provider_name account',
        'user_created' => 'new user account and social account has been created.',
        'social_account_created_for_user' => 'new social account has been created for :name',
    ],
];
