<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{--  <link href="{{ asset('css/app.css') }}" rel="stylesheet">  --}}
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <title>CarRental</title>
</head>

<body class="bg-blue-950">
    @if (session('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Message success </strong> <br>{{ session('message') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">

            </button>

        </div>
    @endif
    @if (session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Message success </strong> <br>{{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">

            </button>

        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li><br />
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
        </div>
    @endif
    <div class="block w-full h-screen">
        <header class="navbar mb-5 bg-primary">
            <div class="header__content ">
                <div class="header__logo "><a href="#" class="text-dark text-decoration-none">GesCar</a></div>
            </div>
            <div class="user">
                <a href="{{ route('addCustomer') }}">
                    <button type="button" class="btn btn-primary m-5">Add Customer</button>
                </a>
            </div>
        </header>
        <main>
            @yield('content')
        </main>
    </div>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>

</html>
