<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>CarRental</title>
  </head>
  <body class="bg-blue-950">
      <div class="block w-full h-screen" >
        <header>
            <div class="header__content">
                <div class="header__logo"><a href="#">GesCar</a></div>
            </div>
            <div class="user">
               <p>User</p>
            </div>
        </header>
        <main>
            @yield('content')
        </main>
      </div>
  </body>
  </html>