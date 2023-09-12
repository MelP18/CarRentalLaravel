<a href="">Ajouter une catégorie</a>

<form method="POST" action="{{ route('categoryStore') }}" style="border-radius:10px;" class="bg-dark p-5 text-white" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Nom</label>
        <input name="name" type="text" class="form-control" id="">
    </div>
    <button type="submit" class="mt-3 btn btn-primary">Enregistrer</button>
</form>

@foreach($category as $item)
    {{ $item->name }}
@endforeach