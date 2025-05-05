<?php

namespace App\Livewire;

use App\Models\ProviderInstance;
use Illuminate\Support\Facades\Http;
use LivewireUI\Modal\ModalComponent;

class ShowProvider extends ModalComponent
{
    public int $number;

    public function mount(int $number)
    {
        $this->number = $number;
    }

    public function getModalTitle()
    {
        return 'Provider Data';
    }

    /**
     * Function to retrieve a provider
     */
    protected function getProvider()
    {
        $response = Http::get('https://npiregistry.cms.hhs.gov/api', ['number' => $this->number, 'version' => '2.1']);

        $result = $response->json()['results'][0];

        return new ProviderInstance($result['number'], $result['basic'], $result['taxonomies'], $result['addresses']);
    }

    public function render()
    {
        return view('livewire.show-provider', [
            'provider' => $this->getProvider(),
        ]);
    }
}
