<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>

    </head>
    <body>

        <h1 id="h1">Rapporter un numéro</h1>
        <form>

            <label>Numéro : </label><br><input type="text" name="numero" id="numero"><br><br><br>
            <label>Type : </label><br><select id="selectType"><option value="appel">Appel</option><option value="sms">SMS</option></select><br><br><br>
            <label>Qualtié : </label><br><select id="selectQualite"><option value="positif">Positif</option><option value="negatif">Négatif</option></select><br><br><br>
            <label>Commentaire : </label><br><textarea cols="50" rows="6" name="commentaire" id="commentaire"></textarea><br><br><br>
            <label>Votre e-mail : </label><br><input type="text" name="email" id="email"><br><br><br>
            <label>Sous quelle pseudonyme voulez-vous que les autre vous voient :  </label><br><input type="text" name="pseudo" id="pseudo">

            <input type="hidden" id="token" name="_token" value="{{ csrf_token() }}"><br><br><br>
            <input type="submit" id="submit" value="Inscription !">

        </form>

        <a href="test">Lien de test vers une autre page</a>
        <script type="text/javascript" src="{{ URL::to('js/test.js') }}"></script>
    </body>
</html>
