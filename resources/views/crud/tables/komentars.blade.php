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
                    <button class="btn btn-sm edit-btn" 
                            data-table="komentars" 
                            data-id="{{ $komentar->id }}">
                        Edit
                    </button>


                    <form action="{{ route('komentars.destroy', $komentar->id) }}" method="POST" class="delete-form" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm">Delete</button>
                    </form>
                    

                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<a href="{{ route('komentars.create') }}" class="btn btn-sm mb-3">Dodaj Nov Komentar</a>
