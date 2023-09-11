<div class="flex flex-col justify-center items-center gap-10 w-full h-screen">
    <form method="POST" action="{{route('sendForVerifyEmail')}}">
        @csrf
        <div class="bg-gray-500 py-2">
            <h2>Email Verification</h2>
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
           
        </div>
        <button>Envoyez</button>
    </form>
</div>