@extends('layouts.plantilla')

@section('Title','Personas')

@section('content')
<div class="md:container md:mx-auto bg-emerald-300">
  <!--Personas NAVBAR-->
  <div class="flex items-center flex-shrink-0 text-neutral-50 mr-6">
    <span class="font-semibold text-xl tracking-tight">@yield('subtitle')</span>            
    <div>
      <a href="{{route('personas.createPersona')}}" class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal-500 hover:bg-white mt-4 lg:mt-0">
        Agregar persona
    </a>
    </div>
    <div>
        <a href="{{route('personas.listCasados')}}" class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal-500 hover:bg-white mt-4 lg:mt-0">
            Casados
        </a>
    </div>
    <div>
        <a href="{{route('personas.listSolteros')}}" class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal-500 hover:bg-white mt-4 lg:mt-0">
            Solteros
        </a>
    </div>
    <div>
      <a href="{{route('personas.listDivorciados')}}" class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal-500 hover:bg-white mt-4 lg:mt-0">
      Divorciados
      </a>
  </div>
    <div>
        <a href="{{route('personas.listPersonas')}}" class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal-500 hover:bg-white mt-4 lg:mt-0">
            Todos
        </a>
    </div>
  </div>

  <!--Layout-->    
   @yield('contentP')
</div>

@endsection


