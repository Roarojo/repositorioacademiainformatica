@extends('layouts.app')
@section('titulo')
  Modificar Rol
@endsection
@section('contenido')

<div class="flex min-h-full items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="p-6 w-full max-w-md space-y-8 shadow-md border border-gray-200 rounded-lg">
      <div>
        <img class="mx-auto h-36 w-auto " src="{{asset('imagenes/registrar.png')}}" alt="Practica con Laravel">
        <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900">Editar Rol</h2>
        
      </div>
      <form class="mt-8 space-y-6" action="#" method="POST">
        @csrf
        <input type="hidden" name="remember" value="true">
        <div class="-space-y-px rounded-md shadow-sm">
          <div>
            <label for="name" class="sr-only">Nombre</label>
            <input 
              id="name" 
              readonly
              name="name" 
              type="text"  
              class="border p-3 w-full rounded-lg @error('name') border-red-500 @enderror" 
              value="{{$user->name}}" 
              placeholder=""/>
              @error('name')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                     {{$message}}
                </p>
              @enderror
          </div>
        <div>
            <select class="border p-3 w-full rounded-lg border-red-500"
                   name="puesto" 
                   id="puesto">
                   @foreach ($rol as $r)
                        <option value="{{$r->rol}}">{{$r->rol}}</option>
                   @endforeach  
            </select>
        </div>
          
          
        </div>
        <div>
          <button type="submit" class="group relative flex w-full justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
            <span class="absolute inset-y-0 left-0 flex items-center pl-3">
              <!-- Heroicon name: mini/lock-closed -->
              <svg class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M10 1a4.5 4.5 0 00-4.5 4.5V9H5a2 2 0 00-2 2v6a2 2 0 002 2h10a2 2 0 002-2v-6a2 2 0 00-2-2h-.5V5.5A4.5 4.5 0 0010 1zm3 8V5.5a3 3 0 10-6 0V9h6z" clip-rule="evenodd" />
              </svg>
            </span>
            Modificar
          </button>
        </div>
      </form>
    </div>
  </div>


@endsection