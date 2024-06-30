<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demande D'inscriptions</title>
</head>
<body>
    <h1>Liste des Demandes D'inscriptions</h1>

    @if (session('success'))
        <div>{{ session('success') }}</div>
    @endif

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
                <th>Lien</th>
                <th>Spécialité</th>
                <th>Matricule</th>
                <th>Téléphone</th>
                <th>Date de Création</th>
                <th>Date de Mise à Jour</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($demandes as $demande)
                <tr>
                    <td>{{ $demande->id }}</td>
                    <td>{{ $demande->nom }}</td>
                    <td>{{ $demande->prenom }}</td>
                    <td>{{ $demande->email }}</td>
                    <td>{{ $demande->lien }}</td>
                    <td>{{ $demande->specialite }}</td>
                    <td>{{ $demande->matricule }}</td>
                    <td>{{ $demande->tel }}</td>
                    <td>{{ $demande->created_at }}</td>
                    <td>{{ $demande->updated_at }}</td>
                    <td>
                        <form action="{{ route('demandinscreption.destroy', $demande->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                        <form action="{{ route('demand.admit', $demande->id) }}" method="POST" style="display:inline;">
                            @csrf
                            <button type="submit">Submit</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
