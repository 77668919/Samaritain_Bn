<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Liste des articles</title>
</head>
<body>
    <div class="container mt-4">
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-danger">Se déconnecter</button>
        </form>

        <div class="alert alert-success">
            @foreach($users as $user)
                {{ $user->name }}
            @endforeach
        </div>

        <h1>Liste des articles</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>Nom de l'article</th>
                    <th>categories</th>
                    <th>prix</th>
                    <th>nombre</th>
                    <th>Photo</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->nom }}</td>
                        <td>{{ $user->categories }}</td>
                        <td>{{ $user->prix }}</td>
                        <td>{{ $user->nombre }}</td>
                        <td>
                            @if ($user->photo)
                                <img src="{{ asset('storage/' . $user->photo) }}" alt="Photo" class="img-thumbnail" width="100">
                            @else
                                N/A
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('users.edit', $user) }}" class="btn btn-primary">Modifier</a>
                             <a href="{{ route('users.show', $user) }}">Détails</a>
                            <form action="{{ route('users.destroy', $user) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <a href="{{ route('users.create') }}" class="btn btn-success">Ajouter un article</a>
        <a href="{{ route('users.gerant') }}" class="btn btn-success">Ajouter un gerant</a>
    </div>
</body>
</html>
