<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>My Portofolio</title>

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{ secure_asset('/css/app.css') }}">
    </head>
    <body class="antialiased text-gray-800 dark:text-gray-200">
        <div class="min-h-screen dark:bg-gray-900 pt-24">
            <x-layout.navbar></x-layout.navbar>     
        
            {{ $slot }}
        
            <x-layout.footer></x-layout.footer>
        </div>
        <script type="text/javascript" src="{{ secure_asset('/js/app.js') }}"></script>
    </body>
</html>
