@extends('layouts.platillaPersonas')

@section('Title','Personas')
@section('subtitle')
Personas divorciadas
@endsection

@section('contentP')


@if (sizeOf($personas)==0)
<h1 class="mb-1 text-xl font-bold">No hay personas divorciadas</h1>
@else
 
  <!--Tabla-->
  <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                    Nombre
                </th>
                <th scope="col" class="py-3 px-6">
                  Sexo
                </th>
                <th scope="col" class="py-3 px-6">
                    Edad
                </th>
                <th scope="col" class="py-3 px-6">
                  Estado civil
                </th>
                <th scope="col" class="py-3 px-6">
                    <span class="sr-only">Edit</span>
                </th>
            </tr>
        </thead>

        <tbody>

          <!--ForEach-->
          @foreach ($personas as $persona)

            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                  
                  <a href="{{route('personas.show',$persona)}}">
                    {{$persona->nombre}}  
                  </a>
                </th>

                <td class="py-4 px-6">
                  {{$persona->sexo}}                  

                </td>

                <td class="py-4 px-6">
                  {{$persona->edad}}                  

                </td>
               
                <td class="py-4 px-6">
                  {{$persona->estadoCivil}}                  

                </td>
             
                <td class="py-4 px-6 text-right">
                    <a href="{{route('personas.edit',$persona)}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Editar</a>
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Eliminar</a>

                  </td>
            </tr>
            @endforeach

        </tbody>
    </table>
    </div>
      
  
</div>

@endif

@endsection