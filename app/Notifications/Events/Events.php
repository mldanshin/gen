<?php

namespace App\Notifications\Events;

use App\Models\Events\Events as EventsModel;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use NotificationChannels\Telegram\TelegramMessage;

class Events extends Notification
{
    use Queueable;

    public function __construct(private EventsModel $eventsModel)
    {
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return string[]
     */
    public function via(mixed $notifiable): array
    {
        return ["telegram"];
    }

    public function toTelegram(mixed $notifiable): TelegramMessage
    {
        return TelegramMessage::create()
            ->to($notifiable->telegram_user_id)
            ->view("partials.events.notification.events", ["events" => $this->eventsModel]);
    }
}
