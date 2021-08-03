<!doctype html>
<html lang="en" data-theme="bumblebee">

<head>
    <meta charset="utf-8">
    <title>{{ env('APP_NAME') }}</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @livewireStyles
    @stack('styles')
</head>

<body class="">



    <div class="container mx-auto border border-green-50 mt-2 mb-2 ">

        <div class=" md:flex flex-col md:flex-row   w-full" id="main-app">

            <div class="w-full overflow-x-auto ">
                <div class="heading border-b border-gray-100 border-opacity-90 filter md:drop-shadow-sm ">
                    @section('main-heading')

                    @show

                </div>
                @yield('content')

            </div>

        </div>
    </div>

    <div class="footer border-t border-gray-100 border-opacity-90">
        <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
            <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full"
                    viewBox="0 0 24 24">
                    <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
                </svg>
                <span class="ml-3 text-xl leading-loose">{{ env('APP_NAME') }}</span>
            </a>
            <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">©
                {{ \Carbon\Carbon::today()->year }} {{ env('APP_NAME') }} —

            </p>
            <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">

            </span>
        </div>
    </div>
    @stack('pre_scripts')
    @livewireScripts
    <script src="{{ mix('js/plugins.js') }}"></script>
    <script src="{{ mix('js/app.js') }}"></script>
    @yield('pre_jquery')
    @yield('jquery')
</body>

</html>
