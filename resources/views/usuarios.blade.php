@extends('layouts.app')
@section('titulo')
    Dashboard Usuarios
@endsection
@section('contenido')
<div class="flex min-h-full items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                    ID
                </th>
                <th scope="col" class="py-3 px-6">
                    <div class="flex items-center">
                        Nombre
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="ml-1 w-3 h-3" aria-hidden="true" fill="currentColor" viewBox="0 0 320 512"><path d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z"/></svg></a>
                    </div>
                </th>
                <th scope="col" class="py-3 px-6">
                    <div class="flex items-center">
                        Email
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="ml-1 w-3 h-3" aria-hidden="true" fill="currentColor" viewBox="0 0 320 512"><path d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z"/></svg></a>
                    </div>
                </th>
                <th scope="col" class="py-3 px-6">
                    <div class="flex items-center">
                        Rol
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="ml-1 w-3 h-3" aria-hidden="true" fill="currentColor" viewBox="0 0 320 512"><path d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z"/></svg></a>
                    </div>
                </th>  

                <th scope="col" class="py-3 px-6">
                    <div class="flex items-center">
                        Editar
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="ml-1 w-3 h-3" aria-hidden="true" fill="currentColor" viewBox="0 0 320 512"><path d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z"/></svg></a>
                    </div>
                </th> 
                <th scope="col" class="py-3 px-6">
                    <div class="flex items-center">
                        Eliminar
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="ml-1 w-3 h-3" aria-hidden="true" fill="currentColor" viewBox="0 0 320 512"><path d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z"/></svg></a>
                    </div>
                </th>  
                <th scope="col" class="py-3 px-6">
                    <div class="flex items-center">
                        Editar Rol
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="ml-1 w-3 h-3" aria-hidden="true" fill="currentColor" viewBox="0 0 320 512"><path d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z"/></svg></a>
                    </div>
                </th>       
            </tr>
        </thead>
        <tbody>
        @foreach ($user as $dato )
        @if ($dato->email === @auth()->user()->email)
        @else
        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
            <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
               {{$dato->id}}
            </th>
            <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
               {{$dato->name}}
            </th>
            <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
               {{$dato->email}}
            </th>
            <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                {{$dato->rol}}
             </th>
           <form action="{{route('post.edit',$dato->id)}}" method="POST">
            @if (session('modificado'))
                @push('scripts')
                <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                <script>
                    Swal.fire({
                          position: 'top-end',
                          icon: 'success',
                          title: 'Usuario fue modificado correctamente',
                          showConfirmButton: false,
                          timer: 1500
                        })
                </script>
                @endpush
            @endif
            @csrf
            <td class="py-4 px-6 text-right">
                <button  
                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                    Editar
                </button>
            </td>
           </form>
          <form action="{{route('post.delete',$dato->id)}}" method="POST">
            @if (session('mensaje'))
                @push('scripts')
                <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                <script>
                    Swal.fire({
                          position: 'top-end',
                          icon: 'success',
                          title: 'Usuario fue eliminado correctamente',
                          showConfirmButton: false,
                          timer: 1500
                        })
                </script>
                @endpush
            @endif
            @method('DELETE')  
            @csrf
            <td class="py-4 px-6 text-right">
              <button  
                 class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                 Eliminar
              </button>
          </td>
          </form>
          <form action="{{route('post.rol',$dato->id)}}" method="POST">
            @if (session('mensaje'))
                @push('scripts')
                <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                <script>
                    Swal.fire({
                          position: 'top-end',
                          icon: 'success',
                          title: 'Usuario fue Modificado su rol correctamente',
                          showConfirmButton: false,
                          timer: 1500
                        })
                </script>
                @endpush
            @endif
            @csrf
            <td class="py-4 px-6 text-right">
              <button  
                 class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                 Editar Rol
              </button>
          </td>
          </form>
        </tr>
            @endif 
            @endforeach
        </tbody>
    </table>
</div>
@endsection
