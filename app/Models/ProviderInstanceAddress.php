<?php

namespace App\Models;

class ProviderInstanceAddress
{
    public ?string $address_1;

    public ?string $city;

    public ?string $state;

    public ?string $postal_code;

    public ?string $purpose;

    public function __construct(array $address)
    {
        $this->address_1 = $address['address_1'];
        $this->city = $address['city'];
        $this->state = $address['state'];
        $this->postal_code = $address['postal_code'];
        $this->purpose = $address['address_purpose'] ?? 'Unknown';
    }
}
