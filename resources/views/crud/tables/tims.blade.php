<table class="table table-bordered table-striped table-hover table-responsive">
    <thead>
        <tr>
            <th>ID</th>
            <th>Opis</th>
            <th>Slika</th>
            <th>Actions</th> <!-- Optional: Add action buttons for edit/delete -->
        </tr>
    </thead>
    <tbody>
        @foreach($data as $tim)
            <tr>
                <td>{{ $tim->id }}</td>
                <td>{{ $tim->opis }}</td>
                <td>
                    @if($tim->slika)
                        <img src="{{ asset('storage/' . $tim->slika) }}" alt="Slika tima" style="width: 100px; height: auto;">
                    @else
                        No image
                    @endif
                </td>
                <td>
                    <a href="{{ route('tims.edit', $tim->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('tims.destroy', $tim->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>


<a href="{{ route('tims.create') }}" class="btn btn-success mb-3">Dodaj Novog Clana Tima</a>
