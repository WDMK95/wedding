<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Покана за свадба | Дијана и Виктор</title>

    @vite('resources/js/app.js')
    <style>
        body {
            background: url({{ Vite::asset('resources/images/dijana-viktor-cropped.jpg') }}) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            font-family: 'linbiolinum';
            font-size: 20px;
            color: #330033;
        }

        @media (min-width: 601px) {
            #invitation-card {
                margin-top: 0px !important;
            }
            body {
                background: url({{ Vite::asset('resources/images/dijana-viktor.jpg') }}) no-repeat center center fixed;
                -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            font-family: 'linbiolinum';
            font-size: 20px;
            color: #330033;
            }
        }

        @media (max-width: 600px) {
            body {      
                /* background: url({{ Vite::asset('resources/images/dijana-viktor-cropped.jpg') }}) no-repeat center center fixed; */
            }
        }

    </style>
</head>

<body>
    {{-- <img src="{{ Vite::asset('resources/images/dijana-viktor.jpg') }}" alt="slika"> --}}
    <div id="app">
        <invitation :users="{{$users}}" />
    </div>

</body>

</html>
