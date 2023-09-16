<form method="POST" action="{{route('storeRental')}}" enctype="multipart/form-data">
    @csrf
    <div>
        <h5>AJOUTER UNE LOCATION</h5>
    </div>
    
    <div>
        <label for="">Nom du client</label>
        <select name="customer_id" id="">
            @if(isset($customer))
                @foreach ($customer as $custome)
                <option value="{{ $custome->id }}">
                    {{$custome->nom}}
                </option>

                @endforeach
            @endif
        </select> 
    </div>
    <div>
        <label for="year">Nom de la Voiture</label>
        <select name="car_id" id="">
            @if(isset($cars))
                @foreach ($modals as $modal)
                <option value="{{ $modal->id }}">
                    {{  $modal->brandContent->name }} {{  $modal->model_name }} {{  $modal->year }}
                </option>

                @endforeach
            @endif
        </select> 
    </div>
    <div>
        <label for="">Date de sotie</label>
        <input type="date" name="car_release_date" value="{{old('car_release_date')}}">
    </div>
    <div>
        <label for="">Retour prévu</label>
        <input type="date" name="expected_return_date" value="{{old('expected_return_date')}}">
    </div>
    <div>
        <label for="">Date effective de retour</label>
        <input type="date" name="effective_return_date" value="{{old('effective_return_date')}}">
    </div>
    <div>
        <label for="">Observations</label>
        <textarea type="text" name="observations" value="{{old('observations')}}"></textarea>
    </div>
    
    <button>Enregistrer</button>
</form> 