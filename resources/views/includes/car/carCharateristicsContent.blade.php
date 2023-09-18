<div class="container">
    <div class="main">
        <div class="main__block">
            <div class="main__title">
                <h2>CHARATERISICS LIST</h2>
                <hr>
            </div>
            
            <table>
                <thead>
                    <tr>
                        <th>Categories</th>
                        <th>Brands</th>
                        <th>Models</th>
                    </tr>
                </thead>
                <tbody>
                    @if($categories && $brands)
                        @foreach($categories as $category)
                        <tr>
                            <td>{{$category->name}}</td>

                            <td>
                            @foreach($category->brandContent as $brand)
                            <li>{{$brand->name}}</li>
                            @endforeach
                            </td>
                            
                            <td>
                            @foreach($brand->modalContent as $model)
                            <li>{{$model->model_name}}</li>
                            @endforeach
                            </td>
                        </tr>
                        @endforeach
                    @endif
                        
                </tbody>
               
            </table>
        </div>
    </div>
</div>
