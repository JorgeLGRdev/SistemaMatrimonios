@extends('layouts.plantilla')

@section('Title','Matrimonios')

@section('content')
<div class="md:container md:mx-auto bg-emerald-300">
    <!--Matrimonios NAVBAR-->
    <div class="flex items-center flex-shrink-0 text-neutral-50 mr-6">
        <span class="font-semibold text-xl tracking-tight">@yield('subtitle')</span>            
        <div>
          <a href="{{route('matrimonios.create')}}" class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal-500 hover:bg-white mt-4 lg:mt-0">
            Agregar matrimonio
        </a>
        </div>
   
      </div>

    <!--Layout-->
        
            @yield('contentM')
  </div>

@endsection