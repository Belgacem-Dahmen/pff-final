@extends('layouts.app')


@section('content')
    <div class="flex justify-center">
        <div class="w-4/12 bg-white p-6 rounded-lg mt-6">
            
            @if (session('status'))
            <div class="mb-4 text-red-500 text-center">
                {{session('status')}}
            </div>
            @endif
                

            
                <form action="{{route('login')}}" method="post">
                    @csrf
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
                <div class="flex items-center">
                    <input type="checkbox" name="remember" id="remember" class="mr-3">
                    <label for="remember"> Se souvenir de moi ? </label>
                </div>

            </div>

        

         <div class="mb-4">
            <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">
                Se connecter
            </button>
                        
        


                </form>
        </div>
       
    </div>
@endsection