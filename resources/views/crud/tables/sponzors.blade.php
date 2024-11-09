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
                        <!-- provera da li je slika link ili fajl, lepa stvar -->
                        @if(Str::startsWith($sponzor->slika, ['http://', 'https://']))
                            <img src="{{ $sponzor->slika }}" alt="{{ $sponzor->naziv }}" width="100">
                        @else
                            <img src="{{ asset('storage/' . $sponzor->slika) }}" alt="{{ $sponzor->naziv }}" width="100">
                        @endif
                    @else
                        Nema slike
                    @endif
                </td>
                <td>
                    
                    <button class="btn btn-sm edit-btn" 
                            data-table="sponzors" 
                            data-id="{{ $sponzor->id }}">
                        Edit
                    </button>


                    <form action="{{ route('sponzors.destroy', $sponzor->id) }}" method="POST" class="delete-form" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm">Delete</button>
                    </form>


                </td>
            </tr>
        @endforeach
    </tbody>
</table>


<a href="{{ route('sponzors.create') }}" class="btn btn-sm mb-3">Dodaj Novog Sponzora</a>
