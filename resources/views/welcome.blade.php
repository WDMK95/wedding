<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Покана за свадба | Дијана и Виктор</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        {{-- <link href="{{asset('css/app.css')}}" rel="stylesheet"> --}}
        <style>
            body {
                background-image: url("/images/wedding_photo.jpg");
                background-repeat: no-repeat;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
            }
        </style>
    </head>
    <body>
        <div id="app">
            <invitation />
        </div>
    </body>
</html>
