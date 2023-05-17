@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>PACIENTES</h1>
@stop

@section('content')
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <form class="form-horizontal">
                    <div class="form-group row">





                        <input class="col-sm-3 form-control" type="search" name="texto" placeholder="Digitar"
                            aria-label="Digitar">
                        <button class="col-sm-2 btn btn-info">Buscar</button>


                    </div>
                </form>



            </div>
            @if (Session::has('message'))
                <p class="alert {{ Session::get('alert-class', 'alert-success') }}">{{ Session::get('message') }}</p>
            @endif
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>

                            <th>Nombre</th>
                            <th>Edad</th>
                            {{-- <th>Historia</th> --}}


                        </tr>
                    </thead>
                    <tbody>



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
@stop
