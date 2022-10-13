@extends('layouts.platillaPersonas')

@section('Title','personas create')
@section('subtitle')
Agregar persona
@endsection

@section('contentP')

    <div class="flex justify-center bg-gradient-to-r from-sky-500 to-indigo-500">
      <div>
        <!--formulario-->
        <form action="{{route('personas.store')}}" method="POST" class='w-full max-w-sm '>
            @csrf

            <!--nombre-->
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                  <label class="block text-neutral-50 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                    Nombre
                  </label>
                </div>
                <div class="md:w-2/3">
                  <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text" name="nombre">
                </div>

                @error('nombre')
                <div class="md:w-3/3">
                  
                  <small>{{$message}}</small>
                  
                </div>
                @enderror
              </div>

              <!--sexo-->
              <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                  <label class="block text-neutral-50 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                    Sexo
                  </label>
                </div>
                <div class="relative">
                  <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state" name="sexo">
                    <option>Hombre</option>
                    <option>Mujer</option>
                  </select>
                  <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                  </div>
                </div>
              </div>

              <!--edad-->
              <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                  <label class="block text-neutral-50 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                    Edad
                  </label>
                </div>
                <div class="md:w-2/3">
                  <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="number" name="edad">
                </div>
                @error('edad')
                <div class="md:w-3/3">
                  
                  <small>{{$message}}</small>
                  
                </div>
                @enderror
              </div>

            <!--estadocivil-->
            <div class="md:flex md:items-center mb-6">
              <div class="md:w-1/3">
                <label class="block text-neutral-50 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                  Estado civil
                </label>
              </div>
              <div class="relative">
                <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state" name="estadoCivil">
                  <option>Soltero</option>
                  <option>Casado</option>
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
                  Guardar
                </button>
              </div>
            </div>
        </form>
      </div>


      </div>

   

@endsection