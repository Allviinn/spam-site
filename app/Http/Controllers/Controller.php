<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use App\spam_prefixs;

class Controller extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;

    public function index() {
        
        $tab =array();
        
        $prefix = new spam_prefixs; 
        $codePays = $prefix::all();
        
        foreach ($codePays as $pays){
        if (strlen($pays->code)==2){
        array_push($tab, $pays);    
        }
        }
        
//      dd ($tab);    
    	return view('ajoutNumero',array("prefix"=>$tab));
    }
   
}
