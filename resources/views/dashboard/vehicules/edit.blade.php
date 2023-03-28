<x-app-layout>
    <div class="flex items-center justify-between">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Modifier les informations
        </h2>


    </div>
    <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
        <form action="{{ route('vehicules.update', ['vehicule' => $vehicule]) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mt-4">
                <label class="block text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Nom du véhicule</span>
                    <input
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        placeholder="Mercedes Benz" name="name" required value={{ $vehicule->nom }}>
                </label>
            </div>

            <div class="mt-4">
                <label class="block text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Marque</span>
                    <input
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        placeholder="TOYOTA" name="marque"required value={{ $vehicule->marque }}>
                </label>
            </div>

            <div class="mt-4">
                <label class="block text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Prix de location</span>
                    <input type="number"
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        placeholder="200000FCFA/jour" name="prix" required value={{ $vehicule->prix }}>
                </label>
            </div>

            <div class="mt-4">
                <label class="block mt-4 text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Description</span>
                    <textarea
                        class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                        rows="3" placeholder="Véhicule luxieux" name="description" >{{ $vehicule->description }}</textarea>
                </label>
            </div>

            <div class="mt-4">
                <label class="block text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Image du véhicule</span>
                    <input type="file"
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        placeholder="200000FCFA/jour" name="image">
                </label>
            </div>

            <div class="flex mt-6 text-sm">
                <button type="submit"
                    class="flex items-center justify-between px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                    <span>Modifier</span>
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
