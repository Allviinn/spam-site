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

 <form action="ciblesignalement.blade.php" methode="post">


 <input type="radio" name="signaler" value="Contenu offansant">Contenu offansant<br>
 <input type="radio" name="signaler" value="Info fausse">info fausse<br>
 <input type="radio" name="signaler" value="Présence d'info privées">Présence d'info privées<br>
 <input type="radio" id="div1"  name="signaler" value="Autre raisons">Auteur raisons<br>
<br><br>
<textarea id="div2" style="display:none" type="text"  name="autre_raisons" placeholder="Autre raisons" row="38" cols="65"> </textarea>
<br><br>
<input type="submit" value="Signaler">

</form>

<script type="text/javascript">

$(document).ready(function(){
	$("#div1").click(function(){
		$("#div2").fadeIn(1000);
	});
	
});


</script>

<?php


		


?>


</body>
</html>