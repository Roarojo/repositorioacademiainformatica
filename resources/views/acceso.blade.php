@extends('layouts.app')
@section('titulo')
    Dashboard
@endsection
@section('contenido')
<div class="flex min-h-full items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
   <section class="container-fluid mx-auto mt-10>
    @if (session('creado'))
    @push('scripts')
       <!--<script>
         //alert('Hola Mundo')
       </script>-->
     <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
       <script>
           Swal.fire({
                 position: 'top-end',
                 icon: 'success',
                 title: 'Usuario creado correctamente',
                 showConfirmButton: false,
                 timer: 1500
               })
       </script>
     @endpush    
 @endif
        <div>
            <h1 class="text-3xl font-bold tracking-tight text-gray-900">DASHBOARD </h1>
           
        </div>
        <div class="overflow-x-auto relative shadow-md sm:rounded-lg p-10">
          <div class="overflow-x-auto relative shadow-md sm:rounded-lg">

            @if (@auth()->user()->rol === 'Admin' )

            <!--inicio del dashboard administrador-->
            <div class="bg-white">
                <div class="mx-auto max-w-2xl py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
                  <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                    <div class="group relative">
                      <div class="overflow-hidden rounded-md bg-gray-200 group-hover:opacity-75">
                        <img src="{{asset('imagenes/alunos.png')}}" alt="Front of men&#039;s Basic Tee in black." class="mx-auto object-cover object-center">
                      </div>
                      <div class="mt-4 flex justify-between">
                        <div>
                          <h3 class="text-sm text-gray-700">
                            <form class="mt-8 space-y-6" action="{{route('mostrar.usuarios')}}" method="POST">
                              @csrf  
                            <button type="submit">
                              <span aria-hidden="true" class="absolute inset-0"></span>
                             USUARIOS
                            </button>
                            </form>  
                          </h3>
                          <p class="mt-1 text-sm text-gray-500">Black</p>
                        </div>
                        <p class="text-sm font-medium text-gray-900">$35</p>
                      </div>
                    </div>
              <!--2-->
              <div class="group relative">
                <div class="overflow-hidden rounded-md bg-gray-200 group-hover:opacity-75">
                  <img src="{{asset('imagenes/descarga.jpg')}}" alt="Front of men&#039;s Basic Tee in black." class="mx-auto object-cover object-center">
                </div>
                <div class="mt-4 flex justify-between">
                  <div>
                    <h3 class="text-sm text-gray-700">
                      <a href="#">
                        <span aria-hidden="true" class="absolute inset-0"></span>
                        MATERIAS
                      </a>
                    </h3>
                    <p class="mt-1 text-sm text-gray-500">Black</p>
                  </div>
                  <p class="text-sm font-medium text-gray-900">$35</p>
                </div>
              </div>
              <!--3-->
              <div class="group relative">
                <div class="overflow-hidden rounded-md bg-gray-200 group-hover:opacity-75">
                  <img src="{{asset('imagenes/profesor.jpg')}}" alt="Front of men&#039;s Basic Tee in black." class="mx-auto object-cover object-center">
                </div>
                <div class="mt-4 flex justify-between">
                  <div>
                    <h3 class="text-sm text-gray-700">
                      <a href="{{route('mostrar.profesor')}}">
                        <span aria-hidden="true" class="absolute inset-0"></span>
                        PROFESORES
                      </a>
                    </h3>
                    <p class="mt-1 text-sm text-gray-500">Black</p>
                  </div>
                  <p class="text-sm font-medium text-gray-900">$35</p>
                </div>
              </div>
              <!--4-->
              <div class="group relative">
                <div class="overflow-hidden rounded-md bg-gray-200 group-hover:opacity-75">
                  <img src="{{asset('imagenes/calificaciones.jpg')}}" alt="Front of men&#039;s Basic Tee in black." class="mx-auto object-cover object-center">
                </div>
                <div class="mt-4 flex justify-between">
                  <div>
                    <h3 class="text-sm text-gray-700">
                      <a href="#">
                        <span aria-hidden="true" class="absolute inset-0"></span>
                        CALIFICACIONES
                      </a>
                    </h3>
                    <p class="mt-1 text-sm text-gray-500">Black</p>
                  </div>
                  <p class="text-sm font-medium text-gray-900">$35</p>
                </div>
              </div>
                    <!-- More products... -->
                  </div>
                </div>
              </div>

            <!--Fin del dashboard administrador-->
                 
       

            @else

            <!--Inicio del dashboard usuario normal-->
            <div class="bg-white">
                <div class="mx-auto max-w-2xl py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
                  <h2 class="text-2xl font-bold tracking-tight text-gray-900">Customers also purchased</h2>
              
                  <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-3 xl:gap-x-8">
                    <div class="group relative">
                      <div class="overflow-hidden rounded-md bg-gray-200 group-hover:opacity-75">
                        <img src="{{asset('imagenes/descarga.jpg')}}" alt="Front of men&#039;s Basic Tee in black." class="mx-auto object-cover object-center ">
                      </div>
                      <div class="mt-4 flex justify-between">
                        <div>
                          <h3 class="text-sm text-gray-700">
                            <a href="#">
                              <span aria-hidden="true" class="absolute inset-0"></span>
                              MATERIAS
                            </a>
                          </h3>
                          <p class="mt-1 text-sm text-gray-500">Black</p>
                        </div>
                        <p class="text-sm font-medium text-gray-900">$35</p>
                      </div>
                    </div>

                    <!--2-->
                    <div class="group relative">
                        <div class="overflow-hidden rounded-md bg-gray-200 group-hover:opacity-75">
                          <img src="{{asset('imagenes/calificaciones.jpg')}}" alt="Front of men&#039;s Basic Tee in black." class="mx-auto object-cover object-center ">
                        </div>
                        <div class="mt-4 flex justify-between">
                          <div>
                            <h3 class="text-sm text-gray-700">
                              <a href="#">
                                <span aria-hidden="true" class="absolute inset-0"></span>
                                CALIFICACIONES
                              </a>
                            </h3>
                            <p class="mt-1 text-sm text-gray-500">Black</p>
                          </div>
                          <p class="text-sm font-medium text-gray-900">$35</p>
                        </div>
                      </div>
                      <!--3-->
                      <div class="group relative">
                        <div class="overflow-hidden rounded-md bg-gray-200 group-hover:opacity-75">
                          <img src="{{asset('imagenes/profesor.jpg')}}" alt="Front of men&#039;s Basic Tee in black." class="mx-auto object-cover object-center ">
                        </div>
                        <div class="mt-4 flex justify-between">
                          <div>
                            <h3 class="text-sm text-gray-700">
                              <a href="#">
                             <!--   <span aria-hidden="true" class="absolute inset-0"></span>-->
                                PROFESORES
                              </a>
                            </h3>
                            <p class="mt-1 text-sm text-gray-500">Black</p>
                          </div>
                          <p class="text-sm font-medium text-gray-900">$35</p>
                        </div>
                      </div>
              
                    <!-- More products... -->
                  </div>
                </div>
              </div>

            <!--Fin de dashboard usuario-->

         
            @endif

            
        </div>
  </div>
    </section>
   

</div>
@endsection