<?php

namespace App\Http\Controllers;

use App\Models\paciente;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['pacientes'] = paciente::paginate(10);
        return view('pacientes.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pacientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $campos=[
            'TipoDocumento'=>'required|string|max:20',
            'Nombre'=>'required|string|max:100',
            'Apellido'=>'required|string|max:100',
            'Direccion'=>'required|string|max:100',
            'Genero'=>'required|string|max:20',
            'FechaNacimiento'=>'required|string|max:50',
            'EstadoCivil'=>'required|string|max:50',
        ];
        $mensaje=[
            'required'=>'El :attribute es Requerido'
        ];

        $this->validate($request,$campos,$mensaje);

        $datosPaciente = request()->except('_token');
        paciente::insert($datosPaciente);
        return redirect('paciente')->with('mensaje','Empleado Agregado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function show(paciente $paciente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $paciente = paciente::findOrFail($id);
        return view('pacientes.edit', compact('paciente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $campos=[
            'TipoDocumento'=>'required|string|max:20',
            'Nombre'=>'required|string|max:100',
            'Apellido'=>'required|string|max:100',
            'Direccion'=>'required|string|max:100',
            'Genero'=>'required|string|max:20',
            'FechaNacimiento'=>'required|string|max:50',
            'EstadoCivil'=>'required|string|max:50',
        ];
        $mensaje=[
            'required'=>'El :attribute es Requerido'
        ];

        $this->validate($request,$campos,$mensaje);
        //
        $datosPaciente = request()->except('_token','_method');
        paciente::Where('id','=',$id)->update($datosPaciente); 

        $paciente = paciente::findOrFail($id);        
        return redirect('paciente')->with('mensaje','Empleado Actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        paciente::destroy($id);
        return redirect('paciente')->with('mensaje','Empleado Borrado con éxito');
    }
}
