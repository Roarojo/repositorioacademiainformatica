@extends('layouts.app')
@section('titulo')
    Dashboard
@endsection
@section('contenido')
<div class="flex min-h-full items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
   <section class="container-fluid mx-auto mt-10>
        <div>
            <h1 class="text-3xl font-bold tracking-tight text-gray-900">DASHBOARD </h1>
            <h1 class="text-3xl font-bold tracking-tight text-gray-900">{{auth()->user()->name}}</h1>
        </div>
    </section>
   
  <div class="overflow-x-auto relative shadow-md sm:rounded-lg p-10">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                   ID
                </th>
                <th scope="col" class="py-3 px-6">
                    Nombre
                </th>
                <th scope="col" class="py-3 px-6">
                    Email
                </th>
                <th scope="col" class="py-3 px-6">
                    
                </th>
                <th scope="col" class="py-3 px-6">
                    
                </th>
            </tr>
        </thead>
        
        @foreach ($user as $dato)
         @if ($dato->email===auth()->user()->email)
             
         @else
             
         
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$dato->id}}
                    </th>
                    <td class="py-4 px-6">
                        {{$dato->name}}
                    </td>
                    <td class="py-4 px-6">
                        {{$dato->email}}
                    </td>
                    <td class="py-4 px-6">
                        <!--sweetalert crear-->
                    @if (session('modificado'))
                    @push('scripts')
                        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                        <script>
                            Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Elemento Modificado',
                        showConfirmButton: false,
                        timer: 1500
                        })
                        </script>
                        @endpush    
                    @endif
                    <!--fin sweetalert crear-->
                        <form action="{{route('post.modificar',$dato->id)}}" method="POST">
                            @csrf
                        <button
                            type="submit" 
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                                Editar
                        </button>
                        </form>
                    
                    </td>
                    <td class="py-4 px-6">
                    <form action="{{route('post.destroy',$dato->id)}}" method="POST">
                    <!--sweetalert crear-->
                    @if (session('creado'))
                        @push('scripts')
                        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                        <script>
                            Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: 'Elemento Creado',
                            showConfirmButton: false,
                            timer: 1500
                        })
                        </script>
                        @endpush    
                    @endif
                    <!--fin sweetalert crear-->
                        <!--inicio del sweetalert Eliminar-->
                        @if (session('mensaje'))
                        @push('scripts')
                        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                        <script>
                            Swal.fire({
                            position: 'top-end',
                            icon: 'warning',
                            title: 'Elemento Eliminado',
                            showConfirmButton: false,
                            timer: 1500
                        })
                        </script>
                        @endpush    
                    @endif
                        <!--fin del sweetalert-->
                                @method('DELETE') 
                                @csrf
                            <button 
                                type="submit" 
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                                    Eliminar
                            </button>
                    </form>
                    </td>
                </tr>
            
            </tbody>
            @endif  
        @endforeach
     </table> 
    </div>
    
</div>
@endsection