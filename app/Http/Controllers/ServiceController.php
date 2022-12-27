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
       'responsable'=>'required',
       'description'=>'required',

    ]);

    
   
    Service::create([
        'nom_service' => $request->nom_service,
        'description' => $request->description,
        'responsable'=>$request->responsable,
        'status'=>'1',
     ]);

     return redirect()->route('service')->with('status','Le service a été crée.');
}
}


