@extends('layouts.plantillaMatrimonios')

@section('subtitle')
Show Matrimonio
@endsection

@section('contentM')
<div class="flex justify-center bg-gradient-to-r from-sky-500 to-indigo-500">
  <div class="max-w-sm rounded overflow-hidden shadow-lg bg-gradient-to-r from-violet-500 to-fuchsia-500">
    <img class="w-full" src="{{ URL::asset('user.png') }}" alt="Persona icono">
    <div class="px-6 py-4">
      <div class="font-bold text-xl mb-2">Matrimonio</div>
      <p class="text-gray-700 text-base">
       
        <?php
            $hombre = $matrimonioData[0];
            $mujer = $matrimonioData[1];
        ?>
        Marido: {{$hombre->nombre}}
        Mujer: {{$mujer->nombre}}
        <br>    
        Fecha:
      </p>
    </div>
  
</div>
</div>

<div class="md:container md:mx-auto bg-gradient-to-r from-sky-500 to-indigo-500">

</div>




@endsection