<div class="container">
    <h1>Liste des témoignages</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nom</th>
                <th scope="col">Témoignage</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($temoignages as $temoignage)
                <tr>
                    <td>{{ $temoignage->nom }}</td>
                    <td>{{ $temoignage->message }}</td>
                    <td>
                        <form action="{{ route('temoignages.delete', $temoignage->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('temoignages.create') }}" class="btn btn-primary">Ajouter un témoignage</a>
  </div>