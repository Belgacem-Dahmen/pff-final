<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EquipeController extends Controller
{
    public function __construct()
  {
      $this->middleware(['auth']);
  }
    public function index (){
        return view('equipes');
    }

    public function store(Request $request){
        
        $this->validate($request , [
           'nom_equipe'=>'required',
           'description'=>'required',
           'responsable_equipe'=>'required',
        
        ]);
    
}
}
