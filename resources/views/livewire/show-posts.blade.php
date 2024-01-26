<div>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Your') }} {{ __('Consoles') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 text-gray-900 dark:text-gray-100 py-6 align-middle">

        <input type="text" wire:model.live="search">
        

        {{$search}}
        <!-- component -->
        <table class="min-w-full bg-white">
            <thead class="bg-gray-800 text-white">
              
                <tr>
                    <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">ID</th>
                    <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Name Console</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Manufacturer</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Date of Realse</td>
                </tr>
            </thead>
            <tbody class="text-gray-700">
                    @foreach ($consoles as $console)
                    <tr>
                        <td class="w-1/3 text-left py-3 px-4 ">{{ $console->id }}</td>
                        <td class="w-1/3 text-left py-3 px-4 ">{{ $console->name }}</td>
                        <td class="w-1/3 text-left py-3 px-4 ">{{ $console->manufacturer }}</td>
                        <td class="text-left py-3 px-4 ">{{ $console->release_date }}</td>

                    </tr>
                    @endforeach
            </tbody>
        </table>

    </div>

</div>
