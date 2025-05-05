<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class ProviderList extends Component
{
    public array $providers = [];

    /**
     * The Livewire Form that contains the public properties and validation for the search
     */
    public ProviderForm $providerForm;

    public function mount()
    {
        $this->providers = $this->getProviders();
    }

    public function getProviders(): array
    {
        return Http::get('https://npiregistry.cms.hhs.gov/api', [
            'version' => '2.1',
            'first_name' => '',
            'last_name' => '',
            'city' => 'baltimore',
            'state' => '',
            'postal_code' => '',
        ])->json()['results'];
    }

    public function render()
    {
        return view('livewire.provider-list');
    }
}
