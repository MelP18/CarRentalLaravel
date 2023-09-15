<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <title>CarRental</title>
</head>
<body class="bg-blue-950">
    <div class="block w-full h-screen" >
        <div class="container mx-auto px-4">
           
            @yield('content')
            
        </div>
    </div>
</body>
</html>

