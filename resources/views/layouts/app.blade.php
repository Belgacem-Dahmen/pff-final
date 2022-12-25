<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        
        @vite('resources/css/app.css')
        <title>Rh-ETAI</title>
    </head>
<body class="bg-gray-200">
    <nav class="p-3 bg-white flex justify-between">
        <ul class="flex items-center">
          <li><a href="/" class=""><img class="w-64 "src="{{ asset('images/logo-ipda.png')}}" alt="test"></a></li>
          @auth
          <li><a href="dashboard" class="p-3  hover:bg-gray-100">Dashboard</a></li>
          <li><a href="demandes" class="p-3 hover:bg-gray-100">Demandes</a></li>
          @endauth
         
        </ul>

        <ul class="flex items-center">
            @auth
            <li><a href="profile" class="p-3"> Bonjour <span class="font-bold">{{auth()->user()->prenom}}</span> </a></li> 
            <li>
                <form action="{{ route('logout')}}" method="post">
                    @csrf
                    <button type="submit "  class="p-3"><i class="fa fa-sign-out text-blue-700 pr-2" aria-hidden="true"></i>déconnexion</button>
                
                
                </form> 
                </li>
                
           
             
            @endauth

            @guest
            <li><a href="{{ route('login')}}" class="p-3"> 
                    <i class="fa fa-sign-in text-blue-700 pr-2" aria-hidden="true"></i> Login</a></li>
            <li><a href="{{ route('register')}}" class="p-3"><i class="pr-2 fa-solid fa-user-plus text-blue-700"></i> Register</a></li>
            
            </ul>
            @endguest
            
    </nav>
    @yield('content')
</body>
</html>