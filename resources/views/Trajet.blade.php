<link href="css/style.css" rel="stylesheet">
<x-app-layout>

    @include('Menue')
    <div class="card mb-3">
        {{ $users->links('pagination::bootstrap-5') }}
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Adresse de Départ</th>
                        <th>Adresse d'arrivée</th>
                        <th>Modifier</th>
                        <th>Supprimer</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->depart }}</td>
                        <td>{{ $user->arrivee }}</td>
                        <td>
                            <a href="#" class="d-inline-block mr-2 btn btn-info"><i class="fa fa-edit"></i></a>
                        </td>
                        <td>
                            <form method="POST" action="{{ route('delete_destination', ['id' => $user]) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="d-inline-block btn btn-danger"
                                    onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce trajet ?')"><i
                                        class="fa fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <h5 class="card-title">Card title</h5>


            <form action="/trajet/traitement" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="input1" class="form-label">Départ</label>
                        <input type="text" class="form-control" id="input1" placeholder="Ajouter une adresse de départ"
                            required autocomplete="off" name="depart">
                    </div>
                    <div class="mb-3">
                        <label for="input2" class="form-label">Arrivée</label>
                        <input type="text" class="form-control" id="input2" placeholder="Ajouter une adresse d'arrivée"
                            required autocomplete="off" name="arrivee">
                    </div>
                </div>
                <input type="text" class="form-control" id="input3" name="client_id" hidden>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    <button class="btn btn-warning">Valider</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
@include('Menuef')