<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Покана за свадба | Дијана и Виктор</title>

    @vite('resources/js/app.js')
    <style>
        body {
            background: url("/images/dijana-viktor.jpg") no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;

            /* background-image: url("/images/dijana-viktor.jpg");
            background-repeat: no-repeat;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover; */
            font-family: 'constani';
            font-size: 22px;
        }

    </style>
</head>

<body>
    <div id="app">
        <invitation :users="{{$users}}" />
    </div>

</body>

</html>
