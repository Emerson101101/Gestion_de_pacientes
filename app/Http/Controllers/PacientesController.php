<?php

namespace App\Http\Controllers;
use App\Models\pacientes;

use Illuminate\Http\Request;

class PacientesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pacientes = pacientes::All();
        
        return view('/pacientes/show')->with(['pacientes'=>$pacientes]);
}


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/pacientes/create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->validate([ 
            'nombre'=> 'required',
            'edad'=> 'required',
            'telefono'=> 'required',
            'direccion'=> 'required',
            'detallesconsulta'=> 'required'

            ]); 
            // Enviar insert 
            pacientes::create($data); 
            // Redireccionar 
            return redirect('/pacientes/show'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(pacientes $pacientes)
    {
       

        return view('pacientes/update')->with(['pacientes'=>$pacientes]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pacientes $pacientes )
    {
        $data = request()->validate([ 
            'nombre' => 'required',
            'edad'=> 'required',
            'telefono'=> 'required',
            'direccion'=> 'required',
            'detallesconsulta'=> 'required'
            ]); 

            $pacientes->nombre = $data['nombre']; 
            $pacientes->edad = $data['edad']; 
            $pacientes->telefono = $data['telefono']; 
            $pacientes->direccion = $data['direccion']; 
            $pacientes->detallesconsulta = $data['detallesconsulta']; 
            $pacientes->updated_at = now();
            $pacientes->save(); 
            // Redireccionar 
            return redirect('/pacientes/show'); 
     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        pacientes::destroy($id);
        return response()->json(array('res'=>true)); 
    }
}
