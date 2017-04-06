<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\spam_auteur;
use App\spam_commentaires;
use App\spam_numeros;



class validation extends Controller
{
    public function validation(request $request){
    
    if($request->ajax()){
        
        $numero = $request->input('numero');
		$type = $request->input('type');
		$qualite = $request->input('qualite');
		$commentaire = $request->input('commentaire');
		$email = $request->input('email');
		$pseudo = $request->input('pseudo');;
		$today = getdate();
		$date = date("m/d/Y h:i:s a", time());    
        
    echo $numero;    
    }
        
        
        
    }
}
