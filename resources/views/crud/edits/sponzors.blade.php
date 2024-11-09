<form id="edit-form" action="{{ route($table . '.update', $item->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="naziv">Naziv:</label>
        <input type="text" name="naziv" class="form-control" value="{{ old('naziv', $item->naziv) }}" required>
    </div>

    <div class="form-group">
        <label for="opis">Opis:</label>
        <input type="text" name="opis" class="form-control" value="{{ old('opis', $item->opis) }}" required>
    </div>


    <div class="form-group">
        <label for="slika">Trenutna Slika:</label><br>
        @if($item->slika)
            <img src="{{ $item->slika }}" alt="{{ $item->naziv }}" width="150"><br><br>
        @else
            <p>Nema slike</p>
        @endif
        <label for="slika">Izmeni Slika:</label>
        <input type="file" name="slika" class="form-control">
    </div>

    
    <button type="submit" class="btn btn-success">Sačuvaj</button>
    <a href="{{ route($table . '.index') }}" class="btn btn-secondary">Otkaži</a>
</form>
