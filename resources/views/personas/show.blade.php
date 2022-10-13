@extends('layouts.platillaPersonas')
@section('Title','Personas')
@section('subtitle')
Persona
@endsection

@section('contentP')

<div class="flex justify-center bg-gradient-to-r from-sky-500 to-indigo-500">
  <div class="max-w-sm rounded overflow-hidden shadow-lg bg-gradient-to-r from-violet-500 to-fuchsia-500">
    <img class="w-full" src="{{ URL::asset('user.png') }}" alt="Persona icono">
    <div class="px-6 py-4">
      <div class="font-bold text-xl mb-2">{{$persona->nombre}}</div>
      <p class="text-gray-700 text-base">
        <p><strong>Sexo:</strong>{{$persona->sexo}}</p>
        <p><strong>Edad:</strong>{{$persona->edad}} años</p>
        <p><strong>Estado civil:</strong>{{$persona->estadoCivil}}</p>
      </p>
      <p class="text-neutral-50 text-base">
        <p><a href="{{route('divorcios.historial',$persona)}}" >Historial de divorcios</a></p>
      </p>
    </div>
  
</div>
</div>


@endsection