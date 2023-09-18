
<div class="container">
<div class="main">
    <div class="main__block">
        <div class="main__title">
            <h2>CUSTOMER LIST</h2>
            <hr>
        </div>
        <div class="main__content">
            <div class="main__btn">
                <div class="add">
                    <a href="{{ route('addCustomer') }}">
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

            @if (@isset($table))
            <table>
                <thead >
                    <tr>
                        <th >Picture</th>
                        <th >Surname</th>
                        <th >Firstname</th>
                        <th>Email</th>
                        <th>CNI</th>
                        <th >Phone</th>
                        <th >Address</th>
                        <th >Action </th>
                    </tr>
                </thead>
               
                <tbody>
                    @foreach ($table as $item)
                        <tr>
                            <td>
                                <img @if (!empty($item['photo'])) src="{{ asset($item['photo']) }}" style="width: 50px ;Height:50px; border-radius:50%" 
                                    @else src="" @endif alt="">
                            </td>
                            <td> {{ $item->nom }} </td>
                            <td> {{ $item->prenom }} </td>
                            <td> {{ $item->email }} </td>
                            <td> {{$item->cni}} </td>
                            <td> {{ $item->tel }} </td>
                            <td> {{ $item->adresse }} </td>
                           
                            <td>
                                <div class="table__btn">
                                        <div class="add">
                                            <a href="{{route('customerProfil',['id'=>$item['id']])}}">Voir plus</a> 
                                        </div>
                                        <div class="add">
                                            <a  href="{{route('getCustomer',['ids'=>$item->id])}}">Modifier</a>
                                        </div>
                                        <div class="add">
                                            <a class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                Supprimer
                                            </a>
                                            {{-- <a class="" href="{{ route('deleteCustomer', ['id' => $item->id])}}">
                                                Supprimer
                                            </a> --}}
                                        </div>  
                                </div>
                                <!-- Button trigger modal -->

  
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header bg-danger">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                This action will not only delete the client but also the rentals that
                                                are attributed to him. Do you want to continue ?
                                            </div>
                                            <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                                            <a style="background: var(--orange-color); border: 1px solid var(--orange-color)" href="{{ route('deleteCustomer', ['id' => $item->id])}}" type="button" class="btn btn-primary">Yes</a>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                            </td>
                        </tr>
                    @endforeach
            </tbody>
                        
                        </table>
                                <div class="paginate">
                                    {{ $table->links() }}
                                </div>

                     </div>
                     @else
                <div class="empty__page">
                    <h3>No customer added</h3>
                </div>
            @endif

    </div>