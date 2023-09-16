<div>
    <h3> AJOUTER UNE VOITURE</h3>

    @if ($categories->count() == 0)
        <form method="POST" action="{{route('sendCategoryCar')}}">
            @csrf
            <div>
                <h5>AJOUTER UNE CATEGORIE</h5>
            </div>
            <div>
                <label for="name">Categorie</label>
                <input type="text" name="name">
                <button>Enregistrer</button>
            </div>
        </form>

    @elseif($categories->count() != 0)
    
        <form method="POST" action="{{route('sendBrandCar')}}">

            @csrf
            <div>
                <h5>AJOUTER UNE MARQUE</h5>
            </div>
            <div>
                <label for="name">Marque</label>
                <input type="text" name="name">
            </div>
            <div>
                <label for="name">Catégorie</label>
                <select name="category_id" id="">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <button>Enregistrer</button>
        </form>
    
    @endif

    @if($brands->count() != 0)

        <form method="POST" action="{{route('sendModalCar')}}">
            @csrf
            <div>
                <h5>AJOUTER UN MODELE</h5>
            </div>
            <div>
                <label for="name">Modèle</label>
                <input type="text" name="model_name">
            </div>
            <div>
                <label for="year">Année</label>
                <input type="text" name="year">
            </div>
            <div>
                <label for="year">Marque</label>
                <select name="brand_id" id="">
                    @foreach ($brands as $brand)

                        <option value="{{ $brand->id }}">
                            {{ $brand->name }}
                        </option>

                    @endforeach
                </select>
            </div>
            <button>Enregistrer</button>
        </form>

    @endif

    @if($modals->count() != 0)

        <form method="POST" action="{{route('sendCarAdd')}}" enctype="multipart/form-data">
            @csrf
            <div>
                <h5>AJOUTER UNE VOITURE</h5>
            </div>
            <div>
                <label for="year">Images</label>
                <input type="file" name="image[]" multiple placeholder="La première image séléctionnée sera l'image principale">
            </div>
            <div>
                <label for="year">Modèle</label>
                <select name="modal_id" id="">
                    @if(isset($modals))

                        @foreach ($modals as $modal)
                        <option value="{{ $modal->id }}">
                            {{$modal->model_name.' '.$modal->year}}
                        </option>

                        @endforeach
                    @endif
                </select> 
            </div>
            <div>
                <label for="year">Nom de la Voiture</label>
                <input type="text" name="car_name" value="{{$modal->brandContent->name.' '.$modal->model_name.' '.$modal->year}}">
            </div>
            <div>
                <label for="year">Boîte de vitesse</label>
                <input type="text" name="gearboxes" value="{{old('gearboxes')}}">
            </div>
            <div>
                <label for="year">Puissance</label>
                <input type="number" name="power" value="{{old('power')}}">
            </div>
            <div>
                <label for="year">Nombre de Porte</label>
                <input type="number" name="number_door" value="{{old('number_door')}}">
            </div>
            <div>
                <label for="year">Carburant</label>
                <input type="text" name="fuel" value="{{old('fuel')}}">
            </div>
            <div>
                <label for="year">Nombre de cylindre</label>
                <input type="number" name="number_cylinder" value="{{old('number_cylinder')}}">
            </div>
            <div>
                <label for="year">Soupage</label>
                <input type="number" name="valve" value="{{old('valve')}}">
            </div>
            <div>
                <label for="year">Vitesse maximale</label>
                <input type="number" name="maximum_speed" value="{{old('maximum_speed')}}">
            </div>
            <div>
                <label for="year">Carosserie</label>
                <input type="text" name="body_shop" value="{{old('body_shop')}}">
            </div>
            <div>
                <label for="year">Transmission</label>
                <input type="text" name="transmission" value="{{old('transmission')}}">
            </div>
            <div>
                <label for="year">Frein</label>
                <input type="text" name="brake" value="{{old('brake')}}">
            </div>
            <div>
                <label for="year">Accélération</label>
                <input type="number" name="acceleration" value="{{old('acceleration')}}">
            </div>
            <div>
                <label for="year">Couleur</label>
                <input type="text" name="color" value="{{old('color')}}">
            </div>
            <button>Enregistrer</button>
        </form>

    @endif
</div>
