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
    $services=Service::all();
    return view('services',
    [
        'services'=>$services]
    );
}

public function store(Request $request){

   
    $this->validate($request , [
       'nom_service'=>'required',
       'responsable'=>'required',
       'description'=>'required',

    ]);

    
   try {
    //code...
   } catch (\Throwable $th) {
    //throw $th;
   }
    Service::create([
        'nom_service' => $request->nom_service,
        'description' => $request->description,
        'responsable' => $request->responsable,
        'status'=>'1',
     ]);

     return redirect()->route('service')->with('status','Le service a été crée.');
}

public function destroy (Request $request){
    $ifExists=Service::find($request->id);
    If ($ifExists){
        $ifExists->delete();
        return redirect()->route('service')->with('message','Le service a été supprimé.');
    }else{
        return redirect()->route('service')->with('message','element introuvable');
    }
    
}
}


