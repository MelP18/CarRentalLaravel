<div class="container">
    <div class="main">
        <div class="main__block">
            <div class="main__title">
                <h2>DELETE CATEGORY</h2>
                <hr>
            </div>
            <div class="crud">
                <form method="POST" action="{{route('sendDeleteCategoryCar')}}">
                    @csrf
                    <div class="field">    
                        <label for="name">Category</label>
                        <select class="form-select" aria-label="Default select example"  name="category_id" >
                            <option value="">Select a category</option>
                            @if(isset($categories))
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">
                                        {{ $category->name }}
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