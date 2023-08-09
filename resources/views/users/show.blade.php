<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@section('content')
<h1>Détails des produits {{ $user->nom }}</h1>
    
    <p>Nom: {{ $user->nom }}</p>
    <p>Catégories: {{ $user->categories }}</p>
    <p>Nombre: {{ $user->nombre }}</p>
    <p>Prix: {{ $user->prix }}</p>

    <!-- Ajoutez ici d'autres détails de l'utilisateur que vous souhaitez afficher -->

    <a href="{{ route('users.edit', $user) }}">Modifier</a>
    <a href="{{ route('index') }}">Retour à la liste</a>
@endsection 
</body>
</html>