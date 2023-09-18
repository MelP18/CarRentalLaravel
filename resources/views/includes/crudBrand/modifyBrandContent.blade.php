<div class="container">
    <div class="main">
        <div class="main__block">
            <div class="main__title">
                <h2>MODIFY BRAND</h2>
                <hr>
            </div>
            @if (session('message'))

                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Message success </strong> <br>{{ session('message') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        
                    </button>
        
                </div>
    
            @endif
    
            @if (session('error'))
        
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Message success </strong> <br>{{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    </button>
                </div>
        
            @endif
        
            @if ($errors->any())
        
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li><br />
                        @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                </div>
        
            @endif
            <div class="crud">
                <form method="POST" action="{{route('sendModifyBrandCar')}}">
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
                    <div class="field"> 
                        <label for="name">New name for brand</label>
                        <input type="text" name="name">
                    </div>
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
                    <div class="btn__form">
                        <button>Modify</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>