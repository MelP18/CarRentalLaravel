<div class="container">
    <div class="main">
        <div class="main__block">
            <div class="main__title">
                <h2>ADD MODAL</h2>
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

                <form method="POST" action="{{route('sendModalCar')}}">
                    @csrf
                    <div>
                        <h5>MODAL</h5>
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
                           <option value="">Select a brand</option>
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