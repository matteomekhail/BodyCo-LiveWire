<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $contactEmail;
    public $contactName;
    public $contactMessage;

    public function __construct($contactName, $contactEmail, $contactMessage)
    {
        $this->contactName = $contactName;
        $this->contactEmail = $contactEmail;
        $this->contactMessage = $contactMessage;
    }

    public function build()
    {
        return $this->view('emails.contact') // Assicurati che 'emails.contact' sia il percorso corretto della tua view
            ->with([
                'name' => $this->contactName,
                'email' => $this->contactEmail,
                'message' => $this->contactMessage,
            ]);
    }
}
