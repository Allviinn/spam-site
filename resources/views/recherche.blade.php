<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="{{URL::to('css/styleRecherche.css')}}">

  <title>Résultat de votre recherche</title>
</head>
<body>

@if (count($numeros) >= 1)

  @foreach($numeros as $key => $numero)
    <p>{{$numero->numero}}</p>
  @endforeach

  @foreach($commentaires as $key => $commentaire)
    <p>{{$commentaire->commentaire}}</p>
  @endforeach

@else

    Pas de résultats
    
@endif

</body>
</html>
