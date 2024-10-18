<table class="table table-bordered table-striped table-hover table-responsive">
    <thead>
        <tr>
            <th>ID</th>
            <th>Datum</th>
            <th>Sadržaj</th>
            <th>Actions</th> <!-- Optional: Add action buttons for edit/delete -->
        </tr>
    </thead>
    <tbody>
        @foreach($data as $komentar)
            <tr>
                <td>{{ $komentar->id }}</td>
                <td>{{ $komentar->datum }}</td>
                <td>{{ $komentar->sadrzaj }}</td>
                <td>
                    <a href="{{ route('komentars.edit', $komentar->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('komentars.destroy', $komentar->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<a href="{{ route('komentars.create') }}" class="btn btn-success mb-3">Dodaj Nov Komentar</a>
