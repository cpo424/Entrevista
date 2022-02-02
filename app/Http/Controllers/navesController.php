<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\nave;
use App\Models\piloto;

class navesController extends Controller
{
    public function store(Request $request){

        $nave=new nave;
        $nave->name = $request->name;
        $nave->piloto_id=$request->piloto_id;
        $nave->save();

        return redirect()->route('naves')->with('success','Nave creada correctamente');
    }    

    public function index(){
        $naves = nave::all();
        $pilotos = piloto::all();
        return view('naves.index', ['naves'=>$naves,'pilotos'=>$pilotos]);
    }
    public function show($id){
        $nave = nave::find($id);
        return view('naves.show', ['nave'=>$nave]);
    }
    public function update(Request $request, $id){
        $nave = nave::find($id);
        $nave->name = $request->name;
        $nave->save();
        /*return view('naves.index', ['success'=>'Nave actualizada']);*/
        return redirect()->route('naves')->with('success','Nave actualizada correctamente');
    }
    public function destroy($id){
        $nave = nave::find($id);
        /*$nave->pilotos()->each(function($piloto){
            $piloto->delete();
        });
        $nave->delete();*/
        /*return view('naves.index', ['naves'=>$naves]);*/
        return redirect()->route('naves')->with('success','Nave eliminada correctamente');
    }

}



