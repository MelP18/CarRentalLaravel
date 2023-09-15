<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">

  <title>CarRental</title>
</head>
<body>
    <div class="block">
        <div class="block__background">
            <img src="{{ asset('car_pictures/car5.jpg') }}" alt="car_image">
        </div>
            @yield('content')

    <script src="{{ asset('js/bootstrap.min.js') }}"></script>        
</body>
</html>

