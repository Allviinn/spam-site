$(document).ready(function() {

	$('.radio').on('click', function() {

		var pseudo = $('input[name=radio]:checked', '#formSupp').val();
		console.log(pseudo);


		if($("#autreRaison").is(":checked") == true) {
			$('#descriptionSignal').attr('style', 'visibility: visible;');
			$('#labelDescr').attr('style', 'visibility: visible;');
			console.log('ca marche');
		}

		if($("#autreRaison").is(":checked") == false) {
			$('#descriptionSignal').attr('style', 'visibility: hidden;');
			$('#labelDescr').attr('style', 'visibility: hidden;');
			console.log('ca marche pas');
		}

	})



//--------------------------------------------
	$('#submitSignal').on('click', function(e) {
		e.preventDefault();
		var raison = $('input[name=radio]:checked', '#formSupp').val();
		var email = $('#emailSignal').val();
		var descriptionSignal= $('#descriptionSignal').val();

		$.ajax({
    	    	type:'POST',
    	    	url:'http://mujkic.chalon.codeur.online/apiSpam/signalementSpam.php',
    	    	crossDomain: true,
    	   		data: { "raison": raison, "email": email, "descriptionSignal": descriptionSignal, "_token": $('#token').attr('value') },
    	    	success: function(data){
    	    	    console.log(data);
    	    	}
    	   
    		});
	});



});