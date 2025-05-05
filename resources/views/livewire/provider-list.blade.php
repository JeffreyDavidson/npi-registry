<div class="space-y-12">
    <form wire:submit="findProviders">
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
                    <div>
                        @error('providerForm.first_name')
                            <span class="mt-2 text-sm text-red-600">{{ $message }}</span>
                        @enderror
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
                    <div>
                        @error('providerForm.last_name')
                            <span class="mt-2 text-sm text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="sm:col-span-3">
                <label for="number" class="block text-sm/6 font-medium text-gray-900">NPI Number</label>
                <div class="mt-2">
                    <div
                        class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                        <div class="shrink-0 text-base text-gray-500 select-none sm:text-sm/6"></div>
                        <input type="text" name="number" id="number" wire:model="providerForm.number"
                            class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6"
                            placeholder="">
                    </div>
                    <div>
                        @error('providerForm.number')
                            <span class="mt-2 text-sm text-red-600">{{ $message }}</span>
                        @enderror
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
                    <div>
                        @error('providerForm.taxonomy_description')
                            <span class="mt-2 text-sm text-red-600">{{ $message }}</span>
                        @enderror
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
                    <div>
                        @error('providerForm.city')
                            <span class="mt-2 text-sm text-red-600">{{ $message }}</span>
                        @enderror
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
                    <div>
                        @error('providerForm.state')
                            <span class="mt-2 text-sm text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="sm:col-span-2">
                <label for="postal_code" class="block text-sm/6 font-medium text-gray-900">Postal Code</label>
                <div class="mt-2">
                    <div
                        class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                        <div class="shrink-0 text-base text-gray-500 select-none sm:text-sm/6"></div>
                        <input type="text" name="postal_code" id="postal_code" wire:model="providerForm.postal_code"
                            class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6"
                            placeholder="">
                    </div>
                    <div>
                        @error('providerForm.postal_code')
                            <span class="mt-2 text-sm text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-4">
            <button type="submit" class="rounded-lg bg-blue-500 text-white px-2 py-2">Submit</button>
        </div>
    </form>
    <div class="space-y-4">
        <h2>Providers</h2>
        @if ($this->providers->isNotEmpty())
            <ul role="list" class="grid grid-cols-1 gap-6 sm:grid-cols-1 lg:grid-cols-2">
                @foreach ($this->providers as $provider)
                    <li class="col-span-1 divide-y divide-gray-200 rounded-lg bg-white shadow-sm"
                        wire:click="$dispatch('openModal', { component: 'show-provider', arguments: { number: {{ $provider->number }} }})">
                        <div class="flex w-full items-center justify-between space-x-6 p-6">
                            <div class="flex-1 truncate space-y-2">
                                <div class="flex items-center justify-between">
                                    <h3 class="truncate text-md font-medium text-gray-900">
                                        {{ $provider->first_name }} {{ $provider->last_name }}
                                    </h3>
                                    <span
                                        class="inline-flex shrink-0 items-center rounded-full bg-green-50 px-1.5 py-0.5 text-xs font-medium text-green-700 ring-1 ring-green-600/20 ring-inset">{{ $provider->number }}</span>
                                </div>
                                <div>
                                    <p class="text-gray-800 text-md font-bold">Taxonomies:</p>
                                    <p class="text-sm text-wrap">
                                        {{ collect($provider->taxonomies)->pluck('desc')->join('; ') }}</p>
                                </div>
                                <div>
                                    <p class="text-gray-800 text-md font-bold">Locations:</p>
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
                                </div>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
            @if ($this->totalPages > 1)
                <nav class="isolate inline-flex -space-x-px rounded-md shadow-xs" aria-label="Pagination" wire:scroll>
                    @if ($this->currentPage !== 1)
                        <a href="#" wire:click="setCurrentPage({{ $this->currentPage - 1 }})"
                            class="relative inline-flex items-center rounded-l-md px-2 py-2 text-gray-400 ring-1 ring-gray-300 ring-inset hover:bg-gray-50 focus:z-20 focus:outline-offset-0">
                            <span class="sr-only">Previous</span>
                            <svg class="size-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"
                                data-slot="icon">
                                <path fill-rule="evenodd"
                                    d="M11.78 5.22a.75.75 0 0 1 0 1.06L8.06 10l3.72 3.72a.75.75 0 1 1-1.06 1.06l-4.25-4.25a.75.75 0 0 1 0-1.06l4.25-4.25a.75.75 0 0 1 1.06 0Z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    @else
                        <span
                            class="relative inline-flex items-center rounded-l-md px-2 py-2 text-gray-400 ring-1 ring-gray-300 ring-inset hover:bg-gray-50 focus:z-20 focus:outline-offset-0">
                            <span class="sr-only">Previous</span>
                            <svg class="size-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"
                                data-slot="icon">
                                <path fill-rule="evenodd"
                                    d="M11.78 5.22a.75.75 0 0 1 0 1.06L8.06 10l3.72 3.72a.75.75 0 1 1-1.06 1.06l-4.25-4.25a.75.75 0 0 1 0-1.06l4.25-4.25a.75.75 0 0 1 1.06 0Z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                    @endif
                    @for ($x = 1; $x < $this->totalPages; $x++)
                        <a @class([
                            'relative inline-flex items-center px-4 py-2 text-sm font-semibold',
                            'z-10 bg-indigo-600 text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600' =>
                                $x == $this->currentPage,
                            'text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:outline-offset-0' =>
                                $x != $this->currentPage,
                        ]) wire:key='navigation-bottom-{{ $x }}'
                            wire:click="setCurrentPage({{ $x }})">
                            {{ $x }}
                        </a>
                    @endfor
                    @if ($this->currentPage + 1 === $this->totalPages)
                        <span
                            class="relative inline-flex items-center rounded-l-md px-2 py-2 text-gray-400 ring-1 ring-gray-300 ring-inset hover:bg-gray-50 focus:z-20 focus:outline-offset-0">
                            <span class="sr-only">Previous</span>
                            <svg class="size-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"
                                data-slot="icon">
                                <path fill-rule="evenodd"
                                    d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                    @else
                        <a href="#" wire:click="setCurrentPage({{ $this->currentPage + 1 }})"
                            class="relative inline-flex items-center rounded-r-md px-2 py-2 text-gray-400 ring-1 ring-gray-300 ring-inset hover:bg-gray-50 focus:z-20 focus:outline-offset-0">
                            <span class="sr-only">Next</span>
                            <svg class="size-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"
                                data-slot="icon">
                                <path fill-rule="evenodd"
                                    d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    @endif
                </nav>
            @endif
        @else
            <div>
                Need to search first
            </div>
        @endif
    </div>

</div>
