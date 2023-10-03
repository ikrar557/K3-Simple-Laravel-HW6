<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <!-- Provided HTML code -->
                <!DOCTYPE html>
                <html lang="en">

                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <meta http-equiv="X-UA-Compatible" content="ie=edge">
                    <title>Tailwind Profile Card Template : Tailwind Toolbox</title>
                    <meta name="description" content="">
                    <meta name="keywords" content="">
                    <meta name="author" content="">

                    <!-- Font Awesome if you need it
                    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
                    -->
                    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>
                    <!--Replace with your tailwind.css once created-->

                </head>

                <body class="font-sans antialiased text-gray-900 leading-normal tracking-wider bg-cover" style="background-image:url('https://source.unsplash.com/1L71sPT5XKc');">
                <div class="py-12">
                    <div class="max-w-4xl flex items-center h-auto lg:h-screen flex-wrap mx-auto my-32 lg:my-0">
                        <!--Main Col-->
                        <div id="profile" class="w-full lg:w-3/5 rounded-lg lg:rounded-l-lg lg:rounded-r-none shadow-2xl bg-white opacity-75 mx-6 lg:mx-0">
                            <div class="p-4 md:p-12 text-center lg:text-left">
                                <!-- Image for mobile view-->
                                <div class="block lg:hidden rounded-full shadow-xl mx-auto -mt-16 h-48 w-48 bg-cover bg-center" style="background-image: url('https://source.unsplash.com/MP0IUfwrn0A')"></div>
                                <h1 class="text-3xl font-bold pt-8 lg:pt-0">{{ Auth::user()->name }}    </h1>
                                <div class="mx-auto lg:mx-0 w-4/5 pt-3 border-b-2 border-green-500 opacity-25"></div>
                                <p class="pt-4 text-base font-bold flex items-center justify-center lg:justify-start">

                                    <svg class="h-4 fill-current text-green-700 pr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="currentColor" fill-rule="evenodd" d="M12.052 1.25h-.104c-.899 0-1.648 0-2.242.08c-.628.084-1.195.27-1.65.725c-.456.456-.642 1.023-.726 1.65c-.057.427-.074 1.446-.078 2.32c-2.022.067-3.237.303-4.08 1.147C2 8.343 2 10.229 2 14c0 3.771 0 5.657 1.172 6.828C4.343 22 6.229 22 10 22h4c3.771 0 5.657 0 6.828-1.172C22 19.657 22 17.771 22 14c0-3.771 0-5.657-1.172-6.828c-.843-.844-2.058-1.08-4.08-1.146c-.004-.875-.02-1.894-.078-2.32c-.084-.628-.27-1.195-.726-1.65c-.455-.456-1.022-.642-1.65-.726c-.594-.08-1.344-.08-2.242-.08Zm3.196 4.752c-.005-.847-.019-1.758-.064-2.097c-.063-.461-.17-.659-.3-.789c-.13-.13-.328-.237-.79-.3c-.482-.064-1.13-.066-2.094-.066s-1.612.002-2.095.067c-.461.062-.659.169-.789.3c-.13.13-.237.327-.3.788c-.045.34-.06 1.25-.064 2.097C9.143 6 9.56 6 10 6h4c.441 0 .857 0 1.248.002ZM12 9.25a.75.75 0 0 1 .75.75v.01c1.089.274 2 1.133 2 2.323a.75.75 0 0 1-1.5 0c0-.384-.426-.916-1.25-.916c-.824 0-1.25.532-1.25.916s.426.917 1.25.917c1.385 0 2.75.96 2.75 2.417c0 1.19-.911 2.048-2 2.323V18a.75.75 0 0 1-1.5 0v-.01c-1.089-.274-2-1.133-2-2.323a.75.75 0 0 1 1.5 0c0 .384.426.916 1.25.916c.824 0 1.25-.532 1.25-.916s-.426-.917-1.25-.917c-1.385 0-2.75-.96-2.75-2.417c0-1.19.911-2.049 2-2.323V10a.75.75 0 0 1 .75-.75Z" clip-rule="evenodd"/></svg>
                                    Rp. {{ number_format($card->balance, 2) }} (Balance)
                                </p>
                                <p class="pt-4 text-base font-bold flex items-center justify-center lg:justify-start">
                                    <svg class="h-4 fill-current text-green-700 pr-4" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 256 256">
                                        <path fill="currentColor" d="M208 32h-24v-8a8 8 0 0 0-16 0v8H88v-8a8 8 0 0 0-16 0v8H48a16 16 0 0 0-16 16v160a16 16 0 0 0 16 16h160a16 16 0 0 0 16-16V48a16 16 0 0 0-16-16Zm-96 152a8 8 0 0 1-16 0v-51.06l-4.42 2.22a8 8 0 0 1-7.16-14.32l16-8A8 8 0 0 1 112 120Zm56-8a8 8 0 0 1 0 16h-32a8 8 0 0 1-6.4-12.8l28.78-38.37a8 8 0 1 0-13.31-8.83a8 8 0 1 1-13.85-8A24 24 0 0 1 176 136a23.76 23.76 0 0 1-4.84 14.45L152 176ZM48 80V48h24v8a8 8 0 0 0 16 0v-8h80v8a8 8 0 0 0 16 0v-8h24v32Z" />
                                    </svg> {{ $card->expiresAt }} (Expired Date)
                                </p>
                                <p class="pt-4 text-base font-bold flex items-center justify-center lg:justify-start">
                                    <svg class="h-4 fill-current text-green-700 pr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path fill="currentColor" d="M32 416a16 16 0 0 0 16 16h416a16 16 0 0 0 16-16V222H32Zm66-138a8 8 0 0 1 8-8h92a8 8 0 0 1 8 8v64a8 8 0 0 1-8 8h-92a8 8 0 0 1-8-8ZM464 80H48a16 16 0 0 0-16 16v66h448V96a16 16 0 0 0-16-16Z"/></svg>
                                    {{ substr($card->cardNumber, 0, 4) }}
                                    {{ substr($card->cardNumber, 4, 4) }}
                                    {{ substr($card->cardNumber, 8, 4) }}
                                    {{ substr($card->cardNumber, 12) }}
                                    (Card Number)
                                </p>
                                <p class="pt-4 text-base font-bold flex items-center justify-center lg:justify-start">
                                    <svg class="h-4 fill-current text-green-700 pr-4" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24"><path fill="currentColor" d="M6 17c0-2 4-3.1 6-3.1s6 1.1 6 3.1v1H6m9-9a3 3 0 0 1-3 3a3 3 0 0 1-3-3a3 3 0 0 1 3-3a3 3 0 0 1 3 3M3 5v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2Z"/></svg>
                                    {{ $card->accountNumber }} (Account Number)
                                </p>
                            </div>
                        </div>

                        <div class="w-full lg:w-2/5">

                            <img src="https://source.unsplash.com/MP0IUfwrn0A"
                                 class="rounded-none lg:rounded-lg shadow-2xl hidden lg:block">
                        </div>
                    </div>
                </div>
                </body>

                </html>
            </div>
        </div>
    </div>

</x-app-layout>
