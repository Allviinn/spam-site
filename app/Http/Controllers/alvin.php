<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\spam_auteurs;
use App\spam_commentaires;
use App\spam_numeros;
use App\spam_signalements;
use App\spam_join_signalers;

class alvin extends Controller
{

	
    public function index() {
        return view('a_propos');
    }


    public function passId( Request $request) {

    	    $raisonRadio = $request->input('signaler');
            $autreRaison = $request->input('textAutreRaison');
            $idSignal = $request->input('idCom');
            
            
            
            $spam_auteurs = new spam_auteurs;   
            $spam_commentaires = new spam_commentaires;
            $spam_signalements = new spam_signalements;
            $spam_join = new spam_join_signalers;
            
            $idSignalement =  $spam_signalements::insertGetId(
                ['raison' => $raisonRadio,'description' => $autreRaison]
            );
            
            
            $idAuteurs = $spam_commentaires::select('id_spam_auteurs')->where('id', $idSignal)->first();
            $idAuteur = $idAuteurs->id_spam_auteurs;
            
            $idTableCommentaires = $spam_commentaires::select('id')->where('id', $idSignal)->first();
            $idCommentaire = $idTableCommentaires->id;
           

            $insertioncommentaire = $spam_join::insert(
                    ['id_spam_auteurs' => $idAuteur,
                     'id_spam_signalements' =>$idSignalement,
                     'id_spam_commentaires' =>$idCommentaire
                    
                    ]
                );

       			

       	}
       
}
