<div class="space-y-12">
    <form>
        <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
            <div class="sm:col-span-3">
                <label for="first_name" class="block text-sm/6 font-medium text-gray-900">First Name</label>
                <div class="mt-2">
                    <div
                        class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                        <div class="shrink-0 text-base text-gray-500 select-none sm:text-sm/6"></div>
                        <input type="text" name="first_name" id="first_name" wire:model="providerForm.first_name"
                            class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6"
                            placeholder="">
                    </div>
                </div>
            </div>
            <div class="sm:col-span-3">
                <label for="last_name" class="block text-sm/6 font-medium text-gray-900">Last Name</label>
                <div class="mt-2">
                    <div
                        class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                        <div class="shrink-0 text-base text-gray-500 select-none sm:text-sm/6"></div>
                        <input type="text" name="last_name" id="last_name" wire:model="providerForm.last_name"
                            class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6"
                            placeholder="">
                    </div>
                </div>
            </div>
            <div class="sm:col-span-3">
                <label for="npi_number" class="block text-sm/6 font-medium text-gray-900">NPI Number</label>
                <div class="mt-2">
                    <div
                        class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                        <div class="shrink-0 text-base text-gray-500 select-none sm:text-sm/6"></div>
                        <input type="text" name="npi_number" id="npi_number" wire:model="providerForm.npi_number"
                            class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6"
                            placeholder="">
                    </div>
                </div>
            </div>
            <div class="sm:col-span-3">
                <label for="taxonomy_description" class="block text-sm/6 font-medium text-gray-900">Taxonomy
                    Description</label>
                <div class="mt-2">
                    <div
                        class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                        <div class="shrink-0 text-base text-gray-500 select-none sm:text-sm/6"></div>
                        <input type="text" name="taxonomy_description" id="taxonomy_description"
                            wire:model="providerForm.taxonomy_description"
                            class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6"
                            placeholder="">
                    </div>
                </div>
            </div>
            <div class="sm:col-span-2">
                <label for="city" class="block text-sm/6 font-medium text-gray-900">City</label>
                <div class="mt-2">
                    <div
                        class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                        <div class="shrink-0 text-base text-gray-500 select-none sm:text-sm/6"></div>
                        <input type="text" name="city" id="city" wire:model="providerForm.city"
                            class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6"
                            placeholder="">
                    </div>
                </div>
            </div>
            <div class="sm:col-span-2">
                <label for="state" class="block text-sm/6 font-medium text-gray-900">State</label>
                <div class="mt-2">
                    <div
                        class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                        <div class="shrink-0 text-base text-gray-500 select-none sm:text-sm/6"></div>
                        <input type="text" name="state" id="state" wire:model="providerForm.state"
                            class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6"
                            placeholder="">
                    </div>
                </div>
            </div>
            <div class="sm:col-span-2">
                <label for="postal_code" class="block text-sm/6 font-medium text-gray-900">Zip Code</label>
                <div class="mt-2">
                    <div
                        class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                        <div class="shrink-0 text-base text-gray-500 select-none sm:text-sm/6"></div>
                        <input type="text" name="postal_code" id="postal_code" wire:model="providerForm.postal_code"
                            class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6"
                            placeholder="">
                    </div>
                </div>
            </div>
        </div>
    </form>
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
</div>
