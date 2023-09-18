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

                <table>
                    <thead >
                        <tr>
                            <th scope="col">Image</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Prénom</th>
                            <th scope="col">Tel</th>
                            <th scope="col">Adresse</th>
                            <th scope="col">Actions </th>
                        </tr>
                    </thead>
                    @if (@isset($table))
                        <tbody>
                            @foreach ($table as $item)
                                <tr>
                                    <th>
                                        <img @if (!empty($item['photo'])) src="{{ asset($item['photo']) }}" style="width: 50px ;Height:50px; border-radius:35px" 
                                            @else src="" @endif alt="">
                                    </th>
                                    <td>{{ $item->nom }}</td>
                                    <td>{{ $item->prenom }}</td>
                                    <td>{{ $item->tel }}</td>
                                    <td>{{ $item->adresse }}</td>
                                    <td>
                                        <div class=" btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-secondary">
                                                <a href="">Voir Plus </a> </button>

                                            <button type="button" class="btn btn-sm btn-outline-secondary">
                                                <a class="" href="">Modifier</a>
                                            </button>

                                            <button type="button" class="btn btn-sm btn-outline-secondary">
                                                <a class="" href="">
                                                    Supprimer
                                                </a></button>

                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                
                </table>
                        <div class="paginate d-flex justify-content-end m-5">
                            {{ $table->links() }}
                        </div>
                @endif

