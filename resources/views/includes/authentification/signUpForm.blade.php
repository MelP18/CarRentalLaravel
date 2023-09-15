<div class="foreground__content">
    <div class="foreground__header">
        <div class="logo">
            <img src="{{ asset('car_pictures/logo.png') }}" alt="LOGO">
        </div>
    </div>
    <div class="fill">
        <form method="POST" action="{{ route('sendSignUp') }}">
            @csrf
            <div class="fill__form">
                <h2>INSCRIPTION</h2>
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
                    <div class="fill__field">
                        <label for="surname">Surname</label>
                        <input type="text" name="surname" value="{{ old('surname') }}">
                    </div>
                    <div class="fill__field">
                        <label for="firstname">Firstname</label>
                        <input type="text" name="firstname" value="{{ old('firstname') }}">
                    </div>
                </div>
                <div class="fill__field__list__item">
                    <label for="email">Email</label>
                    <input type="text" name="email" value="{{ old('email') }}">
                </div>
                <div class="fill__field__list__item">
                    <div class="fill__field">
                        <label for="password">Password</label>
                        <input type="password" name="password">
                    </div>
                    <div class="fill__field">
                        <label for="confirmPassword">Confirm Password</label>
                        <input type="password" name="password_confirmation">
                    </div>
                </div>  
            </div>
            <div class="queried">
                <p>Déjà inscrit? <a href="{{ route('logIn') }}">Se connecter</a></p>
            </div>
            <div class="btn__submit">
                <button>Sign up</button>
            </div>
        </form>
    </div>
</div>

