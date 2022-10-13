@extends('layouts.plantillaMatrimonios')

@section('subtitle')
Matrimonios
@endsection

@section('contentM')


@if (sizeOf($matrimonios)==0)
<h1 class="mb-1 text-xl font-bold">No se ha registrado matrimonios</h1>
@else
    
<div class="md:container md:mx-auto bg-gradient-to-r from-sky-500 to-indigo-500">

    <!--Tabla-->
    <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
      <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
          <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
              <tr>
                  <th scope="col" class="py-3 px-6">
                      ID
                  </th>
                  <th scope="col" class="py-3 px-6">
                      Hombre
                  </th>
                  <th scope="col" class="py-3 px-6">
                      Mujer
                  </th>
                  <th scope="col" class="py-3 px-6">
                      <span class="sr-only">Edit</span>
                  </th>
              </tr>
          </thead>

          <tbody>

            <!--ForEach-->
            @foreach ($matrimonios as $matrimonio)

              <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                  <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$matrimonio->id}}                  
                  </th>
                  <td class="py-4 px-6">
                    {{$matrimonio->nombreH}}                  

                  </td>
                  <td class="py-4 px-6">
                    {{$matrimonio->nombreM}}                  

                  </td>
               
                  <td class="py-4 px-6 text-right">                 
                        <form action="{{route('matrimonios.destroy', $matrimonio)}}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit">Divorciar</button>
                        </form>
                    </td>
              </tr>
              @endforeach

          </tbody>
      </table>
      </div>
        
    
</div>
@endif



@endsection