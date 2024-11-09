<form id="edit-form" action="{{ route($table . '.update', $item->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="datum">Datum:</label>
        <input type="text" name="datum" class="form-control" value="{{ old('datum', $item->datum) }}" required>
    </div>

    <div class="form-group">
        <label for="sadrzaj">Sadržaj:</label>
        <input type="text" name="sadrzaj" class="form-control" value="{{ old('sadrzaj', $item->sadrzaj) }}" required>
    </div>

    <button type="submit" class="btn btn-success">Sačuvaj</button>
    <a href="{{ route($table . '.index') }}" class="btn btn-secondary">Otkaži</a>
</form>
