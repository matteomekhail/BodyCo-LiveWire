<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class LoginRegisterForm extends Component
{
    public $showRegisterForm = false;
    public $name;
    public $surname; // Aggiungi questa linea
    public $email;
    public $password;
    public $password_confirmation; // Aggiungi questa linea
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
    public function register()
    {

        try {
            info('Register method was called');
            // Validazione dei dati del form
            $this->validate([
                'name' => ['required', 'string', 'max:255'],
                'surname' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:8', 'confirmed'],
            ]);

            // Creazione dell'utente
            $user = User::create([
                'name' => $this->name,
                'surname' => $this->surname,
                'email' => $this->email,
                'password' => Hash::make($this->password),
            ]);

            if (!$user) {
                session()->flash('error', 'Failed to create user');
                return;
            }

            // Autenticazione dell'utente
            Auth::login($user);

            // Reset dei campi del form
            $this->resetFormFields();

            // Nascondi il form di registrazione
            $this->showRegisterForm = false;
        } catch (\Exception $e) {
            // Scrivi l'errore nel log
            info('An error occurred: ' . $e->getMessage());
        }
    }

    public function login()
    {
        $credentials = ['email' => $this->email, 'password' => $this->password];

        if (!Auth::attempt($credentials)) {
            session()->flash('error', 'Invalid credentials');
            return;
        }
        return redirect()->intended('/MembershipBooking');
    }
}
