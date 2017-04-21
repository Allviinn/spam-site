<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/styleAlvin.css') }}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    </head>
    <body>


    <!--EN TETE DE LA PGA D'ACCUEIL-->


        <header>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"><a href="/spam_site/public/"><img src="graphisme/graphismes/images/icone-logo-rouge.png" width="50"></a></div>
                    <div id="headerDiv2" class="offset-5 col-5 offset-sm-7 col-sm-4 offset-md-8 col-md-3 offset-lg-8 col-lg-2 offset-xl-7 col-xl-3"><a href="a_propos">UN SPAM ?</a></div>

                </div>
            </div>
        </header>
        <!-- ---- -->


        <!-- PREMIERE SECTION : CONTANT LIMAGE D'ACCUEIL (non visible sur lespetites tailles d'éctran) -->

        <section id="sectionAccueil">
            <img src="graphisme/graphismes/images/fond-accueil-mobile2.png">

        </section>
        <!-- ---- -->

<!-- SECTION CONTANT LES DEUX BOUTONS PRINCIPAUX (ajout d'un numéro et recherche d'un numéro) -->

        <section id="sectionAjout" class="container-fluid">
            <div class="row">
                <h1 class="col-12 offset-sm-1 col-sm-10" id="titreAccueil" style="font-family: 'Oswald', sans-serif;">Ajoutez un nouveau numéro ou recherchez un numéro dans notre liste</h1>

                <a href="ajoutNumero" id="lienAjoutNumero" class="col-12 col-sm-6 offset-md-1 col-md-5 offset-lg-2 col-lg-4">
                    <article id="articleAjout">

                    <img src="graphisme/graphismes/images/icone-ajout.png" width="70">
                    <p>Vous souhaitez signaler un numéro?</p>

                    </article>
                </a>

                <a href="" id="lienRechercheNum" class="col-12 col-sm-6 col-md-5 col-lg-4">
                    <article id="articleRecherche">


                        <img src="graphisme/graphismes/images/icone-loupe.png" width="70">
                        <p>Vous souhaitez rechercher un numéro?</p>

                    </article>
                </a>
            </div>
        </section>

<!-- ---- -->


         <!-- SECTION CONTENANT LES NUMEROS LES PLUS CRITIQUES -->

        <section id="sectionNumeros" class="container-fluid">

            <header id="headerNumeros" class="row">
                <h4 class="col-12 offset-sm-1 col-sm-5">Numéros critiques</h4>

            </header>
                <!-- articles (beandeaux contenant le numéro de tél, son type, nombre de signalement etc) générés en boucle -->
            @foreach($numeros as $key => $numero)
            <div class="parentCommentaire">
                <article class="articlesNumeros">
                    <div class="row">
                        <p class="col-6 offset-md-1 col-md-5 unNumero"><span class="spanNumeros"> +{{$numero->prefix}} {{$numero->numero}}</span><br> ({{ $numero->type }})</p>

                        <p class="offset-2 col-3 offset-md-3 col-md-3 unNumero"><span class="spanNumeros">{{$numero->count}} </span>rapports<p>
                    </div>

                    <div class="row">
                        <a class="col-12 offset-md-1 col-md-3 offset-lg-1 col-lg-3 seeComents" style="display:block"href=""     data-numero="{{ $numero->numero }}">Voir les commentaires</a><br>
                        <a class="col-12 offset-md-1 col-md-3 offset-lg-1 col-lg-3 hideComments" href=""  style="display:none" >    Cacher les commentaires</a>
                        <a href="" style="color: #c6002b" data-numeroA="{{ $numero->numero }}" data-prefixA="{{ $numero->prefix }}" class="col-12 offset-md-5 col-md-3 offset-lg-5 col-lg-3 addComment">  Ajouter un commentaire</a>
                        <form style="display: none;" action="addComment" method="post" class="formAddComment">
                            <input type="hidden" name="prefixA" class="prefixA" value="">
                            <input type="hidden" name="numeroA" class="numeroA" value="">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        </form>
                    </div>
                </article>
                <div class="commentairesAccueil">

                </div>
            </div>
            @endforeach

        </section>
        <!-- ------ -->

<!-- FORMULAIRE DE SIGNALEMENT D'UN COMMENTAIRE ABUSIF -->
<div id="modalForm">
    <div id="divFormSignal">

        <h5> Pour quelle raisons souhaitez-vous signaler ce commentaire </h5>

        <a href="" id="croixSignal">X</a>
        <form id="formSignal" action="signalCommentaireAccueil" method="post">

            <div id="css">
                <div><input type="radio" name="signaler" class="radioSignal" value="Contenu offansant">Contenu offensant</div><br>
                <div><input type="radio" name="signaler" class="radioSignal" value="Info fausse">Infos fausses</div><br>
                <div><input type="radio" name="signaler" class="radioSignal" value="Présence d'info privées">Présence d'infos   privées   </div  ><br>
                <div><input type="radio" name="signaler" class="radioSignal" value="Autre raisons">Autres raisons</div><br>
            </div>

            <textarea type="text"  name="textAutreRaison" id="textAutreRaison" placeholder="Autre raisons"> </textarea>
                 <br>
            <input type="hidden" name="_token" id="tokenSignalAccueil" value="{{ csrf_token() }}">
            <input type="hidden" name="idCom" value="" id="idCom">
            <input type="submit" value="Signaler" id="signaler">
            <div id="reponseSignal">Nous avons pris note de ce commentaire, et nous le supprimerons si nécessaire</div>
        </form>

    </div>
</div>
<!-- ------ -->

<!--TOKEN A ENVOYER EN AJAX POUR AFFICHAGE DES COMMENTAIRES -->

<form>
    <input type="hidden" id="token1" name="_token" value="{{ csrf_token() }}">

</form>



<!------------>


<!-- FORMULAIRE DE RECHERCHE D'UN NUMERO -->
<div id="modal">

    <form id="formRechercheNum" method="post" action="recherche">
           <h4>Rechercher un numéro</h4>
           <a href="#" id="croix">X</a>
       <input type="text" name="numeroRecherche" id="numeroRecherche" placeholder=" Ex : 07 86 65 78 33"><br>
       <div style="color: #c6002b; font-weight: bold" id="retourUtil"></div><br>
       <input type="hidden" id="token2" name="_token" value="{{ csrf_token() }}">
       <input type="submit" name="submitRechercheNum" id="submitRechercheNum" value="Rechercher">
    </form>
</div>
<!-- ------ -->
        <script type="text/javascript" src="{{ URL::to('js/alvin.js') }}"></script>
    </body>
</html>
