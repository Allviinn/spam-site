<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
</head>
<body>
<h1>Signalement d'un commentaire</h1>

<form id="formSupp">



	<label for="emailSignal">Votre emai :</label><input type="email" name="emailSignal" id="emailSignal"><br><br>

	<input type="radio" value="offensant" name="radio" class="radio" value="Offensant"><label for="radio">Offensant :</label><br><br>
	<input type="radio" value="infoPerso" name="radio" class="radio" value="Contient des infos perso"><label for="radio">Contient des infos perso :</label><br><br>
	<input type="radio" value="infoFausse" name="radio" class="radio" value="Contient des infos fausses"><label for="radio">Contient des infos fausses :</label><br><br>
	<input type="radio" value="auteur" name="radio" class="radio" value="Je suis auteur et je veux supprimer"><label for="radio">Je suis auteur et je veux supprimer :</label><br><br>
	<input type="radio" value="autre" name="radio" class="radio" value="Une autre raison" id="autreRaison"><label for="radio">Une autre raison :</label><br><br>



	<label style="display:none;" id="labelDescr" for="descriptionSignal">Votre raison</label><textarea style="visibility: hidden;" name="descriptionSignal" placeholder="Ecrivez votre commentaire ici ...." id="descriptionSignal"></textarea><br><br>


<input type="hidden" id="token" name="_token" value="{{ csrf_token() }}">
<input type="submit" name="submitSignal" id="submitSignal" Value="Signaler !">
</form>
<script type="text/javascript" src="{{ URL::to('js/signalement.js') }}"></script>
</body>
</html>