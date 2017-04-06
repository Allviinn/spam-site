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
                <div class="col-xs-2"><img src="graphisme/graphismes/images/icone-logo.png" width="50"></div>
                <div class="col-xs-offset-8 col-xs-2"><img src="graphisme/graphismes/images/menuburger.png" width="40"></div>
                </div>
            </div>
        </header>

        <section id="sectionAccueil">
            <img src="graphisme/graphismes/images/fond-accueil-mobile.png">
            <a href="#" id="lienMobileApropos">Qui sommes-nous</a>

        </section>

        <section id="sectionAjout" class="container">
            <div class="row">
            <h4 class="col-xs-12">Ajoutez un nouveau numéro ou recherchez un numéro dans notre liste</h4>

            <article id="articleAjout" class="col-xs-offset-1 col-xs-10">
                
                <img src="graphisme/graphismes/images/icone-ajout.png" width="50">
                <p>Vous souhaitez déclarer un SMS ou un appel comme indésirable?</p>
                <a href="#" id="lienAjoutNumero">Cliquez ici</a>

            </article>
            </div>
        </section>

            <a href="ajoutNumero">Page dIbtissem</a>
        <script type="text/javascript" src="{{ URL::to('js/welcome.js') }}"></script>
    </body>
</html>
