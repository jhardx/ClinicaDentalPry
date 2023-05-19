<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
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
    public function pacientes()
    {
        return view('odontologo.pacientes');
    }
    public function newPaciente()
    {
        return view('odontologo.new-paciente');
    }
}
