<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pizza House</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <!-- <link rel="stylesheet" href="@vite('resources/sass/main.scss')"> -->

        @vite(['resources/sass/app.scss', 'resources/js/app.js'])


    </head>
    <body>
        @yield('content')

        <footer>
            Copyright 2023 Pizza House
        </footer>
    </body>
</html>