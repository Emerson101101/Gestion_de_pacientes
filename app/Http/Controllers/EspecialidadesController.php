<?php

namespace App\Http\Controllers;
use App\Models\especialidad;

use Illuminate\Http\Request;

class EspecialidadesController extends Controller
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
        $especialidad = especialidad::All();
        
        return view('/especialidades/show',['especialidad'=>$especialidad]);
}


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/especialidades/create'); 
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
            'nombre' => 'required|string',
        ], [
            'nombre.required' => 'El campo nombre es obligatorio.',
        ]);
            // Enviar insert 
            especialidad::create($data); 
            // Redireccionar 
            return redirect('/especialidades/show'); 
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
    public function edit(especialidad $especialidad)
    {
       

        return view('especialidades/update')->with(['especialidad'=>$especialidad]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, especialidad $especialidad )
    {
        $data = request()->validate([ 
            'nombre' => 'required|string',
        ], [
            'nombre.required' => 'El campo nombre es obligatorio.',
        ]);

            $especialidad->nombre = $data['nombre']; 
            $especialidad->updated_at = now();
            $especialidad->save(); 
            // Redireccionar 
            return redirect('/especialidades/show'); 
     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        especialidad::destroy($id);
        return response()->json(array('res'=>true)); 
    }
}
