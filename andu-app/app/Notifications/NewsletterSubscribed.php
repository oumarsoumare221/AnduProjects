<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewsletterSubscribed extends Notification
{
    use Queueable;

    public function __construct()
    {
        //
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Inscription à la Newsletter')
            ->greeting('Bonjour,')
            ->line('Vous avez été inscrit à notre newsletter avec succès!')
            ->line('Merci de votre intérêt.')
            ->salutation('Cordialement, L\'équipe Laravel');
    }

    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
