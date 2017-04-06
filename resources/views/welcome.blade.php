<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/styleAlvin.css') }}">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    </head>
    <body>
        <header>
            <div class="container-fluid">
                <div class="row">
                <div class="col-xs-2"><img src="graphisme/graphismes/images/icone-logo-rouge.png" width="50"></div>
                <div class="col-xs-offset-8 col-xs-2"><img src="graphisme/graphismes/images/menuburger.png" width="40"></div>
                </div>
            </div>
        </header>

        <section id="sectionAccueil">
            <img src="graphisme/graphismes/images/fond-accueil-mobile2.png">

        </section>

        <section id="sectionAjout" class="container">
            <div class="row">
            <h4 class="col-xs-12">Ajoutez un nouveau numéro ou recherchez un numéro dans notre liste</h4>

            <a href="ajoutNumero" id="lienAjoutNumero"><article id="articleAjout" class="col-xs-offset-1 col-xs-10">
                
                <img src="graphisme/graphismes/images/icone-ajout.png" width="70">
                <p>Vous souhaitez déclarer un SMS ou un appel comme indésirable?</p>
                

            </article></a>
            </div>
            <div class="row">
            <a href="" id="lienRechercheNum"><article id="articleRecherche" class="col-xs-offset-1 col-xs-10">

                <img src="graphisme/graphismes/images/icone-loupe.png" width="70">
                <p>Vous souhaitez rechercher un numéro?</p>

            </article></a>
            </div>
        </section>

         <form id="formRechercheNum" method="post" action="recherche">

            <label>Entrez le numéro : </label><input type="text" name="numeroRecherche">
            <input type="submit" name="submitRechercheNum" id="submitRechercheNum" value="Rechercher">
            <input type="hidden" id="token1" name="_token" value="{{ csrf_token() }}">
         </form>

        <script type="text/javascript" src="{{ URL::to('js/alvin.js') }}"></script>
    </body>
</html>
