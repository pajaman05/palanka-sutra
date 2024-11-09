<table class="table table-bordered table-striped table-hover table-responsive">
    <thead>
        <tr>
            <th>ID</th>
            <th>Naziv</th>
            <th>Opis</th>
            <th>Slika</th>
            <th>Actions</th> <!-- Optional: Add action buttons for edit/delete -->
        </tr>
    </thead>
    <tbody>
        @foreach($data as $tim)
            <tr>
                <td>{{ $tim->id }}</td>
                <td>{{ $tim->naziv }}</td>
                <td>{{ $tim->opis }}</td>
                <td>
                    @if($tim->slika)
                        <!-- provera da li je slika link ili fajl, lepa stvar -->
                        @if(Str::startsWith($tim->slika, ['http://', 'https://']))
                            <img src="{{ $tim->slika }}" alt="{{ $tim->naziv }}" width="100">
                        @else
                            <img src="{{ asset($tim->slika) }}" alt="{{ $tim->naziv }}" width="100">
                        @endif
                    @else
                        Nema slike
                    @endif
                </td>
                <td>
                     <button class="btn btn-sm edit-btn" 
                            data-table="tims" 
                            data-id="{{ $tim->id }}">
                        Edit
                    </button>

                    <form action="{{ route('tims.destroy', $tim->id) }}" method="POST" class="delete-form" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>


<a href="{{ route('tims.create') }}" class="btn btn-sm mb-3">Dodaj Novog Clana Tima</a>
