<x-app-layout>
    <div class="flex items-center justify-between">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Liste des clients ayant loué de véhicules
        </h2>

    </div>
    <!-- New Table -->
    <div class="w-full overflow-hidden rounded-lg shadow-xs">
        <div class="w-full overflow-x-auto">
            <table class="w-full whitespace-no-wrap">
                <thead>
                    <tr
                        class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                        <th class="px-4 py-3">Nom et prénoms</th>
                        <th class="px-4 py-3">Email</th>
                        <th class="px-4 py-3">Téléphone</th>
                        {{-- <th class="px-4 py-3">Actions</th> --}}

                    </tr>
                </thead>
                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                    @forelse ($clients as $client)
                    <tr class="text-gray-700 dark:text-gray-400">
                        <td class="px-4 py-3">
                            <div class="flex items-center text-sm">
                                    <p class="font-semibold">{{ $client->name }}</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-4 py-3 text-sm">
                            {{ $client->email }}
                        </td>
                        <td class="px-4 py-3 text-sm">
                            {{ $client->telephone }}
                        </td>
                        
                    </tr>
                    @empty
                        
                    @endforelse
                  
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>