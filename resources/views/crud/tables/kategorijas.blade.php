<table class="table table-bordered table-striped table-hover table-responsive">
    <thead>
        <tr>
            <th>ID</th>
            <th>Naziv</th>
            <th>Slug</th>
            <th>Opis</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $kategorija)
            <tr>
                <td>{{ $kategorija->id }}</td>
                <td>{{ $kategorija->naziv }}</td>
                <td>{{ $kategorija->slug }}</td>
                <td>{{ $kategorija->opis }}</td>
                <td>

                    <button class="btn btn-sm edit-btn" 
                            data-table="kategorijas" 
                            data-id="{{ $kategorija->id }}">
                        Edit
                    </button>
                    
                    
                    <form action="{{ route('kategorijas.destroy', $kategorija->id) }}" method="POST" class="delete-form" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm">Delete</button>
                    </form>
                    

                </td>
            </tr>
        @endforeach
    </tbody>
</table>



<a href="{{ route('kategorijas.create') }}" class="btn btn-sm mb-3">Dodaj Novu Kategoriju</a>
