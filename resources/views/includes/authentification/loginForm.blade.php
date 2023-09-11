<div class="flex flex-col justify-center items-center gap-10 w-full h-screen">
    <form method="POST" action="{{route('sendLogIn')}}">
        @csrf
        <div class="bg-gray-500 py-2">
            <h2>CONNEXION</h2>
        </div>
        @if ($errors->any())
                <div class="errors">
                    <ul class="errors__list">  
                        @foreach ($errors->all() as $error)
                            <ol class="errors__list__item">{{ $error }}</ol>
                        @endforeach
                    </ul>
                </div>
        @endif

        @if(session('message'))
            <div class="sucess">
                <p class="sucess__message">{{session('message')}}</p>
            </div>
        @endif
    
        <div class="px-4">
            <div class="flex-col gap-10 px-4">
                <label for="email">Email</label>
                <input class="w-full" type="text" name="email" value="{{old('email')}}">
            </div>
            <div class="flex-col gap-10 px-4">
                <label for="password">Mot de Passe</label>
                <input class="w-full" type="password" name="password">
            </div>
        </div>
        <p>Pas encore inscrit? <a href="{{route('signUp')}}">S'inscrire</a></p>
        <a href="{{route('verifyEmail')}}">Mot de Passe oublié?</a>
        <button>Se connecter</button>
    </form>
</div>