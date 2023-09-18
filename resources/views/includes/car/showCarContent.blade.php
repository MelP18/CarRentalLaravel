<div class="container">
    <div class="main">
        <div class="main__block">
            <div class="main__title">
                <h2>CAR DETAIL</h2>
                <hr>
            </div>
            <div class="car__detail__content">
                <div class="slides">
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
                                <h5>{{$carModal->brandContent->name.' '.$carModal->model_name.' '.$carModal->year}}</h5>
                                <p>GesCar, wherever you go!</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="slide__img">
                                    <img src="{{ asset($car->secondary_image) }}" alt="" class="w-100">
                                </div>
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>{{$carModal->brandContent->name.' '.$carModal->model_name.' '.$carModal->year}}</h5>
                                    <p>GesCar, wherever you go!</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                            <div class="slide__img">
                                <img src="{{ asset($car->tertiary_image) }}" alt="" class="w-100">
                            </div>
                            <div class="carousel-caption d-none d-md-block">
                                <h5>{{$carModal->brandContent->name.' '.$carModal->model_name.' '.$carModal->year}}</h5>
                                <p>GesCar, wherever you go!</p>
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
                </div>
               
                <div class="technical__data">
                    <div class="car__description">
                        <div class="car__detail">
                            <table>
                                <thead>
                                    <th colspan="2">CHARACTERISTICS</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Car name</td>
                                        <td>{{$carModal->brandContent->name.' '.$carModal->model_name.' '.$carModal->year}}</td>
                                    </tr>
                                    <tr>
                                        <td>Category</td>
                                        <td>{{$carModal->brandContent->categoryContent->name}}</td>
                                    </tr>
                                    <tr>
                                        <td>Brand</td>
                                        <td>{{$carModal->brandContent->name}}</td>
                                    </tr>
                                    <tr>
                                        <td>Model</td>
                                        <td>{{$carModal->model_name}}</td>
                                    </tr>
                                    <tr>
                                        <td>Gearboxes</td>
                                        <td>{{$car->gearboxes}}</td>
                                    </tr>
                                    <tr>
                                        <td>Power</td>
                                        <td>{{$car->power}}</td>
                                    </tr>
                                    <tr>
                                        <td>Number of door</td>
                                        <td>{{$car->number_door}}</td>
                                    </tr>
                                    <tr>
                                        <td>Fuel</td>
                                        <td>{{$car->fuel}}</td>
                                    </tr>
                                    <tr>
                                        <td>Number of cylinder</td>
                                        <td>{{$car->number_cylinder}}</td>
                                    </tr>
                                    <tr>
                                        <td>Valve</td>
                                        <td>{{$car->valve}}</td>
                                    </tr>
                                    <tr>
                                        <td>Maximum speed</td>
                                        <td>{{$car->maximum_speed}}</td>
                                    </tr>
                                    <tr>
                                        <td>Body shop</td>
                                        <td>{{$car->body_shop}}</td>
                                    </tr>
                                    <tr>
                                        <td>Transmission</td>
                                        <td>{{$car->gearboxes}}</td>
                                    </tr>
                                    <tr>
                                        <td>Brake</td>
                                        <td>{{$car->brake}}</td>
                                    </tr>
                                    <tr>
                                        <td>Acceleration</td>
                                        <td>{{$car->acceleration}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </div>
<div>
            