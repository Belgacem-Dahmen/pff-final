@extends('layouts.app')


@section('content')
    <div class="flex justify-center">
        <div class="w-6/12 bg-white p-6 rounded-lg mt-6">
                <form action="{{route('register')}}" method="post">
                    @csrf
               
                        <div class="mb-4">
                                <label for="nom" class="sr-only"> Nom</label>
                                <input type="text" name="nom" id="nom" placeholder="Nom"
                                class="bg-gray-100 border-2 w-full p-4 rounded-lg  @error('nom') border-red-700 @enderror" value="{{ old('nom')}}">
                                 @error('nom')
                                     <div class="text-red-500 mt-2 text-sm"> {{ $message}} </div>
                                 @enderror   

                        </div>
                        <div class="mb-4">
                            <label for="prenom" class="sr-only"> prenom</label>
                            <input type="text" name="prenom" id="prenom" placeholder="Prenom"
                            class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('prenom') border-red-700 @enderror" value="{{ old('prenom')}}">
                            @error('prenom')
                            <div class="text-red-500 mt-2 text-sm"> {{ $message}}  </div>
                        @enderror   

                    </div>
                    <div class="mb-4">
                        <label for="email" class="sr-only"> email</label>
                        <input type="email" name="email" id="email" placeholder="Email"
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('email') border-red-700 @enderror" value="{{ old('email')}}">
                        @error('email')
                        <div class="text-red-500 mt-2 text-sm"> {{ $message}}  </div>
                    @enderror   

                </div>
                <div class="mb-4">
                    <label for="mot de passe" class="sr-only"> mot de passe </label>
                    <input type="password" name="password" id="nom" placeholder="Mot de passe"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg">
                    @error('password')
                    <div class="text-red-500 mt-2 text-sm"> {{ $message}}  </div>
                @enderror   

            </div>
            <div class="mb-4">
                <label for="password_confirmation" class="sr-only"> Confirmer votre mot de passe </label>
                <input type="password" name="password_confirmation" id="nom" placeholder="Confirmer votre mot de passe"
                class="bg-gray-100 border-2 w-full p-4 rounded-lg">
                @error('password_confirmation')
                <div class="text-red-500 mt-2 text-sm">{{ $message}}  </div>
            @enderror   

        </div>
                     
        

        <div class="mb-4">
                    <select name="service" id="service" class="bg-gray-100 border-2 w-full p-4 rounded-lg">
                    <option value="">Selectionnez votre service</option>
                    <option value="Clients">Clients</option>
                    <option value="Commercial">Commercial</option>
                    <option value="Devloppement">Devloppement</option>
                    <option value="Dsi">DSI</option>
                    <option value="Qas">Qas</option>
                    <option value="Marketing">Marketing</option>
            </select>
            

         </div>

         <div class="mb-4">
            <select name="equipe" id="equipe" class="bg-gray-100 border-2 w-full p-4 rounded-lg">
            <option value="">Selectionnez votre equipe</option>
            <option value="Technique">Technique</option>
            <option value="Commercial">Commercial</option>
            <option value="Devloppement">Devloppement</option>
            <option value="Dsi">DSI</option>
            <option value="Qas">Qas</option>
            <option value="Marketing">Marketing</option>
    </select>
    

 </div>
         <div class="mb-4">
            <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">
                S'inscrire
            </button>
    </div>


                </form>
        </div>
       
    </div>
@endsection