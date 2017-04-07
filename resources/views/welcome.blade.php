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
    </head>
    <body>
        <header>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-1 col-sm-1"><a href="/"><img src="graphisme/graphismes/images/icone-logo-rouge.png" width="50"></a></div>
                    <div id="headerDiv2" class="offset-5 col-5 offset-sm-2 col-sm-4"><a href="#">UN SPAM?</a></div>
                        <div id="headerDiv3" class="hidden-xs-down col-sm-5">
                            <form>
                                <input type="text" name="headerRecherche" id="headerRecherche" placeholder="Ex : 0785123575">
                                <img src="graphisme/graphismes/images/loupe-rouge.png" width="30">
                            </form>
                        </div>
                </div>
            </div>
        </header>

        <section id="sectionAccueil">
            <img src="graphisme/graphismes/images/fond-accueil-mobile2.png">

        </section>

        <section id="sectionAjout" class="container-fluid">
            <div class="row">
                <h4 class="col-12 offset-sm-1 col-sm-10">Ajoutez un nouveau numéro ou recherchez un numéro dans notre liste</h4>

                <a href="ajoutNumero" id="lienAjoutNumero" class="col-12 col-sm-6">
                    <article id="articleAjout">
                    
                    <img src="graphisme/graphismes/images/icone-ajout.png" width="70">
                    <p>Vous souhaitez signaler un SMS ou un appel?</p>
                    
                    </article>
                </a>
            
                <a href="" id="lienRechercheNum" class="col-12 col-sm-6">
                    <article id="articleRecherche">
        
                        <img src="graphisme/graphismes/images/icone-loupe.png" width="70">
                        <p>Vous souhaitez rechercher un numéro?</p>
        
                    </article>
                </a>
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
