@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>PACIENTES</h1>
@stop
@section('plugins.Datatables', true)

@section('content')
    <section class="content">

        <!-- Default box -->
        <div class="card">



            <div class="card-header">
                <div class="d-grid gap-2 col-6 mx-auto mt-lg-1 mb-lg-1">
                    <a class="btn btn-success" href="{{ url('app/paciente/new') }}">Registrar Paciente</a>
                </div>
            </div>

            <form class="form-horizontal">

                <div class="row mb-3 mt-lg-2">
                    <div class="col-sm-10">
                        <input class="col-sm-10 ml-lg-3 form-control" type="search" name="texto"
                            placeholder="Buscar paciente" aria-label="Digitar">
                    </div>
                    <button class="col-sm-1 btn btn-info">Buscar</button>
                </div>
            </form>

            <div class="card-body">

                <table id="tabla-paciente" class="table table-bordered table-striped">
                    <thead>
                        <tr>

                            <th>Nombre</th>
                            <th>Apellido P.</th>
                            <th>Apellido M.</th>
                            <th>Edad</th>
                            <th>Citas</th>
                            <th>Historia Clínica</th>


                        </tr>
                    </thead>
                    <tbody>
                        <tr>

                            <th>John</th>
                            <th>Doe</th>
                            <th>Doe</th>
                            <th>15</th>
                            <th style="text-align: center">
                                <button type="button" class=" btn btn-light">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </th>
                            <form>
                                <th style="text-align: center">
                                    <button type="button" class=" btn btn-light">
                                        <i class="fas fa-file-pdf" style="color: #d20423"></i>
                                    </button>
                                </th>
                            </form>
                        </tr>
                    </tbody>

                </table>

            </div>

            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
    {{-- </div> --}}
@stop


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">


@stop
@section('js')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script>
        $('#tabla-paciente').DataTable({
            language: {
                "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
            },
            "searching": false
        });
    </script>

@stop
