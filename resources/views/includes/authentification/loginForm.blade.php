<div class="foreground__content">
    <div class="foreground__header">
        <div class="logo">
            <img src="{{ asset('car_pictures/logo.png') }}" alt="LOGO">
        </div>
    </div>
    <div class="fill__connection">
        <form method="POST" action="{{route('sendLogIn')}}">
            @csrf
            <div class="fill__form">
                <h2>CONNECTION</h2>
            </div>

           

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

            <div class="fill__field__list">
                <div class="fill__field__list__item">
            
                    <label for="email">Email</label>
                    <input type="text" name="email" value="{{old('email')}}">
                </div>
                <div class="fill__field__list__item">
                    <label for="password">Password</label>
                    <input type="password" name="password">
                </div>
            </div>
            <div class="queried">
                <p>Not registered yet? <a href="{{route('signUp')}}">Sign up</a></p>
                <p><a href="{{route('verifyEmail')}}">Forgot Password?</a><p>
            </div>
            <div class="btn__submit">
                <button>Sign in</button>
            </div>
        </form>
    </div>
</div>