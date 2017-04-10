 <?php

 echo htmlspecialchars  ($_post['signaler']);

 if (isset($_post['signaler']) AND $_post['signaler']['error'] == 0)

 {

 	if ($_post['signaler']['size']<= 1000 000)
 	{

 		$infosfichier = pathinfo($_files['signaler']['name']);
 		$extension_upload = $infosfichier['extension'];
 		$extention_autorisees = array('text');
 		if (in_array($extention_upload,$extention_autorisees))

 		{

 			move_uploaded_file($_files['signaler']['tmp_name'],'upload'.basename($_files['signaler']['name']));
 			echo "l'envoi a bien été effectué !";

 		}

 	}
 }


 ?>
