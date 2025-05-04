<div class="space-y-4">
    <h2>Providers</h2>
    <ul role="list" class="grid grid-cols-1 gap-6 sm:grid-cols-1 lg:grid-cols-2">
        @foreach ($providers as $provider)
            {{-- @dd($provider) --}}
            <li class="col-span-1 divide-y divide-gray-200 rounded-lg bg-white shadow-sm">
                <div class="flex w-full items-center justify-between space-x-6 p-6">
                    <div class="flex-1 truncate space-y-2">
                        <div class="flex items-center justify-between">
                            <h3 class="truncate text-md font-medium text-gray-900">
                                @isset($provider['basic']['first_name'])
                                    {{ $provider['basic']['first_name'] }}
                                @else
                                    {{ $provider['basic']['authorized_official_first_name'] }}
                                @endisset
                                @isset($provider['basic']['last_name'])
                                    {{ $provider['basic']['last_name'] }}
                                @else
                                    {{ $provider['basic']['authorized_official_last_name'] }}
                                @endisset
                            </h3>
                            <span
                                class="inline-flex shrink-0 items-center rounded-full bg-green-50 px-1.5 py-0.5 text-xs font-medium text-green-700 ring-1 ring-green-600/20 ring-inset">{{ $provider['number'] }}</span>
                        </div>
                        <div>
                            <p class="text-gray-800 text-md font-bold">Taxonomies:</p>
                            <p class="text-sm text-wrap">
                                {{ collect($provider['taxonomies'])->pluck('desc')->join('; ') }}</p>
                        </div>
                        <div>
                            <p class="text-gray-800 text-md font-bold">Locations:</p>
                            <ul class="flex flex-col space-y-2 text-sm">
                                @foreach (collect($provider['addresses'])->sortByDesc('address_purpose') as $location)
                                    <li class="flex flex-row items-center justify-between">
                                        <div class="flex">
                                            {{ $location['address_1'] }}<br />
                                            {{ $location['city'] }}, {{ $location['state'] }}
                                            {{ $location['postal_code'] }}
                                        </div>
                                        <div>
                                            @if ($location['address_purpose'] == 'MAILING')
                                                {{ 'Mailing Address' }}
                                            @else
                                                {{ 'Physical Address' }}
                                            @endif
                                            <br />
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
</div>
