
@if (@isset($ids))
    <form  class="container mt-5" style="width: 45%" action="{{ route('customerUpdate', ['ids' => $ids]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class=" d-flex flex-column justify-content-center">

            <div class="form-floating mb-3">
                <input value="{{ $item->nom }}" type="text" name="nom" class="form-control"
                    id="floatingInput" placeholder="Name">
                <label for="floatingInput">Name</label>
            </div>
            <div class="form-floating mb-3">
                <input value="{{ $item->prenom }}" type="text" name="prenom" class="form-control"
                    id="floatingPassword" placeholder="Surname">
                <label for="floatingPassword">Surname</label>
            </div>
            <div class="form-floating mb-3">
                <input value="{{ $item->tel }}" type="number" name="tel" class="form-control" id="floatingInput"
                    placeholder="Tel">
                <label for="floatingInput">Phone Number</label>
            </div>
            <div class="form-floating mb-3">
                <input value="{{ $item->email }}" type="email" name="email" class="form-control"
                    id="floatingPassword" placeholder="Email">
                <label for="floatingPassword">Email</label>
            </div>
            <div class="form-floating mb-3">
                <input value="{{ $item->adresse }}" type="text" name="adresse" class="form-control"
                    id="floatingPassword" placeholder="Adresse">
                <label for="floatingPassword">Adresse</label>
            </div>
            <div class="form-floating mb-3">
                <input value="{{ $item->cni }}" type="text" name="cni" class="form-control"
                    id="floatingPassword" placeholder="Adresse">
                <label for="floatingPassword">CNI</label>
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Image</label>
                <input class="form-control" name="photo" type="file" id="formFile">
            </div>
            <button style="width: 30%" class="btn btn-primary m-auto" type="submit">
                Ajouter
            </button>
          </div>
    </form>
    
@elseif(@isset($id))
    <div class="card m-auto d-flex justify-content-center mt-5" style="width: 30rem;">
        <div class="d-flex justify-content-center">
            <img style="width: 300px ;
   Height:300px;box-shadow: 2px 1px 2px 1px;border-radius:50%"
                @if (!empty($customer['photo'])) src="{{ asset($customer['photo']) }}"  
   @else src="" @endif
                alt="">
        </div>

        <div class="card-body ">
            <h3 class="card-title text-center">customer</h3>
            <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos error distinctio tenetur
                porro, blanditiis accusamus eveniet? Quia fugit totam nostrum, ratione voluptatum magnam sint asperiores
                esse odio ex architecto quam.</p>

        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Nom :{{ $customer['nom'] }}</li>
            <li class="list-group-item">Prénom:{{ $customer['prenom'] }}</li>
            <li class="list-group-item">Email: {{ $customer['email'] }}</li>
            <li class="list-group-item">CNI : {{ $customer['cni'] }}</li>
            <li class="list-group-item">Téléphone : {{ $customer['tel'] }}</li>
            <li class="list-group-item">Adresse: {{ $customer['adresse'] }}</li>
        </ul>
       
    </div>
    <div class="card-body text-center">
        
        <a 
            
      
        @if ($id >1)
        href="{{route("customerProfil",['id'=>$customer['id']- 1 ])}}" 
        @else
        href="{{route("showCustomerLists")}}" 
         
        @endif class="btn btn-primary m-4">Retour</a>
        <a 
        @if ($id < sizeof($lenght))
        href="{{route("customerProfil",['id'=>$customer['id']+ 1 ])}}" 
        @else
        href="{{route("showCustomerLists")}}"
        @endif  class="btn btn-primary m-4">Suivant</a>
            
    
       
    </div>
    </div>
    
 
 

@else
    <div style="width: 60%; height :800px" class="container mt-5 ">

        <form action="{{ route('storecustomer') }}" method="POST" enctype="multipart/form-data"
            class=" d-flex flex-column ">
            @csrf

            <div class="form-floating mb-3">
                <input  value="{{old('value')}}" type="text" name="nom" class="form-control" id="floatingInput" placeholder="Name">
                <label for="floatingInput">Name</label>
            </div>
            <div class="form-floating mb-3">
                <input value="{{old('value')}}" type="text" name="prenom" class="form-control" id="floatingPassword" placeholder="Surname">
                <label for="floatingPassword">Surname</label>
            </div>
            <div class="form-floating mb-3">
                <input value="{{old('value')}}" type="number" name="tel" class="form-control" id="floatingInput" placeholder="Tel">
                <label for="floatingInput">Phone Number</label>
            </div>
            <div class="form-floating mb-3">
                <input value="{{old('value')}}" type="email" name="email" class="form-control" id="floatingPassword"
                    placeholder="Email">
                <label for="floatingPassword">Email</label>
            </div>
            <div class="form-floating mb-3">
                <input value="{{old('value')}}" type="text" name="adresse" class="form-control" id="floatingPassword"
                    placeholder="Adresse">
                <label for="floatingPassword">Adresse</label>
            </div>
            <div class="form-floating mb-3">
                <input value="{{(old('value'))}}" type="text" name="cni" class="form-control" id="floatingPassword"
                    placeholder="Adresse">
                <label for="floatingPassword">CNI</label>
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Image</label>
                <input class="form-control" name="photo" type="file" id="formFile">
            </div>
            <button style="width: 30%;
             cursor: pointer;
    padding: 8px 20px;
    background-color: var(--white-color);
    border: none;
    margin:15px 0;
    border-radius: 5px;
    color: var(--orange-color);
    font-weight: bold; 
    box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;" class="btn m-auto" type="submit">
                Ajouter
            </button>
        </form>
    </div>
@endif
