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
                    <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"><a href="/"><img src="graphisme/graphismes/images/icone-logo-rouge.png" width="50"></a></div>
                    <div id="headerDiv2" class="offset-5 col-5 offset-sm-7 col-sm-4 offset-md-8 col-md-3 offset-lg-8 col-lg-2 offset-xl-7 col-xl-3"><a href="a_propos">UN SPAM ?</a></div>
                        
                </div>
            </div>
        </header>

        <section id="sectionAccueil">
            <img src="graphisme/graphismes/images/fond-accueil-mobile2.png">

        </section>

        <section id="sectionAjout" class="container-fluid">
            <div class="row">
                <h4 class="col-12 offset-sm-1 col-sm-10">Ajoutez un nouveau numéro ou recherchez un numéro dans notre liste</h4>
                
                <a href="ajoutNumero" id="lienAjoutNumero" class="col-12 col-sm-6 offset-md-1 col-md-5 offset-lg-2 col-lg-4">
                    <article id="articleAjout">
                    
                    <img src="graphisme/graphismes/images/icone-ajout.png" width="70">
                    <p>Vous souhaitez signaler un SMS ou un appel?</p>
                    
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
        <div id="modal">

            <form id="formRechercheNum" method="post" action="recherche">
                   <h4>Rechercher un numéro</h4>
                   <a href="#" id="croix">X</a>
               <input type="text" name="numeroRecherche" id="numeroRecherche" placeholder=" Ex : 07 86 65 78 33"><br>
               <div style="color: #c6002b; font-weight: bold" id="retourUtil"></div><br>
               <input type="hidden" id="token1" name="_token" value="{{ csrf_token() }}">
               <input type="submit" name="submitRechercheNum" id="submitRechercheNum" value="Rechercher">
            </form>
         </div>
        <script type="text/javascript" src="{{ URL::to('js/alvin.js') }}"></script>
    </body>
</html>
