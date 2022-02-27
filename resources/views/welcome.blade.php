<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Boolpress</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        {{-- favicon --}}
        <link rel="icon" type="image/png" href="{{asset("images/logo.png")}}">
    </head>
    <body>
      <div id="app">
        {{-- vue content --}}
      </div>
      <script src="{{asset("js/front.js")}}"></script>
    </body>
</html>
