<form id="edit-form" action="{{ route($table . '.update', $item->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="naziv">Naziv:</label>
        <input type="text" name="naziv" class="form-control" value="{{ old('naziv', $item->naziv) }}" required>
    </div>

    <div class="form-group">
        <label for="slug">Slug:</label>
        <input type="text" name="slug" class="form-control" value="{{ old('slug', $item->slug) }}" required>
    </div>

    <div class="form-group">
        <label for="opis">Opis:</label>
        <textarea name="opis" class="form-control">{{ old('opis', $item->opis) }}</textarea>
    </div>

    <button type="submit" class="btn btn-success">Sačuvaj</button>
    <a href="{{ route($table . '.index') }}" class="btn btn-secondary">Otkaži</a>
</form>
