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
  <title>Spaminator</title>
  <link rel="icon" type="image/png" href="graphisme/graphismes/images/icone-logo-rouge.png" />

</head>
<body>

  <section>

    <h4>Résultat de votre recherche</h4>

    @if (count($numeros) >= 1)
      <article class="numero">
        @foreach($numeros as $key => $numero)
          <div class="haut_numero">
            <p>
              <strong class="numeroTel">
                +{{$numero->prefix}} {{$numero->numero}}
              </strong>
            </p>
            <a href="/spam_site/public/" class="lien">Retour à l'accueil</a>
          </div>

          <div class="bas_numero">
            <p class="type">
              Pays : {{$pays}}
            </p>
            <p class="type">
              Type : {{$numero->type}}
            </p>

            <p>
              <em class="nbreCommentaires">{{$count}}</em>
              @if (count($commentaires) > 1)
              commentaires
              @else
              commentaire
              @endif
            </p>
          </div>

        @endforeach
      </article>

      @foreach($commentaires as $key => $commentaire)
        <div class="commentaire">

            <p>
              <strong class="pseudo">
                {{$commentaire->pseudoAuteur}}
              </strong>
            a écrit :</p>

            <p class="texteCommentaire">
              {{$commentaire->commentaire}}
            </p>

            <p class="date">
              Le {{$commentaire->date_commentaire}}
            </p>

            <a href="" data-id="{{$commentaire->id}}" class="lien signalCommentaire">
              Signaler ce commentaire
            </a>
        </div>
      @endforeach

        <div class="commentaire">
            <a href="ajoutNumero" class="lien ajoutCom">
              Ajouter un commentaire
            </a>
        </div>

    @else
      <div class="commentaire">
        <p class="aucunCommentaire">
          Aucun numéro ne correspond à votre recherche. Pour insérer ce numéro, <a href="ajoutNumero" class="lien">cliquez ici</a>
        </p>
      </div>

    @endif

  </section>

<!-- FORMULAIRE DE SIGNALEMENT D'UN COMMENTAIRE ABUSIF -->
<div id="modalForm">
    <div id="divFormSignal">

        <h5> Pour quelle raisons souhaitez-vous signaler ce commentaire </h5>

        <a href="" id="croixSignal">X</a>
        <form id="formSignal">

            <div id="css">
                <div><input type="radio" name="signaler" class="radioSignal" value="Contenu offansant">Contenu offensant</div><br>
                <div><input type="radio" name="signaler" class="radioSignal" value="Info fausse">Infos fausses</div><br>
                <div><input type="radio" name="signaler" class="radioSignal" value="Présence d'info privées">Présence d'infos   privées   </div  ><br>
                <div><input type="radio" name="signaler" class="radioSignal" value="Autre raisons">Autres raisons</div><br>
            </div>

            <textarea type="text"  name="textAutreRaison" id="textAutreRaison" placeholder="Autre raisons"> </textarea>
                 <br>
            <input type="hidden" name="_token" id="tokenRecherche" value="{{ csrf_token() }}">
            <input type="hidden" name="idCom" value="" id="idCom">
            <input type="submit" value="Signaler" id="signaler">
            <div id="reponseSignal">Nous avons pris note de ce commentaire, et nous le supprimerons si nécessaire</div>
        </form>

    </div>
</div>
<!-- ------ -->

<script type="text/javascript" src="{{URL::to('js/ajaxSignalement.js')}}"></script>

</body>
</html>
