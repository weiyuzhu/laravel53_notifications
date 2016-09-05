<?php

namespace App\Notifications;

use NotificationChannels\Trello\TrelloChannel;
use NotificationChannels\Trello\TrelloMessage;
use Illuminate\Notifications\Notification;

class TrelloCreated extends Notification
{

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return [TrelloChannel::class];
    }

    public function toTrello($notifiable)
    {
        return TrelloMessage::create()
            ->name("Weeklyランキング生成バッチのエラー修正")
            ->description("こんなバグが発生したので修正する。")
            ->top()
            ->due('tomorrow');
    }
}
