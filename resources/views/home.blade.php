<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Movies</title>

  {{-- Import assets --}}
  @vite('resources/js/app.js')
</head>

<body>
  <div class="container">
    <h1 class="text-center">Tutti i Film</h1>
    <div class="row row-cols-4">
      @foreach ($movies as $movie)
        <div class="col mt-3">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">{{ $movie->original_title }}</h5>
              <h6 class="card-subtitle mb-2 text-body-secondary">{{ $movie->title }}</h6>
              <p class="card-text">Nation: {{ ucfirst($movie->nationality) }}</p>
              <a href="{{ route('movies.show', $movie->id) }}" class="card-link">More info</a>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</body>

</html>
