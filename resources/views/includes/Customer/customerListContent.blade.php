
<table class="table table table-striped table-bordered">
    <thead class="table-dark">
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

