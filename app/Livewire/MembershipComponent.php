<?php

namespace App\Livewire;

use Livewire\Component;

class MembershipComponent extends Component
{
    public $memberships = [
        [
            'title' => 'Glow Membership',
            'style' => 'glow-membership',
            'benefits' => ['• Promotes skin glow'],
            'price' => 5000
        ],
        [
            'title' => 'Sauna Membership',
            'style' => 'sauna-membership',
            'benefits' => ['• Relaxation', '• Detoxification', '• Improved health'],
            'price' => 7000
        ],
        [
            'title' => 'Cryo Package',
            'style' => 'cryo-package',
            'benefits' => ['• Pain relief', '• Weight loss', '• Improved mental health'],
            'price' => 4500
        ],
        [
            'title' => 'Infinity Sculpt Package',
            'style' => 'infinity-sculpt-package',
            'benefits' => ['• Body sculpting', '• Muscle strengthening', '• Fat reduction'],
            'price' => 8000
        ],
    ];

    public function subscribe($membership)
    {
        // Implementa qui la logica di sottoscrizione
        // Puoi usare una chiamata HTTP a una API, o un redirect, ecc.
    }

    public function render()
    {
        return view('livewire.membership-component');
    }
}
