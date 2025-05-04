<?php

namespace App\Livewire;

use Livewire\Component;

class ProviderForm extends Component
{
    public $firstName = '';

    public $lastName = '';

    public $npiNumber = '';

    public $taxonomy = '';

    public $description = '';

    public $city = '';

    public $state = '';

    public $zipCode = '';

    public function render()
    {
        return view('livewire.provider-form');
    }
}
