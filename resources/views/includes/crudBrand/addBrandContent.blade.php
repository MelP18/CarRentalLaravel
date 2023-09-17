<div class="container">
    <div class="main">
        <div class="main__block">
            <div class="main__title">
                <h2>ADD BRAND</h2>
                <hr>
            </div>
            <div class="crud">
                <form method="POST" action="{{route('sendBrandCar')}}">
                    @csrf
                    <div>
                        <h5>BRAND</h5>
                    </div>
                    <div class="field"> 
                        <input type="text" name="name">
                    </div>
                    <div class="field"> 
                        <select class="form-select" aria-label="Default select example" name="category_id">
                           <option value="">Select a brand</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">
                                    {{ $category->name }}
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





