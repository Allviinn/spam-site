$(document).ready(function() {

$('#submit').on('click', function(event) {

	event.preventDefault();

	var numero = $('#numero').val();
	var type = $('#selectType option:selected').val();
    var qualite = $('#selectQualite option:selected').val();
	var commentaire = $('#commentaire').val();
    var email = $('#email').val();
    var pseudo = $('#pseudo').val();

	$.ajax({
    	    	type:'POST',
    	    	url:'http://mujkic.chalon.codeur.online/spam-API/apiSpam.php',
    	    	crossDomain: true,
    	   		data: { "numero": numero, 
                        "type": type, 
                        "qualite": qualite,
                        "commentaire": commentaire,
                        "email": email,
                        "pseudo": pseudo, 
                        "_token": $('#token').attr('value') },

    	    	success: function(data){
    	    	    console.log(data);
    	    	}
    	   
    		});

});





});