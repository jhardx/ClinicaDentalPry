<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Cita;
use App\Models\Historial_Medico;
use App\Models\Paciente;
use App\Models\Producto;
use Illuminate\Http\Request;

class OdontologoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('odontologo.index');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    // Crear paciente
    public function crearPaciente(Request $req){
        $nPaciente = Paciente::create([
            'dni' => $req->input('dni'),
            'nombre' => $req->input('nombre'),
            'apellido_paterno' => $req->input('apellido_paterno'),
            'apellido_materno' => $req->input('apellido_materno'),
            'telefono' => $req->input('telefono'),
            'tipo_doc' => $req->input('tipo_doc'),
            'genero' => $req->input('genero'),
            'direccion' => $req->input('direccion'),
            'fecha_naci' => $req->input('fecha_naci'),
            'estado_civil' => $req->input('estado_civil'),
            'fecha_registro' => $req->input('fecha_registro'),
            'user_id' => $req->input('user_id'),
        ]);
    }

    // Buscar Paciente

    public function buscarPaciente($id){
        $paciente = Paciente::find($id);

        if (!$paciente) {
            return redirect()->back()->with('error', 'Registro no encontrado');
        }

        return view('tu_vista', compact('registro'));
    }

    // Consultar citas programadas

    public function consultarCitas(){
        $citas = Cita::all();

        return view('vista_de_listado', compact('citas'));

    }

    //Agendar cita Paciente

    public function agendarCitaPaciente(Request $req){
        $cita = Cita::create([
            'estado_cita' => $req->input('estado_cita'),
            'descripcion' => $req->input('descripcion'),
            'fecha' => $req->input('fecha'),
            'hora' => $req->input('hora'),
            'paciente_id' => $req->input('paciente_id'),
            'agenda_id' => $req->input('agenda_id'),
            'tratamiento_id' => $req->input('tratamiento_id'),
        ]);
    }

    // Modificar cita paciente

    public function modificarCita(Request $req, $id){
          // Obtener los valores actualizados de la solicitud
          $datosActualizados = $req->all();

          // Obtener el registro a editar
          $cita = Cita::find($id);
  
          // Verificar si el registro existe
          if (!$cita) {
              // Registro no encontrado
              // Realizar alguna acción, mostrar un mensaje de error, etc.
          }
  
          // Actualizar los atributos del modelo
          $cita->fill($datosActualizados);
  
          // Guardar los cambios
          $cita->save();
    }

    // Eliminar cita para paciente

    public function eliminarCita($id){
        $cita = Cita::find($id);

        if (!$cita) {
            return redirect()->back()->with('error', 'Registro no encontrado');
        }
    
        $cita->delete();
    
        return redirect()->back()->with('success', 'Registro eliminado exitosamente');
    }

    // Actualizar historial clinica

     public function actualizarHistorialClinica(Request $req, $id){
        // Obtener los valores actualizados de la solicitud
        $datosActualizados = $req->all();

        // Obtener el registro a editar
        $hMedico = Historial_Medico::find($id);

        // Verificar si el registro existe
        if (!$hMedico) {
            // Registro no encontrado
            // Realizar alguna acción, mostrar un mensaje de error, etc.
        }

        // Actualizar los atributos del modelo
        $hMedico->fill($datosActualizados);

        // Guardar los cambios
        $hMedico->save();
    }

    // Consultar inventario

    public function consultarInventario(){
        $cInventario = Producto::all();

        return view('vista_de_listado', compact('cInventario'));

    }

     // Modificar Inventario

    public function modifInventario(Request $req, $id){
        // Obtener los valores actualizados de la solicitud
        $datosActualizados = $req->all();

        // Obtener el registro a editar
        $modifInventario = Producto::find($id);

        // Verificar si el registro existe
        if (!$modifInventario) {
            // Registro no encontrado
            // Realizar alguna acción, mostrar un mensaje de error, etc.
        }

        // Actualizar los atributos del modelo
        $modifInventario->fill($datosActualizados);

        // Guardar los cambios
        $modifInventario->save();
    }

}
