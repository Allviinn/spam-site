<!DOCTYPE html>
<html>
<head>
	<title>FORMULAIRE DE SIGNALEMENT</title>
	<meta charset="utf-8">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
</head>
<body>

<h1> SIGNALER UN COMMENTAIRE </h1>

<p> Pour quelle raisons souhaitez-vous signaler ce commentaires </p>

 <form action =''>


 <input type="radio" name="signaler" class="signale" value="Contenu offansant">Contenu offansant<br>
 <input type="radio" name="signaler" class="signale" value="Info fausse">info fausse<br>
 <input type="radio" name="signaler" class="signale" value="Présence d'info privées">Présence d'info privées<br>
 <input type="radio" id="div1"  name="signaler" class="signale" value="Autre raisons">Auteur raisons<br>
<br><br>
<textarea id="div2" style="display:none" type="text"  name="autre_raisons" placeholder="Autre raisons" row="38" cols="65"> </textarea>
<br><br>
<input type="submit" value="Signaler" id="signaler">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
</form>

<script type="text/javascript" src="{{URL::to('js/ajaxSignalementForm.js')}}"></script>
</body>
</html>