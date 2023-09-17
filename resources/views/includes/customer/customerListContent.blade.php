<div class="container">

<div class="d-flex justify-content-end ">
    <a href="{{ route('addCustomer') }}" style="width:10%" class="btn btn-primary   ">
        Add Customer
     </a>
</div>

<table class="table table table-striped table-bordered ">
    <thead class="table-dark">
        <tr>
            <th scope="col" class="text-center">Image</th>
            <th scope="col" class="text-center">Nom</th>
            <th scope="col" class="text-center">Prénom</th>
            <th scope="col" class="text-center">Tel</th>
            <th scope="col" class="text-center">Adresse</th>
            <th scope="col" class="text-center">Actions </th>
        </tr>
    </thead>
    @if (@isset($table))
        <tbody>
            @foreach ($table as $item)
                <tr>
                    <th class="text-center">
                        <img @if (!empty($item['photo'])) src="{{ asset($item['photo']) }}" style="width: 50px ;Height:50px; border-radius:50%" 
                             @else src="" @endif alt="">
                    </th>
                    <td class="text-center">
                        <div class="mt-3">
                            {{ $item->nom }}
                        </div>
                      
                    </td>
                    <td class="text-center">
                        <div class="mt-3">
                        {{ $item->prenom }}
                    </div>
                    </td>
                    <td class="text-center">
                        <div class="mt-3">
                        {{ $item->tel }}
                    </div>
                    </td>
                    <td class="text-center">
                        <div class="mt-3">
                        {{ $item->adresse }}
                    </div>
                    </td>
                    <td class="text-center">
                        <div class="mt-2">
                        <div class=" btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">
                                <a href="{{route('customerProfil',['id'=>$item['id']])}}">Voir</a> </button>

                            <button type="button" class="btn btn-sm btn-outline-secondary">
                                <a  href="{{route('getCustomer',['ids'=>$item->id])}}">Modifier</a>
                            </button>

                            <button type="button" class="btn btn-sm btn-outline-secondary">
                                <a class="" href="{{ route('deleteCustomer', ['id' => $item->id])}}">
                                    Supprimer
                                </a></button>

                        </div>
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

</div>