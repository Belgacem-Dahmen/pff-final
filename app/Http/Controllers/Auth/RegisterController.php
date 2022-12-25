<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }
    
    public function index(){
        return view('auth.register');
    }

    public function store(Request $request){
        
     $this->validate($request , [
        'nom'=>'required',
        'prenom'=>'required',
        'email'=>'required|email|unique:users',
        'password'=>'required|confirmed',


     ]);

     User::create([
        'nom' => $request->nom,
        'prenom' => $request->prenom,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'service' => $request->service,
        'equipe' => $request->equipe,
     ]);

     auth()->attempt($request->only('email','password'));

     return redirect()->route('dashboard');
    }
}
