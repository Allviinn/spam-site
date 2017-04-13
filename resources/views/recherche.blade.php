<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="{{URL::to('css/styleRecherche.css')}}">
  <link rel="stylesheet" href="{{URL::to('css/formSignal.css')}}">
  <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
  <script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
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
            <p>
              <em class="nbreCommentaires">{{$count}}</em>
            @if (count($commentaires) > 1)
            commentaires</p>
            @else
            commentaire</p>
            @endif
          </div>

        @endforeach
      </article>

      @foreach($commentaires as $key => $commentaire)
        <div class="commentaire">

            <p><strong class="pseudo">{{$commentaire->pseudoAuteur}}</strong> a écrit :</p>
            <p class="texteCommentaire">{{$commentaire->commentaire}}</p>
            <p class="date">Le {{$commentaire->date_commentaire}}</p>
            <a href="" data-id="{{$commentaire->id}}" class="lien signalCommentaire">Signaler ce commentaire</a>
        </div>
      @endforeach
        <div class="commentaire">

            <a href="ajoutNumero" class="lien ajoutCom">Ajouter un commentaire</a>
        </div>

    @else
      <div class="commentaire">
        <p class="aucunCommentaire">Aucun numéro ne correspond à votre recherche. Pour insérer ce numéro, <a href="ajoutNumero" class="lien">cliquez ici</a></p>
      </div>

    @endif

  </section>


<div id="divFormSignal">

              <h5> Pour quelle raisons souhaitez-vous signaler ce commentaires </h5>

  <form id="formSignal" action="insertSignal" method="post">


    <input type="radio" name="signaler" class="radioSignal" value="Contenu offansant">Contenu offansant<br>
    <input type="radio" name="signaler" class="radioSignal" value="Info fausse">info fausse<br>
    <input type="radio" name="signaler" class="radioSignal" value="Présence d'info privées">Présence d'info privées<br>
    <input type="radio" name="signaler" class="radioSignal" value="Autre raisons">Autre raisons<br>
<br><br>
    <textarea type="text"  name="textAutreRaison" id="textAutreRaison" placeholder="Autre raisons"> </textarea>
<br><br>
    <input type="hidden" id="token1" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" name="idCom" value="" id="idCom">
    <input type="submit" value="Signaler" id="signaler">
</form>

</div>

<script type="text/javascript" src="{{URL::to('js/ajaxSignalement.js')}}"></script>

</body>
</html>
