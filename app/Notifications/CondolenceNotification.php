<?php

namespace App\Notifications;

use App\Models\Condolence;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class CondolenceNotification extends Notification implements ShouldQueue
{
    use Queueable;

    public $condolence;

    /**
     * Create a new notification instance.
     */
    public function __construct(Condolence $condolence)
    {
        $this->condolence = $condolence;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable)
    {
        return (new MailMessage)
            ->subject('New Condolence Message - ' . $this->condolence->fullName)
            ->view('emails.condolence-notification', [
                'condolence' => $this->condolence
            ]);
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            'condolence_id' => $this->condolence->id,
            'full_name' => $this->condolence->fullName,
            'email' => $this->condolence->email,
            'tribute' => $this->condolence->tribute,
            'submitted_at' => $this->condolence->created_at,
        ];
    }
}