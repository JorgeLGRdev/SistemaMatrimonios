@extends('layouts.plantillaMatrimonios')

@section('subtitle')
Agregar matrimonio
@endsection

@section('contentM')

<div class="flex justify-center bg-gradient-to-r from-sky-500 to-indigo-500">
    <div>
<!--formulario-->
<form action="{{route('matrimonios.store')}}" method="POST" class='w-full max-w-sm '>
  @csrf
    <!--Hombre-->
    <div class="md:flex md:items-center mb-6">
      <div class="md:w-1/3">
        <label class="block text-neutral-50 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
          Marido
        </label>
      </div>
      <div class="relative">
        <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state" name="idHombre">
          @foreach ($personas as $persona)
              <option>{{$persona->nombre}}</option>
          @endforeach

        </select>
        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
        </div>
      </div>
    </div>

  <!--Mujer-->
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-neutral-50  font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
        Mujer
      </label>
    </div>
    <div class="relative">
      <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state" name="idMujer">
          @foreach ($personas as $persona)
          <option>{{$persona->nombre}}</option>
      @endforeach
      </select>
      <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
      </div>
    </div>
  </div>
  
  <!--boton-->
  <div class="md:flex md:items-center">
    <div class="md:w-1/3"></div>
    <div class="md:w-2/3">
      <button class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
        Registrar matrimonio
      </button>
    </div>
  </div>
</form>
    </div>
    


  </div>


@endsection