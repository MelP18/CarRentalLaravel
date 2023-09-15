
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
                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" 
                        style="background-color: var(--gray-base); color:var(--orange-color); font-weight:bold; letter-spacing:2px;border:none;
                        box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;">
                        Category
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1"> 
                        <li><a class="dropdown-item" href="{{route('addCategoryCar')}}" style="color: var(--orange-color)">Add Category</a></li>
                        <li><a class="dropdown-item" href="{{route('modifyCategoryCar')}}" style="color: var(--orange-color)">Modify Category</a></li>
                        <li><a class="dropdown-item" href="{{route('deleteCategoryCar')}}" style="color: var(--orange-color)">Delete Category</a></li>
                        </ul>
                    </div>
                    <div class="dropdown">
                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" 
                        style="background-color: var(--gray-base); color:var(--orange-color); font-weight:bold; letter-spacing:2px;border:none;
                        box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;">
                        Brand
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1"> 
                        <li><a class="dropdown-item" href="{{route('addBrandCar')}}" style="color: var(--orange-color)">Add Brand</a></li>
                        <li><a class="dropdown-item" href="{{route('modifyBrandCar')}}" style="color: var(--orange-color)">Modify Brand</a></li>
                        <li><a class="dropdown-item" href="{{route('deleteBrandCar')}}" style="color: var(--orange-color)">Delete Brand</a></li>
                        </ul>
                    </div>
                    <div class="dropdown">
                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" 
                        style="background-color: var(--gray-base); color:var(--orange-color); font-weight:bold; letter-spacing:2px; border:none;
                        box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;">
                        Model
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1"> 
                        <li><a class="dropdown-item" href="{{route('addModalCar')}}" style="color: var(--orange-color)">Add Model</a></li>
                        <li><a class="dropdown-item" href="{{route('modifyModalCar')}}" style="color: var(--orange-color)">Modify Model</a></li>
                        <li><a class="dropdown-item" href="{{route('deleteModalCar')}}" style="color: var(--orange-color)">Delete Model</a></li>
                        </ul>
                    </div>
                </div>
                @if ($cars->count() != 0)
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
                                                <h3>ppp poi vynj rujgf pom hyuo </h3>
                                                <hr>
                                            </div>
                                            <div class="car__princ__info">
                                                <div class="car__info">
                                                    <h3>Category</h3>
                                                    <p> Voiture personnelle</p>
                                                {{--  <p>{{}}</p> --}}
                                                </div>
                                                <div class="car__info">
                                                    <h3>Brand</h3>
                                                    <p>Mercedes</p>
                                                {{--  <p>{{}}</p> --}}
                                                </div>
                                                <div class="car__info">
                                                    <h3>Model</h3>
                                                    <p>5 poiuhgty</p>
                                                {{--  <p>{{}}</p> --}}
                                                </div>
                                                <div class="car__info">
                                                    <h3>Year</h3>
                                                    <p>5 poiuhgty</p>
                                                {{--  <p>{{}}</p> --}}
                                                </div>  
                                            </div>
                                            <div class="link">
                                                <a type="button" class="btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop.{{$car->id}}">
                                                    See more
                                                </a>
                                            </div> 
                                            <div class="modal fade " id="staticBackdrop.{{$car->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                    <h1 class="modal-title" id="staticBackdropLabel" style="color: var(--orange-color); font-weight:bold; font-size:13px ! important">CAR DETAIL</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="modal__body__content">
                                                            <div id="carouselExampleCaptions" class="carousel slide">
                                                                <div class="carousel-indicators">
                                                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                                                </div>
                                                                <div class="carousel-inner" style="background-color: var(--gray-base)">
                                                                <div class="carousel-item active">
                                                                    <div class="slide__img">
                                                                        <img src="{{ asset($car->mainly_image) }}" alt="" class="w-100">
                                                                    </div>
                                                                    <div class="carousel-caption d-none d-md-block">
                                                                    <h5>First slide label</h5>
                                                                    <p>Some representative placeholder content for the first slide.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="carousel-item">
                                                                    <div class="slide__img">
                                                                        <img src="{{ asset($car->secondary_image) }}" alt="" class="w-100">
                                                                    </div>
                                                                    <div class="carousel-caption d-none d-md-block">
                                                                    <h5>Second slide label</h5>
                                                                    <p>Some representative placeholder content for the second slide.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="carousel-item">
                                                                    <div class="slide__img">
                                                                        <img src="{{ asset($car->tertiary_image) }}" alt="" class="w-100">
                                                                    </div>
                                                                    <div class="carousel-caption d-none d-md-block">
                                                                    <h5>Third slide label</h5>
                                                                    <p>Some representative placeholder content for the third slide.</p>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                                <span class="visually-hidden">Previous</span>
                                                                </button>
                                                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                                <span class="visually-hidden">Next</span>
                                                                </button>
                                                            </div>
                                                            <div class=" car__description">
                                                                <div class="car__detail">
                                                                    <table>
                                                                        <thead>
                                                                            <th colspan="2">CHARACTERISTICS</th>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>Fuel</td>
                                                                                <td>{{$car->car_name}}</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Number cylinder</td>
                                                                                <td>{{$car->number_cylinder}}</td>
                                                                            </tr>
            
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            </div>
                                                        </div>  
                                                    <div class="modal-footer">
                                                    <button type="button" class="btn" data-bs-dismiss="modal"
                                                    style="background-color: var(--gray-base); color:var(--orange-color); font-weight:bold; letter-spacing:2px;border:none;
                                                    box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;">Close</button>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                        </div> 
                                    </li>
                                @endforeach
                            </ul>
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