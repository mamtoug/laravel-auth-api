<?php

namespace MedianetDev\LaravelAuthApi\Http\Controllers\Traits\Notifications;

use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Lang;

class VerifyEmail extends Notification
{
    /**
     * The callback that should be used to build the mail message.
     *
     * @var \Closure|null
     */
    public static $toMailCallback;

    /**
     * Get the notification's channels.
     *
     * @param  mixed  $notifiable
     * @return array|string
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Build the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        if (static::$toMailCallback) {
            return call_user_func(static::$toMailCallback, $notifiable);
        }

        return (new MailMessage)
            ->subject(trans('translation.notification.verify_email.subject').' ['.sprintf('%04d', hexdec(substr(sha1($notifiable->getKey().$notifiable->getEmailForVerification()), 0, 3))).']')
            ->line(trans('translation.notification.verify_email.line_1'))
            ->action(Lang::get(sprintf('%04d', hexdec(substr(sha1($notifiable->getKey().$notifiable->getEmailForVerification()), 0, 3)))), '')
            ->line(trans('translation.notification.verify_email.line_2'));
    }

    /**
     * Set a callback that should be used when building the notification mail message.
     *
     * @param  \Closure  $callback
     * @return void
     */
    public static function toMailUsing($callback)
    {
        static::$toMailCallback = $callback;
    }
}
