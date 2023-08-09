<!-- resources/views/home.blade.php -->

<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Page d'accueil</title>
</head>
<body>
@section('content')
<h1>Liste des utilisateurs</h1>

<table>
    <thead>
        <tr>
            <th>Nom</th>
            <th>categories</th>
            <th>nombre</th>
            <th>prix</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->nom }}</td>
                <td>{{ $user->categories }}</td>
                <td>{{ $user->nombre }}</td>
                <td>{{ $user->prix }}</td>
                <td>
                    <a href="{{ route('users.edit', $user) }}">Modifier</a>
                    <a href="{{ route('users.show', $user) }}">Détails</a>
                   
                    <form action="{{ route('users.destroy', $user) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')">Supprimer</button>
                    </form>
                    
                    
                </td>
               
            </tr>
        @endforeach
    </tbody>
</table>

<a href="{{ route('users.create') }}">Ajouter un article</a>
@endsection
<!-- 
    <div class="alert alert-success">
        Bienvenue, Mr {{ Auth::user()->name}} -->
    </div>
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit">Se déconnecter</button>
    </form>
    


</body>
</html>
