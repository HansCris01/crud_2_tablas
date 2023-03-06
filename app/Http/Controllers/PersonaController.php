<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use App\Models\Documento;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    
        $datos['personas']=Persona::where("personas.estado","=",1)->select("codigo_persona","nombre","apellido_paterno","apellido_materno","dni","documentos.descripcion")->join('documentos', 'personas.codigo_documento', '=', 'documentos.codigo_documento')->get();
        return view('persona.listar', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Combo box de documento
        $datos['documentos']=Documento::where("estado","=",1)->select("codigo_documento","descripcion")->get();
        //direccionar pagina agregar
        return view('persona.agregar',$datos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $persona = new Persona();
        
        $persona->nombre = $request->input("nombre");
        $persona->apellido_paterno = $request->input("apellido_paterno");
        $persona->apellido_materno = $request->input("apellido_materno");
        $persona->codigo_documento = $request->input("codigo_documento");
        $persona->dni = $request->input("dni");      
        $persona->estado = 1;
        $persona->save();
        return redirect('persona');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
      //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function edit($codigo_persona)
    {
       //Combo box de documento
       $datos['documentos']=Documento::where("estado","=",1)->select("codigo_documento","descripcion")->get();

       $persona = Persona::select("codigo_persona","nombre","apellido_paterno","apellido_materno","dni","documentos.descripcion","personas.codigo_documento")->join('documentos', 'personas.codigo_documento', '=', 'documentos.codigo_documento')->findOrfail($codigo_persona);
       return view('persona.editar', compact('persona'),$datos);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosPersona=Request()->except([('_token'),('_method')]);
        Persona::where('codigo_persona','=',$id)->update($datosPersona);
        return redirect('persona');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function destroy(Persona $persona)
    {
        //
    }
}
