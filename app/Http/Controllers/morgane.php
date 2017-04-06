<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\spam_numeros;
use App\spam_commentaires;

class morgane extends Controller
{
  public function rechercheNumero(Request $request){
    $numero = new spam_numeros;
    $numRecherche = $request->input('numeroRecherche');
    $numeros = $numero::select('*')
        ->where('numero', $numRecherche)
        ->get();

    $numerosId = $numero::select('id')
        ->where('numero', '=', $numRecherche)
        ->first();
    $idNumero = $numerosId->id;

    $commentaire = new spam_commentaires;
    $commentaires = $commentaire::
    join('spam_numeros','spam_commentaires.id_spam_numeros','=','spam_numeros.id')
    ->select('spam_commentaires.*')
    ->where('spam_commentaires.id_spam_numeros',$idNumero)
    ->get();

    return view('recherche', array("numeros"=>$numeros, "commentaires"=>$commentaires));
  }
}
