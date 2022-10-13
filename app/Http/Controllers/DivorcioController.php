<?php

namespace App\Http\Controllers;

use App\Models\Divorcio;
use App\Models\Persona;

use Illuminate\Http\Request;

class DivorcioController extends Controller
{
    public function index(){
        $divorcios = Divorcio::orderBy('id','desc')->paginate();       
        return view('divorcios.index', compact('divorcios')); 
    }

    public function historial(Persona $persona){
        if($persona->sexo=='Hombre'){
            $divorcios = Divorcio::where('nombreH', $persona->nombre)->orderBy('id','desc')->paginate();       
        }else{
            $divorcios = Divorcio::where('nombreM', $persona->nombre)->orderBy('id','desc')->paginate();       
        }
        return view('divorcios.historial',compact('divorcios'), compact('persona') );
    }
}
