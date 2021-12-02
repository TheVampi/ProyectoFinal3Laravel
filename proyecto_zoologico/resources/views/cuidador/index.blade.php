@extends('layouts.layout')
@section('content')
<div class="row">
    <section class="content">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="pull-left">
                        <h3>Mis cuidadores uwu</h3>
                    </div>
                    <div class="pull-right">
                        <div class="btn-group">
                            <a href="{{ route('cuidador.create') }}" class="btn btn-info">Agregar cuidador</a>
                        </div>
                    </div>
                    <div class="table-container">
                        <table id="mytable" class="table table-bordred table-striped">
                            <thead>
                                <th>Nombre</th>
                                <th>Direccion</th>
                                <th>Telefono</th>
                                <th>Fecha de Ingreso</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                            </thead>
                            <tbody>
                                @if($cuidadores->count())
                                @foreach($cuidadores as $cuidador)
                                <tr>
                                    <td>{{$cuidador->nombre}}</td>
                                    <td>{{$cuidador->direccion}}</td>
                                    <td>{{$cuidador->telefono}}</td>
                                    <td>{{$cuidador->fecha_ingreso}}</td>
                                    
                                </tr>
                                @endforeach
                                @else
                                <tr>
                                    <td colspan="8">No hay registro !!</td>
                                </tr>
                                @endif
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @endsection