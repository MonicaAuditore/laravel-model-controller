<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- Styles -->
        @vite('resources/js/app.js')
    </head>
    <body>
        <img src="{{ Vite::asset('resources/img/logo.png') }}" alt=""> 
        <main>
            <div class=row>
                <div class="col">
                    @foreach ($movies as $movie)
                        <ul>
                            <li> {{$movie->id}} </li>
                            <li> {{$movie->title}} </li>
                        </ul>
                    @endforeach
                </div>
            </div>
        </main>


    </body>
</html>
