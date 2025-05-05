<x-modal>
    <ul>
        <li class="text-md">Name: <span class="text-sm">{{ $provider->first_name }} {{ $provider->last_name }}</span></li>
        <li class="text-md">Number: <span class="text-sm">{{ $provider->number }}</li>
        <li class="text-md">Taxonomies: <span
                class="text-sm">{{ collect($provider->taxonomies)->pluck('desc')->join('; ') }}</li>
        <li class="text-md">Locations</li>
        <ul class="flex flex-col space-y-2 text-sm">
            @foreach ($provider->addresses as $address)
                <li class="flex flex-row items-center justify-between">
                    <div class="flex">
                        {{ $address->address_1 }}<br />
                        {{ $address->city }}, {{ $address->state }}
                        {{ $address->postal_code }}
                    </div>
                    <div>
                        @if ($address->purpose == 'MAILING')
                            {{ 'Mailing Address' }}
                        @else
                            {{ 'Physical Address' }}
                        @endif
                        <br />
                    </div>
                </li>
            @endforeach
        </ul>
    </ul>

</x-modal>
