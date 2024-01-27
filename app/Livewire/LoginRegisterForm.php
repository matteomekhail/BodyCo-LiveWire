<?php

namespace App\Livewire;

use Livewire\Component;

class LoginRegisterForm extends Component
{
    public $showRegisterForm = false;
    public $email;
    public $password;
    public $name;

    public function toggleRegisterForm()
    {
        $this->showRegisterForm = !$this->showRegisterForm;

        // Reset form fields
        $this->resetFormFields();
    }

    public function resetFormFields()
    {
        $this->email = '';
        $this->password = '';
        $this->name = ''; // resetta anche gli altri campi del form
    }

    public function render()
    {
        return view('livewire.login-register-form');
    }
}
