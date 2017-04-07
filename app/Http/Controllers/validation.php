<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\message;


use App\spam_auteurs;
use App\spam_commentaires;
use App\spam_numeros;



class validation extends Controller
{
    public function validation (message $request){
    
  
        
        $numero = $request->input('numero');
		$type = $request->input('type');
		$qualite = $request->input('qualite');
		$commentaire = $request->input('commentaire');
		$email = $request->input('email');
		$pseudo = $request->input('pseudo');
		$today = getdate();
		$date = date("m/d/Y h:i:s a", time());   
        
        
        $numeros = new spam_numeros;   
        $auteurs = new spam_auteurs;   
        $commentaires = new spam_commentaires;   
        
        $insertionAuteur =  $auteurs::insertGetId(
                ['pseudo' => $pseudo,'email' => $email]
            );     
        
        $idnum = $numeros::select('id')
            ->where('numero', '=', $numero)
            ->first();
    
        if(!isset($idnum->id)){
        
            $insertionNmero =  $numeros::insertGetId(
                ['numero' => $numero,
                 'type' =>$type,
                 'date_ajout' =>$date,
                 'id_spam_auteurs' =>$insertionAuteur
                
                ]
            ); 
        
            $insertioncommentaire = $commentaires::insert(
                ['commentaire' => $commentaire,
                 'date_commentaire' =>$date,
                 'id_spam_auteurs' =>$insertionAuteur,
                 'id_spam_numeros' =>$insertionNmero
                
                ]
            );         
     
        } else {
        
            $insertioncommentaire = $commentaires::insert(
                ['commentaire' => $commentaire,
                 'date_commentaire' =>$date,
                 'id_spam_auteurs' =>$insertionAuteur,
                 'id_spam_numeros' =>$idnum->id
                
                ]
            );             
        
        }

 
    }
}
