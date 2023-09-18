
@if (@isset($ids))
<div class="container">
    <div class="main">
        <div class="main__block">
            <div class="main__title">
                <h2>MODIFY CUSTOMER</h2>
                <hr>
            </div>
            <div class="table__btn"> 
                <div class="add">
                    <a href="{{ route('showCustomerLists') }}">Customer list</a>
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
            <div class="add">
                <form method="POST" action="{{ route('customerUpdate', ['ids' => $ids]) }}"  enctype="multipart/form-data">
                    @csrf
                    <div class="field__form">
    
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Customer picture</label>
                            <input class="form-control" name="photo" type="file" id="formFile">
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <label for="name">Firstname</label>
                                <input  value="{{ $item->prenom }}" type="text" name="nom" class="form-control p-2" id="floatingInput"
                                    placeholder="Name">
                            </div>
                            <div class="col ">
                                <label for="">Surname</label>
                                <input  value="{{ $item->nom }}" type="text" name="prenom" class="form-control p-2" id="floatingPassword"
                                    placeholder="Surname">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="floatingPassword">Email</label>
                            <input value="{{ $item->email }}" type="email" name="email" class="form-control p-2" id="floatingPassword"
                                placeholder="Email">
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <label for="phone number">Phone Number</label>
                                <input value="{{ $item->tel }}"  type="number" name="tel" class="form-control p-2" id="floatingInput"
                                    placeholder="Tel">
                            </div>
                            <div class="col">
                                <label for="address"><Address></Address></label>
                                <input value="{{ $item->adresse }}"  type="text" name="adresse" class="form-control p-2" id="floatingPassword"
                                    placeholder="Adresse">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="">CNI</label>
                            <input value="{{ $item->cni }}" type="text" name="cni" class="form-control p-2" id="floatingPassword"
                                placeholder="Adresse">
                        </div>
                    </div>
                    <div class="btn__form">
                        <button type="submit"> Save </button>
                    </div>
                </form>
            </div>
           
        </div>
    </div>
</div>
    
@elseif(@isset($id))
<div class="container">
    <div class="main">
        <div class="main__block">
            <div class="main__title">
                <h2>MODIFY CUSTOMER</h2>
                <hr>
            </div>
            <div class="table__btn"> 
                <div class="add">
                    <a href="{{ route('showCustomerLists') }}">Customer list</a>
                </div> 
            </div>
            <div class="customer">
                <div class="customer__img">
                    <img 
                        @if (!empty($customer['photo'])) src="{{ asset($customer['photo']) }}"  
                        @else src="" @endif alt="">
                </div>
                <div class="customer__detail">
                    <ul class="customer__detail__list">
                        <li class="customer__detail__list__item"> 
                            <strong>Name : </strong>
                            <p> {{ $customer['nom'] }} </p>
                        </li>
                        <li class="customer__detail__list__item">
                            <strong>Email : </strong>
                            <p>{{ $customer['email'] }}</p>
                        </li>
                        <li class="customer__detail__list__item">
                            <strong>CNI : </strong>
                            <p>{{ $customer['cni'] }}</p>
                        </li>
                        <li class="customer__detail__list__item">
                            <strong>Phone : </strong>
                            <p>{{ $customer['tel'] }}</p>
                        </li>
                        <li class="customer__detail__list__item">
                            <strong>Address : </strong>
                            <p>{{ $customer['adresse'] }}</p>
                            </li>
                    </ul>
                
                </div>

            </div>
        </div>
    </div>
</div>
    
   {{--  <div class="card-body text-center">
        
        <a @if ($id >1)
        href="{{route("customerProfil",['id'=>$customer['id']- 1 ])}}" 
        @else
        href="{{route("showCustomerLists")}}" 
        @endif class="btn btn-primary m-4">Retour</a>
        
        <a @if ($id < sizeof($lenght))
        href="{{route("customerProfil",['id'=>$customer['id']+ 1 ])}}" 
        @else
        href="{{route("showCustomerLists")}}"
        @endif  class="btn btn-primary m-4">Suivant</a>
            
    
       
    </div> --}}
    
@else

<div class="container">
    <div class="main">
        <div class="main__block">
            <div class="main__title">
                <h2>ADD CUSTOMER</h2>
                <hr>
            </div>
            <div class="table__btn"> 
                <div class="add">
                    <a href="{{ route('showCustomerLists') }}">Customer list</a>
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

            <div class="add">
                <form action="{{ route('storecustomer') }}" method="POST" enctype="multipart/form-data">
                    
                    @csrf

                    <div class="field__form">

                        <div class="mb-3">
                            <label for="formFile" class="form-label">Customer picture</label>
                            <input class="form-control" name="photo" type="file" id="formFile">
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <label for="name">Firstname</label>
                                <input type="text" name="nom" class="form-control p-2" id="floatingInput"
                                    placeholder="Name">
                            </div>
                            <div class="col ">
                                <label for="">Surname</label>
                                <input type="text" name="prenom" class="form-control p-2" id="floatingPassword"
                                    placeholder="Surname">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="floatingPassword">Email</label>
                            <input type="email" name="email" class="form-control p-2" id="floatingPassword"
                                placeholder="Email">
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <label for="phone number">Phone Number</label>
                                <input type="number" name="tel" class="form-control p-2" id="floatingInput"
                                    placeholder="Tel">
                            </div>
                            <div class="col">
                                <label for="address">Adresse</label>
                                <input type="text" name="adresse" class="form-control p-2" id="floatingPassword"
                                    placeholder="Adresse">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="">CNI</label>
                            <input type="text" name="cni" class="form-control p-2" id="floatingPassword"
                                placeholder="Adresse">
                        </div>
                    </div>
                    <div class="btn__form">
                        <button type="submit"> Save </button>
                    </div>

                </form>
            </div>

@endif
