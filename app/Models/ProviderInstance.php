<?php

namespace App\Models;

use Illuminate\Support\Arr;

class ProviderInstance
{
    public ?string $number;

    public ?string $first_name;

    public ?string $last_name;

    public array $addresses = [];

    public array $taxonomies = [];

    public function __construct(string $number, array $basic, array $taxonomies, array $addresses)
    {
        $this->number = $number;
        $this->first_name = Arr::exists($basic, 'first_name') ? Arr::get($basic, 'first_name') : Arr::get($basic, 'authorized_official_first_name');
        $this->last_name = Arr::exists($basic, 'last_name') ? Arr::get($basic, 'last_name') : Arr::get($basic, 'authorized_official_last_name');
        $this->taxonomies = $taxonomies;
        foreach (collect($addresses)->sortByDesc('address_purpose') as $address) {
            $this->addresses[] = new ProviderInstanceAddress($address);
        }
    }
}
