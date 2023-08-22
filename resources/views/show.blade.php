<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ $movie->title }}</title>
</head>

<body>
  <h1>Original Title: {{ $movie->original_title }}</h1>
  <h2>Italian Title: {{ $movie->title }}</h2>
  <ul>
    <li>Nationality : {{ ucfirst($movie->nationality) }}</li>
    <li>Production date : {{ $movie->date }}</li>
    <li>Community Vote : {{ $movie->vote }}</li>
  </ul>
</body>

</html>
