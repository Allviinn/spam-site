
$('#email').on('change', function(e) {
    
    var val =$('#email').val();
    //console.log(val);
        
    $.ajax({
        method: "POST",
        url: 'pseudoExiste',
        data: {

            "_token": $('#token').attr('value'),
            'valeurChamps': val
        
        }, 
        success: function(msg) {
                        //console.log(msg.pseudoExiste.pseudo);
            if(msg.pseudoExiste !== null){
    
               
                $('#pseudo').attr('value',msg.pseudoExiste.pseudo);
                $('#pseudo').attr('readonly','readonly');
            }

        }
    });
    
    
});