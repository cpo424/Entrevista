<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\piloto;

class pilotosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pilotos=piloto::all();
        return view('pilotos.index',['pilotos'=>$pilotos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $piloto=new piloto;
        $piloto->name=$request->name;
        $piloto->save();

        return redirect()->route('piloto.index')->with('success','Nuevo piloto agregado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $piloto=piloto::find($id);
        return view('pilotos.show',['piloto'=> $piloto]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $piloto=piloto::find($id);
        $piloto->name=$request->name;
        $piloto->save();

        return redirect()->route('piloto.index')->with('success','Piloto actualizado correctamente');
    }

    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($piloto)
    {
        $piloto=piloto::find($id);
        $piloto->delete();

        return redirect()->route('pilotos')->with('success','Piloto eliminado correctamente');
    }
}
