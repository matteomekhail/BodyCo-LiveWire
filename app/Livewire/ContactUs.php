<?php

namespace App\Livewire;

use Livewire\Component;
use App\Mail\ContactFormMailable;
use Illuminate\Support\Facades\Mail;

class ContactUs extends Component
{

    public $contactName='';
    public $contactEmail='';
    public $contactSubject='';
    public $contactMessage='';


    public function render()
    {
        return view('livewire.contact-us');
    }
    public function submit()
    {
        \Log::info('almeno provo');

        // Validazione dei dati
        $this->validate([
            'contactEmail' => 'required|email',
            'contactSubject' => 'required',
            'contactMessage' => 'required',
        ]);

        // Invio della mail
        try {
            Mail::to('matteomekhail04@gmail.com')->send(new ContactFormMailable($this->contactName, $this->contactEmail, $this->contactMessage));
        } catch (\Exception $e) {
            \Log::error($e->getMessage());
        }

        \Log::info('Mail inviata');

        // Reset del form
        $this->reset();
    }

}
