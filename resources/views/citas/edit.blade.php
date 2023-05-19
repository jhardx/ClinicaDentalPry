@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>EDITAR CITA</h1>
@stop
@section('plugins.Select2', true)
@section('content')
    <section class="content">
        <!-- Default box -->
        <div class="card">

            <div class="card-header">



            </div>

            @if (Session::has('message'))
                <p class="alert {{ Session::get('alert-class', 'alert-success') }}">{{ Session::get('message') }}</p>
            @endif
            <!-- /.card-header -->
            <div class="card-body">
                <form class="row g-3">
                    <div class="col-md-6">
                        <label for="select2" class="form-label">Paciente</label>
                        <select id="" class="form-select" disabled>
                            <option>Paciente 1</option>
                            <option>Paciente 2</option>
                            <option>Paciente 3</option>

                        </select>
                    </div>
                    <div class="col-md-6">

                    </div>

                    <div class="col-md-6">
                        <label for="inputCity" class="form-label">Fecha</label>
                        <input type="date" class="form-control" id="inputCity">
                    </div>


                    <div class="col-md-6">
                        <label for="select2" class="form-label">Hora</label>
                        <input type="time" class="form-control" id="inputEmail4">
                    </div>
                </form>
            </div>
            <div class="d-grid gap-2 col-6 mx-auto mt-lg-5 mb-lg-1">
                <a class="btn btn-info" href="#">Modificar cita</a>
            </div>
            <div class="card-footer">
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
        $('#select2').select2();
    </script>
@stop
