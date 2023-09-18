<div class="container">
    <div class="main">
        <div class="main__block">
            <div class="main__title">
                <h2>ADD CAR </h2>
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

          
            @if ($categories->count() == 0)
                <div class="crud">
                    <form method="POST" action="{{route('sendCategoryCar')}}">
                        @csrf
                        <div>
                            <h5>CATEGORY</h5>
                        </div>
                        <div class="field"> 
                            <input type="text" name="name">    
                        </div>
                        <div class="btn__form">
                            <button>Save</button>
                        </div>
                    </form>
                </div>
            @endif

            @if($categories->count() != 0 && $brands->count() == 0)
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
            @endif


            @if($brands->count() != 0 && $modals->count() == 0)
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
            @endif


           
            @if($modals->count() != 0)
               
                <div class="btn__list">
                    <div class="add">
                        <a href="{{ route('showCarLists') }}">Car list</a>
                    </div>
                </div>
            
                <div class="add">
                    <form method="POST" action="{{route('sendCarAdd')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="field__form">
                            <div class="mb-3">
                                <label for="formFileMultiple" class="form-label">Car picture</label>
                                <input class="form-control" name="image[]" type="file" id="formFileMultiple" multiple>
                            </div>
                            <div>
                                <label for="year">Model</label>
                                <select class="form-select" aria-label="Default select example" name="modal_id">
                                    <option value="">Select a model</option>
                                    @if(isset($modals))
                
                                        @foreach ($modals as $modal)
                                        <option value="{{ $modal->id }}">
                                            {{$modal->model_name.' '.$modal->year}}
                                        </option>
                
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="year">Gearboxes</label>
                                <input type="text" name="gearboxes" value="{{old('gearboxes')}}" class="form-control" aria-label="First name">
                                </div>
                                <div class="col">
                                    <label for="year">Power</label>
                                <input type="number" name="power" value="{{old('power')}}" class="form-control" aria-label="Last name">
                                </div>
                                <div class="col">
                                    <label for="year">Number door</label>
                                <input type="number" name="number_door" value="{{old('number_door')}}" class="form-control" aria-label="Last name">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="year">Fuel</label>
                                <input type="text" name="fuel" value="{{old('fuel')}}" class="form-control" aria-label="First name">
                                </div>
                                <div class="col">
                                    <label for="year">Number cylinder</label>
                                <input type="number" name="number_cylinder" value="{{old('number_cylinder')}}" class="form-control" aria-label="Last name">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="year">Valve</label>
                                <input type="number" name="valve" value="{{old('valve')}}" class="form-control" aria-label="Last name">
                                </div>
                                <div class="col">
                                    <label for="year">Maximum speed</label>
                                <input type="number" name="maximum_speed" value="{{old('maximum_speed')}}" class="form-control" aria-label="First name">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="year">Body shop</label>
                                <input type="text" name="body_shop" value="{{old('body_shop')}}" class="form-control" aria-label="Last name">
                                </div>
                                <div class="col">
                                    <label for="year">Transmission</label>
                                <input type="text" name="transmission" value="{{old('transmission')}}" class="form-control" aria-label="Last name">
                                </div>
                                <div class="col">
                                    <label for="year">Brake</label>
                                <input type="text" name="brake" value="{{old('brake')}}" class="form-control" aria-label="Last name">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="year">Acceleration</label>
                                <input type="number" name="acceleration" value="{{old('acceleration')}}" class="form-control" aria-label="Last name">
                                </div>
                                <div class="col">
                                    <label for="year">Color</label>
                                <input type="text" name="color" value="{{old('color')}}" class="form-control" aria-label="Last name">
                                </div>
                            </div>
                        </div>
                        
                        <div class="btn__form">
                            <button>Save</button>
                        </div>  
                    </form>  
                </div>
            @endif
        </div>
    </div>
</div>
