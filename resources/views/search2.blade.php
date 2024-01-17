<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Vyhledávání produktů') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <!-- Search Form -->

                    <form id="searchForm" action="{{ route('filter_product') }}" method="post">
                        @csrf
                        <!-- Jméno -->
                        <div class="mb-4">
                            <label for="jmeno" class="block text-sm font-medium text-gray-700">Jméno</label>
                            <input type="text" name="name" id="jmeno" class="mt-1 p-2 w-full border rounded-md">
                        </div>

                        <!-- Product code -->
                        <div class="mb-4">
                            <label for="product_code" class="block text-sm font-medium text-gray-700">Product code</label>
                            <input type="text" name="product_code" id="product_code" class="mt-1 p-2 w-full border rounded-md">
                        </div>

                        <!-- Product price -->
                        <div class="mb-4">
                            <label for="product_price" class="block text-sm font-medium text-gray-700">Product price</label>
                            <input type="text" name="product_price" id="product_price" class="mt-1 p-2 w-full border rounded-md">
                        </div>

                        <!-- Type -->
                        <div class="mb-4">
                            <label for="type" class="block text-sm font-medium text-gray-700">Type</label>
                            <input type="text" name="type" id="type" class="mt-1 p-2 w-full border rounded-md">
                        </div>

                        <!-- Doba Zaruky -->
                        <div class="mb-4">
                            <label for="doba_zaruky" class="block text-sm font-medium text-gray-700">Doba Zaruky</label>
                            <input type="text" name="doba_zaruky" id="doba_zaruky" class="mt-1 p-2 w-full border rounded-md">
                        </div>

                        <!-- Počet -->
                        <div class="mb-4">
                            <label for="pocet" class="block text-sm font-medium text-gray-700">Počet</label>
                            <input type="text" name="pocet" id="pocet" class="mt-1 p-2 w-full border rounded-md">
                        </div>

                        <!-- Extra -->
                        <div class="mb-4">
                            <label for="extra" class="block text-sm font-medium text-gray-700">Extra</label>
                            <input type="text" name="extra" id="extra" class="mt-1 p-2 w-full border rounded-md">
                        </div>

                        <button type="submit" class="bg-blue-500 text-white p-2 rounded-md">Vyhledat</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
