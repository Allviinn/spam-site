<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
    
    <link href="{{ URL::to('css/style.css') }}" type="text/css" rel="stylesheet" media="screen,projection" />

    </head>
    <body>

        <h1 id="h1">Rapporter un numéro</h1>
        <form>

            <label>Numéro : </label><input type="text" name="numero" id="numero"><br><br><br>
            
            
             <label>Type: </label>
             <input type="radio" name="type" value="Sms" class="message_pri"> Sms<br>
            <label>&nbsp;</label><input type="radio" name="type" value="Appel" class="message_pri"> Appel<br><br>
            
           
            <label>Commentaire : </label><textarea cols="50" rows="6" name="commentaire" id="commentaire"></textarea><br><br><br>
            <label>Qualité:</label><input type="radio" name="qualite" value="positif" class="message"> Positif<br>
            <label>&nbsp;</label><input type="radio" name="qualite" value="negatif" class="message"> Négatif<br><br>
            
            <label>Votre e-mail : </label><input type="text" name="email" id="email"><br><br><br>
            <label>Sous quelle pseudonyme voulez-vous que les autre vous voient :  </label><br><input type="text" name="pseudo" id="pseudo">

            <input type="hidden" id="token" name="_token" value="{{ csrf_token() }}"><br><br><br>
            <label>&nbsp;</label><input type="submit" id="submit" value="Ajouter !">

        </form>

        <a href="test">Lien de test vers une autre page</a>
        <script type="text/javascript" src="{{ URL::to('js/welcome.js') }}"></script>
    </body>
</html>
