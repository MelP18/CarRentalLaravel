<div class="container">
    <div class="main">
        <div class="main__block">
            <div class="main__title">
                <h2>LIST OF CARS</h2>
                <hr>
            </div>
            <div class="main__content">
                <div class="main__btn">
                    <div class="add">
                        <a href="{{ route('addCar') }}">Add Car</a>
                    </div>
                    <div class="dropdown">
                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1"
                            data-bs-toggle="dropdown" aria-expanded="false"
                            style="background-color: var(--gray-base); color:var(--orange-color); font-weight:bold; letter-spacing:2px;border:none;
                        box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;">
                            Category
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="{{ route('addCategoryCar') }}"
                                    style="color: var(--orange-color)">Add Category</a></li>
                            <li><a class="dropdown-item" href="{{ route('modifyCategoryCar') }}"
                                    style="color: var(--orange-color)">Modify Category</a></li>
                            <li><a class="dropdown-item" href="{{ route('deleteCategoryCar') }}"
                                    style="color: var(--orange-color)">Delete Category</a></li>
                        </ul>
                    </div>
                    <div class="dropdown">
                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1"
                            data-bs-toggle="dropdown" aria-expanded="false"
                            style="background-color: var(--gray-base); color:var(--orange-color); font-weight:bold; letter-spacing:2px;border:none;
                        box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;">
                            Brand
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="{{ route('addBrandCar') }}"
                                    style="color: var(--orange-color)">Add Brand</a></li>
                            <li><a class="dropdown-item" href="{{ route('modifyBrandCar') }}"
                                    style="color: var(--orange-color)">Modify Brand</a></li>
                            <li><a class="dropdown-item" href="{{ route('deleteBrandCar') }}"
                                    style="color: var(--orange-color)">Delete Brand</a></li>
                        </ul>
                    </div>
                    <div class="dropdown">
                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1"
                            data-bs-toggle="dropdown" aria-expanded="false"
                            style="background-color: var(--gray-base); color:var(--orange-color); font-weight:bold; letter-spacing:2px; border:none;
                        box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;">
                            Model
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="{{ route('addModalCar') }}"
                                    style="color: var(--orange-color)">Add Model</a></li>
                            <li><a class="dropdown-item" href="{{ route('modifyModalCar') }}"
                                    style="color: var(--orange-color)">Modify Model</a></li>
                            <li><a class="dropdown-item" href="{{ route('deleteModalCar') }}"
                                    style="color: var(--orange-color)">Delete Model</a></li>
                        </ul>
                    </div>
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
                @if (count($carList) != 0 && count($cars) !=0)
                    {{-- @foreach ($carList as $car) --}}
                    <div class="main__information">
                        <div class="car">
                            <ul class="car__list">
                                @foreach ($cars as $car)
                                <li class="car__list__item"> 
                                    <div class="car__img">
                                        <img src="{{ asset($car->mainly_image) }}" alt="">
                                    </div>                                 
                                    <div class="car__information">
                                       
                                        <div class="car__name">
                                            <h3>{{ $car->modalContent->brandContent->name . ' ' . $car->modalContent->model_name . ' ' . $car->modalContent->year }}
                                            </h3>
                                            <hr>
                                        </div>
                                        <div class="car__princ__info">
                                            <div class="car__info">
                                                <h3>CATEGORY</h3>
                                                <p>{{ $car->modalContent->brandContent->categoryContent->name }}</p>
                                            </div>
                                            <div class="car__info">
                                                <h3>BRAND</h3>
                                                <p>{{ $car->modalContent->brandContent->name }}</p>
                                            </div>
                                            <div class="car__info">
                                                <h3>MODEL</h3>
                                                <p>{{ $car->modalContent->model_name }}</p>
                                            </div>
                                            <div class="car__info">
                                                <h3>YEAR</h3>
                                                <p>{{ $car->modalContent->year }}</p>
                                            </div>    
                                        </div>
                                        <div class="link">
                                            <a href="{{ route('showCar', ['id' => $car->id]) }}">See more</a>
                                        </div> 
                                    </div>     
                                </li> 
                                @endforeach
                            </ul>
                            <div class="paginate">
                                {{ $cars->links() }}
                            </div>
                        </div>
                    </div>    
                @else
                    <div class="empty__page">
                        <h3>No car added</h3>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
