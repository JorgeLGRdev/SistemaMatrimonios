<?php

namespace App\Http\Controllers;

use App\Models\Persona as ModelsPersona;
use Illuminate\Http\Request;
use Persona;

class principalController extends Controller
{
    
    public function createPersona(){
        return view('personas.createPersona');
    }

    public function listPersonas(){
        $personas = ModelsPersona::orderBy('id','desc')->paginate();       
        return view('personas.personas', compact('personas')); 
       // return view('personas');
    }

    public function listCasados(){
       //$personas = ModelsPersona::orderBy('id','desc')->paginate(); 
       $personas = ModelsPersona::where('estadoCivil','Casado')->get();     
        return view('personas.casados', compact('personas')); 
    }

    public function listSolteros(){
        //$personas = ModelsPersona::orderBy('id','desc')->paginate(); 
        $personas = ModelsPersona::where('estadoCivil','Soltero')->get();     
         return view('personas.solteros', compact('personas')); 
     }

     public function listDivorciados(){
        //$personas = ModelsPersona::orderBy('id','desc')->paginate(); 
        $personas = ModelsPersona::where('estadoCivil','Divorciado')->get();     
         return view('personas.divorciados', compact('personas')); 
     }

    public function show(ModelsPersona $persona){
        return view('personas.show', compact('persona'));
    }

    public function store(Request $request){
       
        //return $request->all();
        /*
         $curso = new Curso();
         $curso->name = $request->name;
         $curso->description = $request->description;
         $curso->categoria = $request->categoria;
         $curso->save();
        */
        $request->validate([
            'nombre' => 'required',
            'sexo' => 'required',
            'edad' => 'required',
            'estadoCivil' => 'required'
        ]);
        
        //asignación masiva
        $persona = ModelsPersona::create($request->all());

        // debe redirigir a personas.show
         return redirect()->route('personas.listPersonas',$persona);
     }


     public function edit(ModelsPersona $persona){
          return view('personas.edit', compact('persona'));
      }
  
      public function update(Request $request,ModelsPersona $persona) {
  
         $request->validate([
             'nombre' => 'required',
             'edad' => 'required',
             'sexo' => 'required',
             'estadoCivil' => 'required'
         ]);
                
         //$persona->nombre = $request->nombre;
         //$persona->edad = $request->edad;
         //$persona->sexo = $request->sexo;
        // $persona->estadoCivil = $request->estadoCivil;
        // $persona->save();
         
         //ASIGNACIÓN MASIVA
         $persona->update($request->all());
         return redirect()-> route('personas.show',$persona);
      }

      public function destroy(ModelsPersona $persona){
        $persona->delete();
        return redirect()-> route('personas.listPersonas');

      }

}
