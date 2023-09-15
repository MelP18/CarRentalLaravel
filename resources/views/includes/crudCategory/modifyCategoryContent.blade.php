<div class="container">
    <div class="main">
        <div class="main__block">
            <div class="main__title">
                <h2>MODIFY CATEGORY</h2>
                <hr>
            </div>
            <div class="crud">
                <form method="POST" action="{{route('sendModifyCategoryCar')}}">
                    @csrf
                    <div class="field">
                        <label for="category">Category</label>
                        <select class="form-select" aria-label="Default select example"  name="category_id" >
                            <option value="">Select a category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="field"> 
                        <label for="name">New name for category</label>
                        <input type="text" name="name">
                    </div>
                    <div class="btn__form">
                        <button>Modify</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>