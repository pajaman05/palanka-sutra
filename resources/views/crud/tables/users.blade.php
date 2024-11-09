<table class="table table-bordered table-striped table-hover table-responsive">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Tip</th>
            <th>Remember Token</th>
            <th>Actions</th> <!-- Optional: Add action buttons for edit/delete -->
        </tr>
    </thead>
    <tbody>
        @foreach($data as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->tip }}</td>
                <td>{{ $user->remember_token ? 'True' : 'False' }}</td>
                <td>
                    <button class="btn btn-sm edit-btn" 
                            data-table="users" 
                            data-id="{{ $user->id }}">
                        Edit
                    </button>


                    <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="delete-form" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>


<a href="{{ route('users.create') }}" class="btn btn-sm mb-3">Dodaj Novog Korisnika</a>
