<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="{{URL::to('css/styleRecherche.css')}}">
  <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">

  <title>Résultat de votre recherche</title>
</head>
<body>

  <section>

    <h4>Résultat de votre recherche</h4>

    @if (count($numeros) >= 1)
      <article class="numero">
        @foreach($numeros as $key => $numero)
          <div class="haut_numero">
            <p><strong class="numeroTel">{{$numero->numero}}</strong></p>
            <a href="/" class="lien">Retour à l'accueil</a>
          </div>

          <div class="bas_numero">
            <p class="type">{{$numero->type}}</p>
            <p><em class="nbreCommentaires">0</em> commentaires</p>
          </div>

        @endforeach
      </article>

      @foreach($commentaires as $key => $commentaire)
        <div class="commentaire">

            <p><strong class="pseudo">{{$commentaire->pseudoAuteur}}</strong> a écrit :</p>
            <p class="texteCommentaire">{{$commentaire->commentaire}}</p>
            <p class="date">Le {{$commentaire->date_commentaire}}</p>
            <a href="#" class="lien signalCommentaire" data-id="{{$commentaire->id}}">Signaler ce commentaire</a>
        </div>
      @endforeach
        <div class="commentaire">

            <a href="ajoutNumero" class="lien signalCommentaire">Ajouter un commentaire</a>
        </div>

    @else
      <div class="commentaire">
        <p class="aucunCommentaire">Aucun numéro ne correspond à votre recherche. Pour insérer ce numéro, <a href="ajoutNumero" class="lien">cliquez ici</a></p>
      </div>

    @endif

  </section>

</body>
</html>
