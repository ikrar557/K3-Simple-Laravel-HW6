<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>RakaminK3-Week6</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <style>
        /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-7xl{font-size: 4.5rem;line-height: 1;}.text-4xl{font-size: 2.25rem;line-height: 2.5rem;}.text-5xl{font-size: 3rem;line-height: 1;}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.font-bold{font-weight:700   }.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}.tracking-wide{letter-spacing: 0.1em;}.tracking-normal{letter-spacing: 0.05em;}}
    </style>
</head>
<body class="antialiased">
<div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
    @if (Route::has('login'))
        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
            @auth
                <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="max-w-7xl mx-auto p-6 lg:p-8">
        <div class="flex justify-center">
            <div class="h-360 w-360 bg-white flex items-center justify-center rounded-full">

                <svg xmlns="http://www.w3.org/2000/svg" version="1.0" width="100.000000pt" height="100.000000pt" viewBox="0 0 360.000000 360.000000" preserveAspectRatio="xMidYMid meet" class="stroke-red-500">

                    <g transform="translate(0.000000,360.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none">
                        <path d="M841 3094 c-168 -45 -292 -171 -336 -341 -22 -86 -22 -1820 0 -1906 45 -172 169 -297 340 -342 89 -23 1821 -23 1910 0 172 45 308 184 344 353 16 74 16 1810 0 1884 -36 169 -172 308 -344 353 -86 22 -1831 22 -1914 -1z m1380 -696 c77 -26 129 -91 129 -161 0 -53 -287 -985 -317 -1029 -29 -42 -111 -88 -158 -88 -102 0 -185 76 -185 169 0 35 286 996 309 1040 14 24 53 59 81 70 34 13 100 13 141 -1z m515 -15 c82 -43 134 -129 134 -219 0 -48 -38 -130 -76 -166 -115 -107 -310 -66 -375 79 -16 33 -19 61 -17 140 3 88 1 101 -20 130 -12 17 -31 35 -42 38 -11 4 -20 11 -20 17 0 6 64 9 188 6 169 -3 191 -6 228 -25z m-1215 -15 c73 -41 112 -151 78 -221 -5 -12 -93 -103 -195 -202 l-185 -180 175 -183 c189 -197 205 -222 192 -306 -19 -119 -147 -189 -259 -143 -37 16 -512 501 -539 550 -22 41 -23 128 -1 170 9 18 88 102 177 187 380 367 375 363 469 355 26 -2 66 -14 88 -27z"/>
                    </g>
                </svg>
            </div>
            <p class="mt-6 text-gray-900 dark:text-white text-5xl ml-4">
                <span class="text-7xl font-bold tracking-wide">Rakamin </span><br>
                <span class=" tracking-normal">Academy</span>
            </p>
        </div>


        <div class="mt-16">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                <a href="https://github.com/ikrar557/K3-Simple-Laravel-HW6" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                    <div>
                        <div class="h-16 w-16 bg-white flex items-center justify-center rounded-full">
                            <svg width="800px" height="800px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">

                                <title>github [#142]</title>
                                <desc>Created with Sketch.</desc>
                                <defs>

                                </defs>
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="Dribbble-Light-Preview" transform="translate(-140.000000, -7559.000000)" fill="#000000">
                                        <g id="icons" transform="translate(56.000000, 160.000000)">
                                            <path d="M94,7399 C99.523,7399 104,7403.59 104,7409.253 C104,7413.782 101.138,7417.624 97.167,7418.981 C96.66,7419.082 96.48,7418.762 96.48,7418.489 C96.48,7418.151 96.492,7417.047 96.492,7415.675 C96.492,7414.719 96.172,7414.095 95.813,7413.777 C98.04,7413.523 100.38,7412.656 100.38,7408.718 C100.38,7407.598 99.992,7406.684 99.35,7405.966 C99.454,7405.707 99.797,7404.664 99.252,7403.252 C99.252,7403.252 98.414,7402.977 96.505,7404.303 C95.706,7404.076 94.85,7403.962 94,7403.958 C93.15,7403.962 92.295,7404.076 91.497,7404.303 C89.586,7402.977 88.746,7403.252 88.746,7403.252 C88.203,7404.664 88.546,7405.707 88.649,7405.966 C88.01,7406.684 87.619,7407.598 87.619,7408.718 C87.619,7412.646 89.954,7413.526 92.175,7413.785 C91.889,7414.041 91.63,7414.493 91.54,7415.156 C90.97,7415.418 89.522,7415.871 88.63,7414.304 C88.63,7414.304 88.101,7413.319 87.097,7413.247 C87.097,7413.247 86.122,7413.234 87.029,7413.87 C87.029,7413.87 87.684,7414.185 88.139,7415.37 C88.139,7415.37 88.726,7417.2 91.508,7416.58 C91.513,7417.437 91.522,7418.245 91.522,7418.489 C91.522,7418.76 91.338,7419.077 90.839,7418.982 C86.865,7417.627 84,7413.783 84,7409.253 C84,7403.59 88.478,7399 94,7399" id="github-[#142]">

                                            </path>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>

                        <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">GitHub</h2>

                        <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                            Project ini dibuat untuk memenuhi Homework Minggu ke-6 dengan tema Web Development With PHP, dimana peserta diminta untuk menggunakan framework Laravel. Peserta diminta juga untuk membuat website dengan ketentuan sebagi berikut:

                           <br> 1. Desain web sederhana yang bisa kamu rancang dengan inspirasi desain yang sudah ada. <br>
                            2. Login, Logout, Edit Profile, menampilkan saldo.
                        </p>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                    </svg>
                </a>

                <a href="https://raksakabanyu.my.id" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                    <div>
                        <div class="h-16 w-16 bg-white flex items-center justify-center rounded-full">
                            <svg class="dark:text-light" fill="#000000" width="800px" height="800px" viewBox="0 0 14 14" role="img" focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg">
                                <path d="m 12.964246,5.1545572 -0.283735,0.629264 c 0,0 -0.125132,-1.164807 -0.314632,-1.795616 -0.1895,-0.629263 -0.597337,-1.038645 -0.597337,-1.038645 l 0.187955,0.850175 c 0,0 -0.659645,-0.805889 -1.292513,-1.097864 -0.09887,-0.04583 -0.19774,-0.09012 -0.295579,-0.133371 -0.8321523,-0.743066 -1.9269266,-1.198278 -3.1308694,-1.198278 -1.7039549,0 -3.1916327,0.907334 -4.0186353,2.262671 -0.041196,-0.02523 -0.2770407,-0.175596 -0.3918736,-0.462421 -0.1261616,-0.315147 -0.1900149,-0.66119 -0.1900149,-0.66119 -0.7863219,0.755425 -0.5983668,2.014467 -0.5983668,2.014467 0,0 -0.3146317,0.315147 -0.6287485,0.819278 -0.3146317,0.503617 -0.40989667,1.416101 -0.40989667,1.416101 L 1.5355432,6.1937172 c 0,0 -0.1256467,0.250779 -0.2198817,0.723499 -0.09475,0.47272 -0.063853,1.22866 -0.063853,1.22866 l 0.283735,-0.599397 c 0,0 0,1.921262 1.826512,3.6205828 1.8254821,1.699835 5.0989911,2.173585 7.5866925,0.03193 2.487703,-2.1416578 2.015498,-6.0444308 2.015498,-6.0444308 z m -5.7267104,-3.1664 c 0.9727322,0 1.864103,0.340379 2.5659739,0.906304 l -0.9011548,0.149849 c 0,0 0.9119686,0.283735 1.6050853,0.818764 0.173022,0.133886 0.314117,0.301243 0.429465,0.476839 0.151909,0.322871 0.263137,0.6684 0.326475,1.031436 l -0.440278,-0.343468 c 0,0 0.156543,0.188985 0.18847,0.692601 0.03193,0.503617 -0.126677,1.416616 -0.126677,1.416616 l -0.407837,-0.472205 c 0,0 0.09424,0.787351 -0.06334,1.480468 -0.157573,0.691057 -0.5036165,0.973762 -0.5036165,0.973762 l 0.061794,-0.817733 c 0,0 -0.4716902,1.04019 -1.7940704,1.448027 C 6.8564747,10.158798 5.5974328,8.9945062 5.5974328,8.9945062 6.447093,9.2143882 6.9816065,8.7735952 7.4234298,8.5537132 7.8637083,8.3328012 8.08359,8.3013902 8.27309,8.3013902 c 0.1884701,0 0,-0.440279 -0.3470733,-0.629779 -0.3460423,-0.187955 -0.7549091,-0.094235 -1.5736725,0.126677 -0.8192784,0.220397 -1.3234102,-0.47272 -1.2904537,-0.943895 0.030382,-0.47375 0.7868369,-0.190015 0.7868369,-0.190015 l -0.030897,-0.943896 c 0,0 1.258527,-0.786322 1.1642919,-0.976336 -0.09372,-0.188985 -0.5345135,-0.124617 -0.9129985,-0.251809 -0.3769402,-0.125132 -0.5973369,-0.472205 -0.5973369,-0.472205 0,0 -0.063338,-0.251808 0.062308,-0.47066 0.1251318,-0.220912 0.5659252,-0.537088 0.5659252,-0.537088 0,0 -0.2827051,-0.0309 -0.7549102,0.126161 -0.4722051,0.157574 -0.8187635,0.440794 -0.8187635,0.440794 0,0 -0.09269,-0.02884 -0.4778695,-0.06025 0.7497608,-0.932566 1.8991193,-1.530933 3.189058,-1.530933 z"/>
                            </svg>
                        </div>

                        <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Live Project</h2>

                        <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                            Project juga di hosting secara online melalui server kami dengan alamat: <p class="dark:text-gray-400">https://raksakabanyu.my.id</p>
                        </p>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                    </svg>
                </a>

                <a href="https://www.rakamin.com/" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                    <div>
                        <div class="h-16 w-16 bg-white flex items-center justify-center rounded-full">

                            <svg xmlns="http://www.w3.org/2000/svg" version="1.0" width="100.000000pt" height="100.000000pt" viewBox="0 0 360.000000 360.000000" preserveAspectRatio="xMidYMid meet" class="stroke-red-500">

                                <g transform="translate(0.000000,360.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none">
                                    <path d="M841 3094 c-168 -45 -292 -171 -336 -341 -22 -86 -22 -1820 0 -1906 45 -172 169 -297 340 -342 89 -23 1821 -23 1910 0 172 45 308 184 344 353 16 74 16 1810 0 1884 -36 169 -172 308 -344 353 -86 22 -1831 22 -1914 -1z m1380 -696 c77 -26 129 -91 129 -161 0 -53 -287 -985 -317 -1029 -29 -42 -111 -88 -158 -88 -102 0 -185 76 -185 169 0 35 286 996 309 1040 14 24 53 59 81 70 34 13 100 13 141 -1z m515 -15 c82 -43 134 -129 134 -219 0 -48 -38 -130 -76 -166 -115 -107 -310 -66 -375 79 -16 33 -19 61 -17 140 3 88 1 101 -20 130 -12 17 -31 35 -42 38 -11 4 -20 11 -20 17 0 6 64 9 188 6 169 -3 191 -6 228 -25z m-1215 -15 c73 -41 112 -151 78 -221 -5 -12 -93 -103 -195 -202 l-185 -180 175 -183 c189 -197 205 -222 192 -306 -19 -119 -147 -189 -259 -143 -37 16 -512 501 -539 550 -22 41 -23 128 -1 170 9 18 88 102 177 187 380 367 375 363 469 355 26 -2 66 -14 88 -27z"/>
                                </g>
                            </svg>
                        </div>

                        <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Rakamin Project Bootcamp</h2>

                        <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                            Projek dibuat dari sebagain tugas dari bootcamp yang diadakan oleh Rakamin dengan tema IT Perbankan.
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                    </svg>
                </a>

                <div class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                    <div>
                        <div class="h-16 w-16 bg-white flex items-center justify-center rounded-full">
                            <svg width="800px" height="800px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M15.4933 6.93502C15.8053 7.20743 15.8374 7.68122 15.565 7.99325L7.70786 16.9933C7.56543 17.1564 7.35943 17.25 7.14287 17.25C6.9263 17.25 6.72031 17.1564 6.57788 16.9933L3.43502 13.3933C3.16261 13.0812 3.19473 12.6074 3.50677 12.335C3.8188 12.0626 4.29259 12.0947 4.565 12.4068L7.14287 15.3596L14.435 7.00677C14.7074 6.69473 15.1812 6.66261 15.4933 6.93502Z" fill="#1C274C"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M20.5175 7.01946C20.8174 7.30513 20.829 7.77986 20.5433 8.07981L11.9716 17.0798C11.8201 17.2389 11.6065 17.3235 11.3872 17.3114C11.1679 17.2993 10.9649 17.1917 10.8318 17.0169L10.4035 16.4544C10.1526 16.1249 10.2163 15.6543 10.5458 15.4034C10.8289 15.1878 11.2161 15.2044 11.4787 15.4223L19.4571 7.04531C19.7428 6.74537 20.2175 6.73379 20.5175 7.01946Z" fill="#1C274C"/>
                            </svg>
                        </div>

                        <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Simple Additional Feature</h2>

                        <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                            Pada project kali ini, kami tidak hanya membuat project yang memenuhi kriteria dari homework yang diberikan. Kami juga memberikan tambahan yang (hampir) meniru real-case, seperti:

                            <li class="dark:text-gray-400">Verifikasi email ke penerima langsung menggunakan relay email server.</li>
                            <li class="dark:text-gray-400">Membuat nomor akun dan nomor kartu secara acak.</li>
                            <li class="dark:text-gray-400">Membuat fitur "remember me".</li>

                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-between">
            <div class="text-center text-sm text-gray-500 dark:text-gray-400 sm:text-left">
                <div class="flex items-center gap-4">
                    <a href="https://github.com/sponsors/taylorotwell" class="group inline-flex items-center hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="-mt-px mr-1 w-5 h-5 stroke-gray-400 dark:stroke-gray-600 group-hover:stroke-gray-600 dark:group-hover:stroke-gray-400">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                        </svg>
                        Sponsor
                    </a>
                </div>
            </div>

            <div class="ml-4 text-center text-sm text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0">
                Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
            </div>
        </div>
    </div>
</div>
</body>
</html>
