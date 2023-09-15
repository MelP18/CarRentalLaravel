<div class="container">
    <div class="main">
        <div class="main__block">
            <div class="main__title">
                <h2>ADD BRAND</h2>
                <hr>
            </div>
            <div class="crud">
                <form method="POST" action="{{route('sendModalCar')}}">
                    @csrf
                    <div>
                        <h5>MODEL</h5>
                    </div>
                    <div class="field"> 
                        <label for="name">Name</label>
                        <input type="text" name="model_name">
                    </div>
                    <div class="field"> 
                        <label for="year">Year</label>
                        <input type="text" name="year">
                    </div>
                    <div class="field"> 
    
                        <select class="form-select" aria-label="Default select example"  name="brand_id">
                           <option value="">Select a model</option>
                           @foreach ($brands as $brand)
                                <option value="{{ $brand->id }}">
                                    {{ $brand->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="btn__form">
                        <button>Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>