<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Odontologo;
use App\Models\Paciente;
use App\Models\Producto;
use App\Models\Tratamiento;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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


//----------------usuario---------------------
     // crear usuario
   
     public function crearUsuario($datoUser){
        $nUser = User::create([
            'email' => $datoUser[0],
            'clave' => $datoUser[1],
            'rol' => $datoUser[2],
            // ...
        ]);
    }

    //------------------------Paciente-------------------

    // crear paciente
    // ejemplo de como crear nuevo paciente

    // $nPaciente->crearPaciente([72345623, 'tiago', 'rodriguez', 'gusman', '934823012', 'dni', 'masculino', 'mz lt 2 cr jiron', '2003-04-23', 'casado', '2023-05-18', 12]);
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

    // editar paciente
    // $ePaciente->editarPaciente(41, [72345623, 'tiago', 'rodriguez', 'gusman', '934823012', 'dni', 'masculino', 'mz lt 2 cr jiron', '2003-04-23', 'casado', '2023-05-18', 12]);
    public function editarPaciente(Request $req, $id){
         // Obtener los valores actualizados de la solicitud
        $datosActualizados = $req->all();

        // Obtener el registro a editar
        $paciente = Paciente::find($id);

        // Verificar si el registro existe
        if (!$paciente) {
            // Registro no encontrado
            // Realizar alguna acción, mostrar un mensaje de error, etc.
        }

        // Actualizar los atributos del modelo
        $paciente->fill($datosActualizados);

        // Guardar los cambios
        $paciente->save();
        
    }

    // consultar paciente
    public function consultarPaciente(Request $request)
    {
        $searchTerm = trim($request->input('search'));
        
        $pacientes = Paciente::where('nombre', 'LIKE', "%$searchTerm%")
                    ->orWhere('dni', 'LIKE', "%$searchTerm%")
                    ->get();

        return view('search.index', compact('pacientes'));
    }

//-------------------------Odontologo-------------------------
    // crear odontologo
    // ejemplo de como crear nuevo odontologo

    // $nOdont->crearOdont(['7560736', 'juan', 'torres', '34454545', 'mz 3 lt 5', 3]);
    public function crearOdont(Request $req){
        $nOdont = Odontologo::create([
            'dni' => $req->input('dni'),
            'nombre' => $req->input('nombre'),
            'apellido' => $req->input('apellido'),
            'telefono' => $req->input('telefono'),
            'direccion' => $req->input('direccion'),
            'user_id' => $req->input('user_id'),
            // ...
        ]);
    }


     // editar odontologo
     // $eOdont->editarOdont(14,['7560736', 'juan', 'torres', '34454545', 'mz 3 lt 5']);
     public function editarOdont(Request $req, $id){
        // Obtener los valores actualizados de la solicitud
        $datosActualizados = $req->all();

        // Obtener el registro a editar
        $odont = Odontologo::find($id);

        // Verificar si el registro existe
        if (!$odont) {
            // Registro no encontrado
            // Realizar alguna acción, mostrar un mensaje de error, etc.
        }

        // Actualizar los atributos del modelo
        $odont->fill($datosActualizados);

        // Guardar los cambios
        $odont->save();
        
    }

    // eliminar odontologo
    public function eliminarOdont($id){
        $odont = Odontologo::findOrFail($id);
        $odont->delete();
    
        // Puedes agregar un mensaje de éxito aquí si lo deseas
    
        // retornar una vista de confirmacion
    }
    

    // consultar Odontologo
    public function consultarOdontologo(Request $request)
    {
        $searchTerm = trim($request->input('search'));
        
        $odontologos = Odontologo::where('nombre', 'LIKE', "%$searchTerm%")
                    ->orWhere('dni', 'LIKE', "%$searchTerm%")
                    ->get();

        return view('search.index', compact('odontologos'));
    }
    //------------------------Tratamiento-------------------


        // crear Tratamiento
        // ejemplo de como crear nuevo tratamiento
    
        //  $nTrata->crearTratamiento(['tratamiendto', 'descripcion de tratamiento', 200.34]);
        public function crearTratamiento(Request $req){
            $nTrata = Tratamiento::create([
                'nombre' => $req->input('nombre'),
                'descripcion' => $req->input('descripcion'),
                'costo' => $req->input('costo')
            ]);
        }
    
    
        // editar tratamiento
        // $eTrata->editarTratamiento(11,['tratamiendtos', 'descripcion de tratamientos', 500]);
        public function editarTratamiento(Request $req, $id){
             // Obtener los valores actualizados de la solicitud
        $datosActualizados = $req->all();

        // Obtener el registro a editar
        $trat = Tratamiento::find($id);

        // Verificar si el registro existe
        if (!$trat) {
            // Registro no encontrado
            // Realizar alguna acción, mostrar un mensaje de error, etc.
        }

        // Actualizar los atributos del modelo
        $trat->fill($datosActualizados);

        // Guardar los cambios
        $trat->save();
            
        }
    
        // eliminar tratamiento
         // $elTrata->eliminarTratamiento(11);
        public function eliminarTratamiento($id){
            $trat = Tratamiento::findOrFail($id);
            $trat->delete();
    
            // Puedes agregar un mensaje de éxito aquí si lo deseas
    
            // retornar una vista de confirmacion
            
        }

         // consultar Tratamiento
        public function consultarTratamiento(Request $request)
        {
            $searchTerm = trim($request->input('search'));
            
            $trat = Tratamiento::where('nombre', 'LIKE', "%$searchTerm%")
                        ->get();

            return view('search.index', compact('trat'));
        }

    //------------------------Inventario-------------------

    // crear producto
    public function crearProducto(Request $req){
        $nProducto = Producto::create([
            'nombre' => $req->input('nombre'),
            'descripcion' => $req->input('descripcion'),
            'precio' => $req->input('precio'),
            'proveedor_id' => $req->input('proveedor_id')
        ]);
    }
       
    // editar producto
    public function editarProducto(Request $req, $id){
        // Obtener los valores actualizados de la solicitud
        $datosActualizados = $req->all();

        // Obtener el registro a editar
        $produc = Producto::find($id);

        // Verificar si el registro existe
        if (!$produc) {
            // Registro no encontrado
            // Realizar alguna acción, mostrar un mensaje de error, etc.
        }

        // Actualizar los atributos del modelo
        $produc->fill($datosActualizados);

        // Guardar los cambios
        $produc->save();
    }

    // eliminar producto
    public function eliminarProducto($id){
        $produc = Producto::findOrFail($id);
        $produc->delete();
    
        // Puedes agregar un mensaje de éxito aquí si lo deseas

        // retornar una vista de confirmacion
    }

      // consultar Producto
      public function consultarProducto(Request $request)
      {
          $searchTerm = trim($request->input('search'));
          
          $produc = Tratamiento::where('nombre', 'LIKE', "%$searchTerm%")
                      ->get();

          return view('search.index', compact('produc'));
      }

}
