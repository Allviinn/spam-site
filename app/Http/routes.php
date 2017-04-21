<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//route qui renvoi la page d'accueil avec la liste des numéro critiques
Route::get('/','validation@getCommentaire'); 

//au clique sur "voir les commentaires" d'un numéro critique sur la page d'accueil, une requête ajax récupere les commentaires associés
Route::post('numAccueil', 'alvin@numAccueil');


//route qui renvoi vers la page d'ajout d'un numéro avec une liste de préfixs téléphoniques de numéros internationaux
Route::get('ajoutNumero', 'Controller@index');


//insertion d'un numéro dans la base de donnée
Route::post('traitement','validation@validation');


//route qui renvoi sur la page de résultat après un e recherche de numéro
Route::post('recherche', 'morgane@rechercheNumero');


//page d'ajout de numéro : requête ajax qui récupere le pseudo associé à une adresse mail (si déjà présente dans la BDD)
Route::post('pseudoExiste', 'validation@pseudo');


//signalement d'un commentaire abusif depuis la page de recherche, insertion dans la BDD des raisons de signalements....
Route::post('signalCommentaireRecherche', 'alvin@insertSignalRecherche');



//signalement d'un commentaire abusif depuis la page d'accueil, insertion dans la BDD des raisons de signalements....
Route::post('signalCommentaireAccueil', 'alvin@insertSignalAccueil');



//Ajout d'un commentaire à un numéro dans la page d'accueil : redirection vers page d'ajout de numéro(ou de commentaire) avec les champs "prefix" et "numéro" préremplis.
Route::post('addComment', 'alvin@addComent');



//redirection vers la page "à propos"
Route::get('a_propos', 'alvin@index');
