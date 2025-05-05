<?php

namespace App\Livewire;

use Livewire\Attributes\Validate;
use Livewire\Form;

class ProviderForm extends Form
{
    /**
     * The first name of the provider, maps to first_name in the query
     */
    #[Validate('max:255')]
    public string $first_name = '';

    /**
     * The last name of the provider, maps to last_name in the query
     */
    #[Validate('max:255')]
    public string $last_name = '';

    /**
     * The number of the provider, maps to number in the query
     */
    #[Validate('digits:10')]
    public string $number = '';

    /**
     * The taxonomy description of the provider, maps to taxonomy_description in the query
     */
    #[Validate('max:255')]
    public $taxonomy_description = '';

    /**
     * The city of the provider, maps to city in the query
     */
    #[Validate('max:255')]
    public string $city = '';

    /**
     * The state of the provider, maps to state in the query
     */
    #[Validate('max:255')]
    public string $state = '';

    /**
     * The postal_code of the provider, maps to postal_code in the query
     */
    #[Validate('max:255')]
    public string $postal_code = '';
}
