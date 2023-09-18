<div class="container">
    <div class="main">
        <div class="main__block">
            <div class="main__title">
                <h2>RENTAL LIST</h2>
                <hr>
            </div>
            <div class="main__content">
                <div class="main__btn">
                    <div class="add">
                        <a href="{{ route('addRentals') }}">Ajouter une location</a>
                    </div>
                    <div class="add">
                        <a href="{{ route('addCustomer') }}" >
                            Add Customer
                        </a>
                    </div>
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
                
                @if ($rental->count() != 0)
                <table>
                    <thead>
                        <tr>
                            <th>Customer Name</th>
                            <th>Car Name</th>
                            <th>Car Release date</th>
                            <th>Expected Return date</th>
                           {{--  <th>Effective Return date</th> --}}
                           
                            <th>Status</th>
                           
                            <th>Effective Return date</th>
                            <th>Observations</th>
                            <th>Technical data</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                   
                        <tbody>
                            @foreach ($rental as $item)
                                <tr>
                                    <td>{{ $item->customer->nom }} {{ $item->customer->prenom }}</td>
                                    <td>{{ $item->cars->modalContent->brandContent->name . ' ' . $item->cars->modalContent->model_name . ' ' . $item->cars->modalContent->year }}</td>
                                    <td>{{ $item->car_release_date }}</td>
                                    <td>{{ $item->expected_return_date }}</td>
                                   
                                    
                                    <td class="badge " @if ($item->status === 'Délai respecté') style="color: white; background-color: green; font-weight: 900" @elseif ($item->status === 'Délai non respecté') style="color: white; background-color: red; font-weight: 900" @else style="color: white; background-color: orange; font-weight: 900" @endif>{{ $item[ 'status'] }}</td>>{{ $item->status }}</td> <!-- Placez la colonne "Status" ici -->
                                    
                                    <td>{{ $item->effective_return_date }}</td>
                                    <td>{{ $item->observations }}</td>
                                    <td>
                                        <div class="table__btn">
                                            <div class="add">
                                                <a href="{{ route('show', ['id' => $item->cars->id]) }}">Technical data</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="table__btn">
                                            <div  class="add">
                                                <a class="" href="{{ route('rentalEdit', ['id' => $item['id']]) }}">Update</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                <div class="paginate d-flex justify-content-end m-5">
                </div>
                @else
                <div class="empty__page">
                    <h3>No rental added</h3>
                </div>
                
                @endif
