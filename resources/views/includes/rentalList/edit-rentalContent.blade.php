<form method="POST" action="{{ route('updated', ['id' => $rental->id]) }}">
    @csrf
    @method('PUT')


    <div class="form-group">
        <label for="effective_return_date">Date Effective de Retour :</label>
        <input type="date" name="effective_return_date" id="effective_return_date" class="form-control" required>
    </div>
    <div>
        <label for="observations">Observations</label>
        <textarea type="text" name="observations" value="{{ $data['observations'] }}"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Mettre à jour le statut</button>
</form>