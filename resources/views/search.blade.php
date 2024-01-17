<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Vyhledávání dokladů') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <!-- Search Form -->

                    <form id="searchForm" action="{{route('filter_doklad')}}" method="post">
                        @csrf
                        <!-- Obchod -->
                        <div class="mb-4">
                            <label for="obchod" class="block text-sm font-medium text-gray-700">Obchod</label>
                            <input type="text" name="obchod" id="obchod" class="mt-1 p-2 w-full border rounded-md">
                        </div>

                        <!-- Doprava -->
                        <div class="mb-4">
                            <label for="doprava" class="block text-sm font-medium text-gray-700">Doprava</label>
                            <input type="text" name="doprava" id="doprava" class="mt-1 p-2 w-full border rounded-md">
                        </div>

                        <!-- Cislo Objednavky -->
                        <div class="mb-4">
                            <label for="cislo_objednavky" class="block text-sm font-medium text-gray-700">Cislo Objednavky</label>
                            <input type="text" name="cislo_objednavky" id="cislo_objednavky" class="mt-1 p-2 w-full border rounded-md">
                        </div>

                        <!-- Datum Nakupu -->
                        <div class="mb-4">
                            <label for="datum_nakupu" class="block text-sm font-medium text-gray-700">Datum Nakupu</label>
                            <input type="date" name="datum_nakupu" id="datum_nakupu" class="mt-1 p-2 w-full border rounded-md">
                        </div>

                        <!-- Cena S Dph -->
                        <div class="mb-4">
                            <label for="cena_s_dph" class="block text-sm font-medium text-gray-700">Cena S Dph</label>
                            <input type="text" name="cena_s_dph" id="cena_s_dph" class="mt-1 p-2 w-full border rounded-md">
                        </div>

                        <button type="submit" class="bg-blue-500 text-white p-2 rounded-md">Vyhledat</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
