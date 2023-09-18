<div class="container">
    <div class="main">
        <div class="main__block">
            <div class="main__title">
                <h2>ADD BRAND</h2>
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





