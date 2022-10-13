@extends('layouts.plantilla')

@section('Title','Divorcios')

@section('content')
<div class="md:container md:mx-auto bg-emerald-300">
    <!--Matrimonios NAVBAR-->
    <div class="flex items-center flex-shrink-0 text-neutral-50 mr-6">
        <span class="font-semibold text-xl tracking-tight">@yield('subtitle')</span>            
     
    </div>

    <!--Layout-->
        
            @yield('contentM')
  </div>

@endsection