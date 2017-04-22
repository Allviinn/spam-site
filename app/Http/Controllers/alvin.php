<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\spam_auteurs;
use App\spam_commentaires;
use App\spam_numeros;
use App\spam_signalements;
use App\spam_join_signalers;
use App\spam_prefixs;

class alvin extends Controller
{

	

    public function index() { //redirection vers la page "à propos"
        return view('a_propos'); 
    }


    public function numAccueil(Request $request) {
        //au clique sur "voir les commentaires" d'un numéro critique sur la page d'accueil, une requête ajax récupere les commentaires associés
        if($request->ajax()) {

            if(!isset($_POST['minimum']) && !isset($_POST['limit']) && isset($_POST['numero']))
            {
                $numeroAccueil = $_POST['numero'];
            
                $spam_auteursA = new spam_auteurs;   
                $spam_commentairesA = new spam_commentaires;
                $spam_numerosA = new spam_numeros;
    
                $numerosA = $spam_numerosA::select('*')->where('numero', $numeroAccueil)->first();
                $idNumeroA = $numerosA->id;
                
                $auteurA = $spam_auteursA::
                join('spam_commentaires','spam_commentaires.id_spam_auteurs','=','spam_auteurs.id')
                ->select('*', 'spam_commentaires.id AS id')
                ->where('spam_commentaires.id_spam_numeros',$idNumeroA)
                ->limit(5)
                ->get();
    
                return response()->json(array('auteursA' => $auteurA));

            } else if (isset($_POST['minimum']) && isset($_POST['limit']) && isset($_POST['numero'])) 
            {

                $numeroAccueil = $_POST['numero'];
                $minimum = $_POST['minimum'];
                $limit = $_POST['limit'];
            
                $spam_auteursA = new spam_auteurs;   
                $spam_commentairesA = new spam_commentaires;
                $spam_numerosA = new spam_numeros;
    
                $numerosA = $spam_numerosA::select('*')->where('numero', $numeroAccueil)->first();
                $idNumeroA = $numerosA->id;
                
                $auteurA = $spam_auteursA::
                join('spam_commentaires','spam_commentaires.id_spam_auteurs','=','spam_auteurs.id')
                ->select('*', 'spam_commentaires.id AS id')
                ->where('spam_commentaires.id_spam_numeros',$idNumeroA)
                ->skip($minimum)
                ->take($limit)
                ->get();

                
    
                return response()->json(array('auteursA' => $auteurA));

            }
            
        }

    }


    public function insertSignalRecherche( Request $request) {

        //insertion dans la BDD d'un signalement d'un commentaire abusif
            if($request->ajax()) {
    	       $raisonRadio = $_POST['raisonSignal'];
                $autreRaison = $_POST['textAutreRaison'];
                $idSignal = $_POST['idCom'];
                
                
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
    
       		   	echo 'Je crois que ca marche';
            }
       	}



        public function insertSignalAccueil( Request $request) {

        //insertion dans la BDD d'un signalement d'un commentaire abusif
            if($request->ajax()) {
                $raisonRadio = $_POST['raisonSignalAccueil'];
                $autreRaison = $_POST['textAutreRaisonAccueil'];
                $idSignal = $_POST['idComAccueil'];
  
                
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
    
                    echo 'je cois que ca marche';
            }
        }

        public function addComent(Request $request) {

            $numA = $_POST['numeroA'];
            $prefixA = $_POST['prefixA'];

            $tab =array();
        
            $prefix = new spam_prefixs; 
            $codePays = $prefix::all();
        
            foreach ($codePays as $pays){
                if (strlen($pays->code)==2){
                    array_push($tab, $pays);    
                }
            }
        
            

            return view('ajoutNumero', array('numerosA'=>$numA, 'prefixA'=>$prefixA, "prefix"=>$tab));

        }
       
}
