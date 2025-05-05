<?php

namespace App\Livewire;

use App\Models\ProviderInstance;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Livewire\Attributes\Computed;
use Livewire\Component;
use Livewire\WithPagination;

class ProviderList extends Component
{
    use WithPagination;

    public int $totalPages = 0;

    public $validated;

    public int $currentPage = 1;

    public function setCurrentPage(int $currentPage)
    {
        $this->currentPage = $currentPage;
    }

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
    public function providers()
    {
        $validated = $this->providerForm->validate();

        if (! array_filter($validated)) {
            return new LengthAwarePaginator([], count([]), 50);
        } else {
            if ($validated != $this->validated) {
                $this->validated = $validated;
                $storedProviders = $this->getProviders($validated);
                Cache::set('providerlist', $storedProviders);
                $providers = collect($storedProviders);

                $this->totalPages = ($providers->count() / 50);

                return $providers->skip(($this->currentPage - 1) * 50)->take(50);
            } else {
                $providers = collect(Cache::get('providerlist'));

                return $providers->skip(($this->currentPage - 1) * 50)->take(50);
            }
        }
    }

    public function render()
    {
        return view('livewire.provider-list');
    }
}
