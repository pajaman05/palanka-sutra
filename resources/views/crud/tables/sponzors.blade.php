<table class="table table-bordered table-striped table-hover table-responsive">
    <thead>
        <tr>
            <th>ID</th>
            <th>Naziv</th>
            <th>Opis</th>
            <th>Slika</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $sponzor)
            <tr>
                <td>{{ $sponzor->id }}</td>
                <td>{{ $sponzor->naziv }}</td>
                <td>{{ $sponzor->opis }}</td>
                <td>
                    @if($sponzor->slika)
                        <img src="{{ asset('storage/' . $sponzor->slika) }}" alt="{{ $sponzor->naziv }}" width="100">
                    @else
                        Nema slike
                    @endif
                </td>
                <td>
                    <a href="{{ route('sponzors.edit', $sponzor->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('sponzors.destroy', $sponzor->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>


<a href="{{ route('sponzors.create') }}" class="btn btn-success mb-3">Dodaj Novog Sponzora</a>
