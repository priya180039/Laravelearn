@props([
    'navbar' => [
        [
            'label' => 'Beranda',
            'link' => 'home',
        ],
        [
            'label' => 'Layanan',
            'link' => 'services',
        ],
        [
            'label' => 'Tentang',
            'link' => 'about',
        ],
        [
            'label' => 'Kontak',
            'link' => 'contact',
        ],
        [
            'label' => 'Artikel',
            'link' => 'blogs.index',
        ],
    ],
])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 antialiased">
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
        <div class="w-full">
            <nav
                class="container relative flex flex-wrap items-center justify-between p-8 mx-auto lg:justify-between xl:px-0">
                <div class="flex flex-wrap items-center justify-between w-full lg:w-auto">
                    <div>
                        <a href="/">
                            <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                        </a>
                    </div>
                    <button aria-label="Toggle Menu"
                        class="px-2 py-1 ml-auto text-gray-500 rounded-md lg:hidden hover:text-indigo-500 focus:text-indigo-500 focus:bg-indigo-100 focus:outline-none dark:text-gray-300 dark:focus:bg-trueGray-700"
                        id="headlessui-disclosure-button-:R956:" type="button" aria-expanded="false"
                        data-headlessui-state=""><svg class="w-6 h-6 fill-current" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z">
                            </path>
                        </svg></button>
                </div>
                <div class="hidden text-center lg:flex lg:items-center">
                    <ul class="items-center justify-end flex-1 pt-6 list-none lg:pt-0 lg:flex">
                        @foreach ($navbar as $item)
                            <li class="mr-3 nav__item">
                                <x-nav-link class="text-xl" :active="request()->routeIs($item['link'])" :href="route($item['link'])">
                                    {{ $item['label'] }}
                                </x-nav-link>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="hidden mr-3 space-x-4 lg:flex nav__item"><a
                        class="px-6 py-2 text-white bg-indigo-600 rounded-md md:ml-5" href="/">Get Started</a>
                    <div class="flex items-center"><button
                            class="text-gray-500 rounded-full outline-none focus:outline-none focus-visible:ring focus-visible:ring-gray-100 focus:ring-opacity-20"><span
                                class="sr-only">Dark Mode</span><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1"
                                stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="5"></circle>
                                <path
                                    d="M12 1v2M12 21v2M4.2 4.2l1.4 1.4M18.4 18.4l1.4 1.4M1 12h2M21 12h2M4.2 19.8l1.4-1.4M18.4 5.6l1.4-1.4">
                                </path>
                            </svg></button></div>
                </div>
            </nav>
        </div>


        <div class="w-full mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
            {{ $slot }}
        </div>
    </div>
</body>

</html>
