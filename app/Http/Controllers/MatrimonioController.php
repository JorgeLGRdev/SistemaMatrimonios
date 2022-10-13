<?php

namespace App\Http\Controllers;

use App\Models\Divorcio;
use App\Models\Matrimonio;
use App\Models\Persona;
use Illuminate\Http\Request;

class MatrimonioController extends Controller
{
    //
    public function index(){
        $matrimonios = Matrimonio::where('estado','Activo')->orderBy('id','desc')->paginate();       
        return view('matrimonios.index', compact('matrimonios')); 
    }

    public function create(){
        //return view('matrimonios.create');
        $personas = Persona::orderBy('id','desc')->paginate();       
        return view('matrimonios.create', compact('personas')); 
    }

    public function store(Request $request){
        //$matrimonio = Matrimonio::create($request->all());
        //obtener los nombres y buscarlos buscarlos en la BD
        //$hombre = Persona::find($request->idHombre);
        //$mujer = Persona::find($request->idMujer);

        $hombre = Persona::where('nombre', $request->idHombre)->first();
        $mujer = Persona::where('nombre', $request->idMujer)->first();

        //Validar edad
        if($hombre->edad >= 18 && $mujer->edad >= 18){
            //Validar estado civil
            if($hombre->estadoCivil == 'Soltero' && $mujer->estadoCivil == 'Soltero'){
                $matrimonio = new Matrimonio();
                $matrimonio->idHombre = $hombre->id;
                $matrimonio->idMujer = $mujer->id;
                $matrimonio->nombreH = $hombre->nombre;
                $matrimonio->nombreM = $mujer->nombre;
                $matrimonio->estado = 'activo';
                $matrimonio->save();

                //Actualizar estado civil 
                $hombre->estadoCivil = 'Casado';
                $mujer->estadoCivil = 'Casado';
                $hombre->save();
                $mujer->save();
            }else{
                //no soltero

            }
            
        }else{
            //menor de edad

        }

        //return redirect()->route('matrimonios.show',$matrimonio);
        return redirect()->route('matrimonios.index');
     }

     public function show(Matrimonio $matrimonio){
        $hombre = Persona::where('id',$matrimonio->idHombre)->first();
        $mujer = Persona::where('id',$matrimonio->idMujer)->first();

        $matrimonioData = [$hombre,$mujer];
        //debe pasar matrimonioData
        return view('matrimonios.show', compact('matrimonioData'));
    }


    public function destroy(Matrimonio $matrimonio){
        if($matrimonio->estado=='activo'){
            //actualizar estado en la tabla matrimonios
            $matrimonio->estado = 'inactivo';
            $matrimonio->save();
            //actualizar estado civil: divorciado
            $hombre = Persona::where('nombre', $matrimonio->nombreH)->first();
            $mujer = Persona::where('nombre', $matrimonio->nombreM)->first();
            $hombre->estadoCivil ='Divorciado';
            $mujer->estadoCivil ='Divorciado';
            $hombre->save();
            $mujer->save();
            //insertar registro en tabla divorcios nombreH nombreM
            $divorcio = new Divorcio();
            $divorcio->nombreH = $hombre->nombre;
            $divorcio->nombreM = $mujer->nombre;
            $divorcio->save();
            //return redirect()->route('matrimonios.index');
            return view('divorcios.index');
        }
        
    }

}
