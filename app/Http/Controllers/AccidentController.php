<?php

namespace App\Http\Controllers;
use App\Models\Accident;
use Illuminate\Http\Request;

class AccidentController extends Controller
{
    //
    public function index(){


        $cursos = Accident::orderBy('id', 'desc')->get();
        return view('cursos.listar', compact('cursos'));


    }


    public function show(Accident $curso){


        return view('cursos.show',compact('curso'));




    }


    public function destroy (Accident $curso){
           
        $curso->delete();
        return redirect()->route('curso.index');
    }
   

    public function edit(Accident $curso){
        return view('cursos.edit', compact('curso'));
    }
    public function update(Request $request, Accident $curso){
        $curso->lugar = $request->lugar;
        $curso->fecha = $request->fecha;
        $curso->hora = $request->hora;
        
       
        $curso->save();
     
        return redirect()->route('curso.index');
     
      }
    public function create(){
        return view('cursos.create');
    }


    public function store(Request $request){
       
        $curso= new Accident();
        $curso->lugar=$request->lugar;
        $curso->fecha=$request->fecha;
        $curso->hora=$request-> hora;
        
        $curso->save();
   


    }


}
