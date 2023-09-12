<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>CarRental</title>
  </head>

  <body class="bg-blue-950">

      <div class="block">

        <header>
            <div class="container mx-auto px-4">
                <div class="flex justify-between items-center gap-10 ">
                    <div class="header__logo">
                        <a href="#">GesCar</a>
                    </div>
                    <div class="user">
                        <p>User</p>
                     </div>
                </div>
            </div>
        </header>

        <main>
            @yield('content')
        </main>

      </div>

  </body>

  </html>