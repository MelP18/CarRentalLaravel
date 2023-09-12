<div>
    @if ($categories->count() == 0)
        <form method="POST" action="">
            @csrf
            <div>
                <label for="name">Categorie</label>
                <input type="text">
            </div>
        </form>
    @elseif($categories->count() != 0)
        <form method="POST" action="">
            @csrf
            <div>
                <label for="name">Marque</label>
                <input type="text">
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
        </form>
    @elseif($categories->count() != 0 && $brands->count() != 0)

        <form method="POST" action="">
            @csrf
            <div>
                <label for="name">Modèle</label>
                <input type="text">
            </div>
            <div>
                <label for="year">Année</label>
                <input type="text">
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
        </form>

    @elseif($categories->count() != 0 && $brands->count() != 0 && $modals->count() != 0)

    <form method="POST" action="">
        <p>Voiture</p>
    </form>

    @endif
</div>
