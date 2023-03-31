<link href="css/style.css" rel="stylesheet">
<x-app-layout>


    @include('Menue')

    <div class="card mb-3">
        {{ $users->links('pagination::bootstrap-5') }}
        <div class="card-body">
            <table class="table tab table-hover">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Editer</th>
                        <th>Suprimer</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name}}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->role}}</td>
                        <td>
                            <a href="/user/{{ $user->id }}/modifier" class="d-inline-block mr-2 btn btn-info"><i
                                    class="fa fa-edit"></i></a>
                        </td>

                        <td>
                            <form method="POST" action="{{ route('delete_user', ['id' => $user]) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="d-inline-block btn btn-danger"
                                    onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce client ?')"><i
                                        class="fa fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>

    </div>
</x-app-layout>
@include('Menuef')