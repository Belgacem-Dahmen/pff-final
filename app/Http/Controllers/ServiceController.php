<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function __construct()
  {
      $this->middleware(['auth']);
  }
  public function index (){
    return view('services');
}

public function store(Request $request){
    
    $this->validate($request , [
       'nom_service'=>'required',
       'responsable_service'=>'required',

    ]);

    Service::create([
        'nom_service' => $request->nom,
        'description' => $request->description,
        'responsable'=>$request->responsable_service,
        'status'=>'1'
     ]);
}
}


