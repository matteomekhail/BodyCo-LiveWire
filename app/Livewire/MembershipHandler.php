<?php

namespace App\Livewire;

use Livewire\Component;
use Auth;

class MembershipHandler extends Component
{
    public function render()
    {
        return view('livewire.membership-handler');
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->to('/');
    }
}
