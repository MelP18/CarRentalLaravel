<div class="container">
   
    <div class="rentals">
        @if(count($rentals) != 0)
            <div class="title">
                <h4>RENTALS LIST</h4>
            </div>
            <table>
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
        @else
            <div class="empty__page">
                <h3>No data available</h3>
            </div>
        @endif 
    </div>
</div>
