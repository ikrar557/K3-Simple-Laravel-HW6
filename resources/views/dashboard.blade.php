<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex justify-between items-center">
                        <div class="flex items-center">
                            <svg class="h-8 w-8 text-blue-500" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M21 10c0 7-4 9-9 9s-9-2-9-9"></path>
                                <path d="M12 22s-8-2-8-11h16c0 9-8 11-8 11z"></path>
                            </svg>
                            <span class="ml-2 font-semibold text-lg">Debit Card</span>
                        </div>
                        <div class="text-xl font-semibold text-green-500">
                            Rp. {{ number_format(Auth::user()->balance, 2) }}
                        </div>
                    </div>
                    <p class="mt-4 text-gray-600 dark:text-gray-400">
                        Account Number: 17340094587
                    </p>
                    <p class="mt-4 text-gray-600 dark:text-gray-400">
                        Card Number: **** **** **** 1234
                    </p>
                    <p class="mt-2 text-gray-600 dark:text-gray-400">
                        Expiry Date: 12/24
                    </p>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
