<div class="foreground__content">
    <div class="foreground__header">
        <div class="logo">
            <img src="{{ asset('car_pictures/logo.png') }}" alt="LOGO">
        </div>
    </div>
    <div class="fill__verification ">

        <form method="POST" action="{{route('sendForVerifyEmail')}}">
            @csrf

            <div class="fill__form">
                <h2>Email Verification</h2>
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
           
            
            <div class="fill__field__list__item">
                <label for="email">Email</label>
                <input class="w-full" type="text" name="email" value="{{old('email')}}">
            </div>
            
            <div class="btn__submit">
                <button>Envoyez</button>
            </div>
            
        </form>
</div>