<div class="container">
    <div class="main">
        <div class="main__block">
            <div class="main__title">
                <h2>UPDATE RENTAL </h2>
                <hr>
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

            <div class="crud">
                <form method="POST" action="{{ route('updated', ['id' => $rental->id]) }}">
                    @csrf
                    @method('PUT')


                    <div class="field">
                        <label for="effective_return_date">Effective return date</label>
                        <input class="form-control" aria-label="default input example" type="date" name="effective_return_date" id="effective_return_date">
                    </div>
                    <div class="field">
                        <label for="observations">Observations</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" type="text" name="observations" value="{{ $data['observations'] }}"></textarea>
                    </div>

                    <div class="btn__form">
                        <button type="submit">Update rental</button>
                    </div>
                </form>
            </div>
        </div>
    </div>  
</div>  