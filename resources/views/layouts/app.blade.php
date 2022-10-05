<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   @vite('resources/css/app.css')
  <title>@yield('titulo')</title>

</head>
<body class="bg-gray-100">
<header class="p-5 border-b bg-white shadow">
  <div class="container mx-auto flex justify-between p-2">
     <h1 class="text-3xl font-black">
        Practica con Tailwind
     </h1>
     @auth
        <nav class="flex gap-2 items-center">
          <a class="font-bold  text-gray-600 text-sm">
            <spam>
              {{auth()->user()->email}}
            </spam>
          </a>
        <!--  <a class="font-bold uppercase text-gray-600 text-sm" href="{{ route('logout') }}">
            Cerrar Sesion
        </a>-->
        <form method="POST" action="{{route('logout')}}">
          @csrf
            <button type="submit" class="font-bold uppercase text-gray-600 text-sm">
              Cerrar Sesion
            </button>
        </form>
        </nav>
     @endauth
        
     @guest
        <nav class="flex gap-2 items-center">
          <a class="font-bold uppercase text-gray-600 text-sm" href="{{ route('index') }}">
            Login
          </a>
          <a class="font-bold uppercase text-gray-600 text-sm" href="{{ route('crear-cuenta') }}">
            Crear Cuenta
        </a>
        </nav>
     @endguest
          
     
     
  </div>
</header>
  @yield('contenido')
  @stack('scripts')
</body>
</html>