<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Cita;
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
        return view('paciente.index');
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

    // Buscar cita
    public function buscarCita(Request $req)
    {
        $searchTerm = trim($req->input('search'));
        
        $cita = Cita::where('estado_cita', 'LIKE', "%$searchTerm%")
                    ->orWhere('fecha', 'LIKE', "%$searchTerm%")
                    ->get();

        return view('search.index', compact('cita'));
    }

    // Agendar cita Paciente

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
}
