<div class="container">
    <div class="main">
        <div class="main__block">
            <div class="main__title">
                <h2>SEARCH</h2>
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

        <div class="add">

            <div class="table__btn">
                <a href="{{route('searchRental')}}">
                    New Search Rental
                    <i class="fa-solid fa-magnifying-glass"></i>
                </a>
            </div>
            
            <form method="POST" action="{{route('sendSearchRental')}}">
                @csrf
                <div class="field__form">
                    <h5 style="text-align: center;margin:8px">Search for locations between date 1 and date 2</h5>
                    <div class="row">
                        <div class="col">
                            <label for="date1">Date 1</label>
                            <input type="date" name="date1" value="{{old('date1')}}" class="form-control">
                        </div>
                        <div class="col">
                            <label for="date2">Date 2</label>
                            <input type="date" name="date2" value="{{old('date2')}}" class="form-control">
                        </div> 
                    </div>
                    <div class="btn__form">
                        <button>Search</button>
                    </div>
                </div>
            </form>
        </div>

        @if(isset($rentals) && count($rentals) != 0)
            <div class="add">
               
                    <div class="main__title" >
                        <h2>RENTALS LIST</h2>
                        <hr>
                    </div>
                {{--  <div class="title">
                        <h4>RENTALS LIST</h4>
                    </div> --}}
                
                    <div class="table__btn" style="margin-top: 25px;">
                        <a href="{{ route('printRental') }}">Print Rentals List</a>
                    </div>
                
                    <table style="margin-bottom: 15px">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Customers</th>
                                <th>Car Name</th>
                                <th>Car Release Date</th>
                                <th>Expected Return Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($rentals as $rental)
                                <tr>
                                    <td>{{$rental->id}}</td>
                                    <td>{{$rental->customer->nom }} {{ $rental->customer->prenom }}</td>
                                    <td>{{ $rental->cars->modalContent->brandContent->name . ' ' . $rental->cars->modalContent->model_name . ' ' . $rental->cars->modalContent->year }}</td>
                                    <td>{{ $rental->car_release_date }}</td>
                                    <td>{{ $rental->expected_return_date }}</td>
                                </tr>
                            @endforeach 
                        </tbody>
                    </table>
                
            </div>
            
        {{-- @else
        <div class="empty__page">
            <h3>No data available</h3>
        </div> --}}
        @endif 
        </div>
    </div>
</div>