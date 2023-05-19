<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CitaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('citas.index');
    }
    public function newCita()
    {
        return view('citas.new');
    }
    public function editCita($id)
    {
        return view('citas.edit');
    }
}
