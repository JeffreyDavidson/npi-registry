<?php

namespace App\Livewire;

use App\Models\ProviderInstance;
use Illuminate\Support\Facades\Http;
use Livewire\Attributes\Computed;
use Livewire\Component;

class ProviderList extends Component
{
    /**
     * The Livewire Form that contains the public properties and validation for the search
     */
    public ProviderForm $providerForm;

    /**
     * Function to retrieve providers
     *
     * @param  array<mixed>  $validated
     * @return array<mixed>
     */
    protected function getProviders(array $validated): array
    {
        $response = Http::get('https://npiregistry.cms.hhs.gov/api', array_merge(['version' => '2.1', 'limit' => '50'], $validated));

        $resultList = [];
        foreach ($response->json()['results'] as $result) {
            $resultList[] = new ProviderInstance($result['number'], $result['basic'], $result['taxonomies'], $result['addresses']);
        }

        return $resultList;
    }

    /**
     * Function to retrieve providers
     */
    public function findProviders(): void
    {
        $this->providerForm->validate();
    }

    #[Computed]
    public function providers(): array
    {
        $validated = $this->providerForm->validate();

        return array_filter($validated) ? $this->getProviders($validated) : [];
    }

    public function render()
    {
        return view('livewire.provider-list');
    }
}
