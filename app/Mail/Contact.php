<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Contact extends Mailable
{
    use Queueable, SerializesModels;

    protected $contact;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contact)
    {
        $this->contact = $contact;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $team_email = env('TEAM_EMAIL');

        return $this->from($team_email)
                    ->cc($team_email)
                    ->replyto($team_email)
                    ->view('emails.contact')
                    ->subject($this->contact['subject'])
                    ->with([
                        'fullname' => $this->contact['fullname'],
                        'content' => $this->contact['message'],
                    ]);
    }
}
