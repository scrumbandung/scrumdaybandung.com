<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class CallForPresent extends Mailable
{
    use Queueable, SerializesModels;

    protected $contact;
    protected $file;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contact, $file)
    {
        $this->contact = $contact;
        $this->file = $file;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $emailto = env('COMMITTEE_EMAIL'); // Should not be hardcoded here.
        //$emailto = "sdb2018pc@gmail.com";

        return $this->from($emailto)
                    ->cc($emailto)
                    ->replyto($emailto)
                    ->view('emails.call-for-presentation')
                    ->subject("[SDB 2018] Presentation Submission")
                    ->with([
                        'fullname' => $this->contact['fullname'],
                        'linkedin' => $this->contact['linkedin'],
                        'twitter' => $this->contact['twitter'],
                        'about' => $this->contact['about'],
                        'talk' => $this->contact['talk'],
                        'track' => $this->contact['track'],
                        'what' => $this->contact['what'],
                        'why' => $this->contact['why'],
                        'change' => $this->contact['change'],
                        'presentation' => $this->file
                    ]);
    }
}
