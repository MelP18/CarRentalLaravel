<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" 
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>CarRental</title>
</head>

<body class="bg-blue-950">

    <div class="wrapper">
        <header>
            <div class="container">
                <div class="header__content">
                    <div class="header__logo ">
                        <a href="{{ route('showCustomerLists') }}"> 
                            <img src="{{ asset('car_pictures/logo.png') }}" alt="car_image">
                        </a>
                    </div>
                    <div class="header__menus">
                        <ul class="header__menu__list">
                            <li class="header__menu__list__item">
                                <a href="{{ route('showCustomerLists') }}">Home</a>
                            </li>
                            <li class="header__menu__list__item">
                                <a href="{{ route('showCarLists') }}">Car Management</a>
                            </li>
                            <li class="header__menu__list__item">
                                <a href="{{ route('rental') }}">Rental Management</a>
                            </li>
                           {{--  <li class="header__menu__list__item">
                                <a href="{{ route('CarCharacteristicsList') }}">All Characterisctics</a>
                            </li> --}}
                            <li class="header__menu__list__item">
                                <a href="{{route('logOut')}}">
                                    <i class="fa-solid fa-arrow-right-from-bracket"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>

        <main>
           
            @yield('content')

        </main>

    </div>

    
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    
</body>

</html>
