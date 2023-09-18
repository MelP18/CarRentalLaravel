<div class="container">
    <div class="main">
        <div class="main__block">
            <div class="main__title">
                <h2>ADD RENTAL </h2>
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
                <form method="POST" action="{{route('storeRental')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="field">
                        <label for="">Customer name</label>
                        <select class="form-select" aria-label="Default select example" name="customer_id" id="">
                            @if(isset($customer))
                                @foreach ($customer as $custome)
                                <option value="{{ $custome->id }}">
                                    {{$custome->nom}}
                                </option>

                                @endforeach
                            @endif
                        </select> 
                    </div>
                    <div class="field">
                        <label for="car_id">Car name</label>
                        <select class="form-select" aria-label="Default select example" name="car_id" id="car_id">
                            @if(isset($cars))
                                @foreach ($cars as $car)
                                <option value="{{ $car->id }}">
                                    {{  $car->modalContent->brandContent->name }} {{  $car->modalContent->model_name }} {{  $car->modalContent->year }}
                                </option>

                                @endforeach
                            @endif
                        </select> 
                    </div>
                    
                    <div class="field">
                        <label for="car_release_date">Release date</label>
                        <input class="form-control" aria-label="default input example" type="date" name="car_release_date" value="{{old('car_release_date')}}">
                    </div>
                    <div class="field">
                        <label for="expected_return_date">Return date</label>
                        <input class="form-control" aria-label="default input example" type="date" name="expected_return_date" value="{{old('expected_return_date')}}">
                    </div>
                    
                    <div class="btn__form">
                        <button>save</button>
                    </div>
                    
                </form> 
            </div>
        </div>
    </div>
</div>