<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
            {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
            <script src="https://cdn.tailwindcss.com"></script>


        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>

    @php
        $color = 'yellow';
    @endphp

        <body>

            <div class="container">

                <x-alert :color="$color" >
                    <x-slot name="title">
                        Titulo alerta
                    </x-slot>
                    Hola mundo
                </x-alert>

                <x-alert color="red">
                    <x-slot name="title">
                        Titulo alerta
                    </x-slot>
                    Hola mundo
                </x-alert>
                
            </div>
            
        </body>
</html>
