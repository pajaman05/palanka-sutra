<form id="edit-form" action="{{ route($table . '.update', $item->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="name">Korisnicko ime:</label>
        <input type="text" name="name" class="form-control" value="{{ old('name', $item->name) }}" required>
    </div>

    <div class="form-group">
        <label for="email">Mejl:</label>
        <input type="email" name="email" class="form-control" value="{{ old('email', $item->email) }}" required>
    </div>

    <div class="form-group">
        <label for="tip">Tip:</label>
        <select name="tip" class="form-control">
            <option value="admin" {{ $item->tip == 'admin' ? 'selected' : '' }}>Admin</option>
            <option value="korisnik" {{ $item->tip == 'korisnik' ? 'selected' : '' }}>Korisnik</option>
            <option value="urednik" {{ $item->tip =='urednik' ? 'selected' : '' }}>Urednik</option>
        </select>
        </select>
    </div>



    <div class="form-group">
        <label for="remember_token">Token pamćenja:</label>
        <select name="remember_token" class="form-control">
            <option value="1" {{ $item->remember_token ? 'selected' : '' }}>True</option>
            <option value="0" {{ !$item->remember_token ? 'selected' : '' }}>False</option>
        </select>
    </div>
    

    <button type="submit" class="btn btn-success">Sačuvaj</button>
    <a href="{{ route($table . '.index') }}" class="btn btn-secondary">Otkaži</a>
</form>
