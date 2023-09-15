<div class="container">
    <div class="main">
        <div class="main__block">
            <div class="main__title">
                <h2>DELETE BRAND</h2>
                <hr>
            </div>
            <div class="crud">
                <form method="POST" action="{{route('sendDeleteBrandCar')}}">
                    @csrf

                    <div class="field">
                        <label for="category">Brand</label>
                        <select class="form-select" aria-label="Default select example"  name="brand_id" >
                            <option value="">Select a brand</option>
                            @if(isset($brands))
                                @foreach ($brands as $brand)
                                    <option value="{{ $brand->id }}">
                                        {{ $brand->name }}
                                    </option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                    <div class="btn__form">
                        <button>Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>