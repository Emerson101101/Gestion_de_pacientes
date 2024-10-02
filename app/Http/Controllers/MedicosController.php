<?php

namespace App\Http\Controllers;
use App\Models\medico;


use Illuminate\Http\Request;

class MedicosController extends Controller
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
        //listar todos los productos
        $medico = medico::all();
        dd($medico); 
        
            return view('/medicos/odontologos/show'); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = categorias::all();
        return view('/clientes/create')->with(['categorias'=>$categorias]); 
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
            'categoria'=> 'required'
            ]); 
            // Enviar insert 
            medico::create($data); 
            // Redireccionar 
            return redirect('/medicos/odontologos/show'); 
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
    public function edit(clientes $clientes)
    {
        $categorias = Categorias::all(); 

        return view('clientes/update')->with(['cliente'=>$clientes,'categorias'=>$categorias]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,clientes $clientes)
    {
        $data = request()->validate([ 
            'nombre' => 'required', 
            'edad' => 'required', 
            'categoria' => 'required'
            ]); 

            $clientes->nombre = $data['nombre']; 
            $clientes->edad = $data['edad']; 
            $clientes->categoria = $data['categoria'];
            $clientes->updated_at = now();
            $clientes->save(); 
            // Redireccionar 
            
            return redirect('/clientes/show'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Clientes::destroy($id);
        return response()->json(array('res'=>true)); 
    }
}
