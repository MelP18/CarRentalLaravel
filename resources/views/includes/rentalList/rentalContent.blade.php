<a href="{{ route('addRentals') }}">Ajouter une location</a>

<a href="{{ route('addCustomer') }}" class="btn btn-primary">
    Add Customer
</a>

<table class="table table table-striped table-bordered">
    <thead class="table-dark">
        <tr>
            <th scope="col">N°</th>
            <th scope="col">Customer Name</th>
            <th scope="col">Car Name</th>
            <th scope="col">Car Release Date</th>
            <th scope="col">Expected Return Date</th>
            <th scope="col">Effective Return Ddate</th>
            <th scope="col">Observations</th>
            <th scope="col">Status</th>
            <th scope="col">Add Effective Return Ddate</th>

        </tr>
    </thead>
    @if (@isset($rental))
        <tbody>
            @foreach ($rental as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->customer->nom }} {{ $item->customer->prenom }}</td>
                    <td>{{ $item->cars->modalContent->brandContent->name . ' ' . $item->cars->modalContent->model_name . ' ' . $item->cars->modalContent->year }}
                    </td>
                    <td>{{ $item->car_release_date }}</td>
                    <td>{{ $item->expected_return_date }}</td>
                    <td>{{ $item->effective_return_date }}</td>
                    <td>{{ $item->observations }}</td>
                    <td>{{ $item->status }}</td> <!-- Placez la colonne "Status" ici -->

                    <td>
                        <div class=" btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">
                                <a href="{{ route('show', ['id' => $item->cars->id]) }}">Voir Plus </a> </button>

                            <button type="button" class="btn btn-sm btn-outline-secondary">
                                <a class="" href="{{ route('updated', ['id' => $item['id']]) }}">Modifier</a>
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

</div>
@endif
