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
        
        {{-- <img src="{{ Vite::asset('resources/img/logo.png') }}" alt="">  --}}
        <main>
            <div class="container">
                <div class="row row-cols-1 row-cols-lg-5 row-cols-md-3 row-cols-sm-1 g-4 pt-5 pb-5">
                    @foreach ($movies as $movie)
                    <div class="col">
                        <div class="card">
                            <img src="https://via.placeholder.com/150" class="card-img-top" alt="...">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title text-center">{{$movie->title}}</h5>
                                <p class="card-text text-center">Titolo originale: {{$movie->original_title}}</p>
                                <p class="card-text mb-0">Nazionalità: {{$movie->nationality}}</p>
                                <p class="card-text mb-0">Data: {{$movie->date}}</p>
                                <span class="card-text">Voto:<strong> {{$movie->vote}}</strong></span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <button onclick="document.body.classList.toggle('black')">Cambia sfondo</button>
        </main>
    </body>
</html>
