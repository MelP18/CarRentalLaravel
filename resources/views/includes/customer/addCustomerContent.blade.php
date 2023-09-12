<div style="width: 60%" class="container">


<form action="{{route('storecustomer')}}" method="POST" enctype="multipart/form-data" class=" d-flex flex-column justify-content-center" >
    @csrf 

<div class="form-floating mb-3">
    <input type="text" name="nom"  class="form-control" id="floatingInput" placeholder="Name">
    <label for="floatingInput">Name</label>
  </div>
  <div class="form-floating mb-3">
    <input type="text" name="prenom"  class="form-control" id="floatingPassword" placeholder="Surname">
    <label for="floatingPassword">Surname</label>
  </div>
  <div class="form-floating mb-3">
    <input type="number" name="tel"  class="form-control" id="floatingInput" placeholder="Tel">
    <label for="floatingInput">Phone Number</label>
  </div>
  <div class="form-floating mb-3">
    <input type="email" name="email" class="form-control" id="floatingPassword" placeholder="Email">
    <label for="floatingPassword">Email</label>
  </div>
  <div class="form-floating mb-3">
    <input type="text" name="adresse"  class="form-control" id="floatingPassword" placeholder="Adresse">
    <label for="floatingPassword">Adresse</label>
  </div>
  <div class="form-floating mb-3">
    <input type="text"  name="cni" class="form-control" id="floatingPassword" placeholder="Adresse">
    <label for="floatingPassword">CNI</label>
  </div>
  <div class="mb-3">
    <label for="formFile" class="form-label">Image</label>
    <input class="form-control" name="photo" type="file" id="formFile">
  </div>
  <button  style="width: 30%" class="btn btn-primary m-auto" type="submit">
    Ajouter
  </button>
</form>
</div>