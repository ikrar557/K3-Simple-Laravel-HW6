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
                            <span class="font-semibold text-lg">Debit Card</span>
                        </div>
                        <div class="text-xl font-semibold text-green-500">
                            Rp. {{ number_format($card->balance, 2) }}
                        </div>
                    </div>
                    <p class="mt-2 text-gray-600 dark:text-gray-400">
                        Holder Name : {{ Auth::user()->name }}
                    </p>
                    <p class="mt-4 text-gray-600 dark:text-gray-400">
                        Account Number:{{ $card->accountNumber }}
                    </p>
                    <p class="mt-4 text-gray-600 dark:text-gray-400">
                        Card Number: {{ substr($card->cardNumber, 0, 4) }}
                        {{ substr($card->cardNumber, 4, 4) }}
                        {{ substr($card->cardNumber, 8, 4) }}
                        {{ substr($card->cardNumber, 12) }}
                    </p>
                    <p class="mt-2 text-gray-600 dark:text-gray-400">
                        Expiry Date: {{ $card->expiresAt }}
                    </p>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
