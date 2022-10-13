@extends('layouts.plantillaDivorcios')

@section('subtitle')
Divorcios
@endsection

@section('contentM')
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
             
              </tr>
          </thead>

          <tbody>

            <!--ForEach-->
            @foreach ($divorcios as $divorcio)

              <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                  <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$divorcio->id}}                  
                  </th>
                  <td class="py-4 px-6">
                    {{$divorcio->nombreH}}                  

                  </td>
                  <td class="py-4 px-6">
                    {{$divorcio->nombreM}}                  

                  </td>
                 
              </tr>
              @endforeach

          </tbody>
      </table>
      </div>
        
</div>

@endsection