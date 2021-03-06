@extends('plantilla')
@section('contenido')
    @if(session()->has('confirmarCuenta'))
        <div class="row">
            <div class="col alert-success display-3">
                {{session('confirmarCuenta')}}
            </div>
        </div>
    @endif
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="card border-white">
                    <img class="img-fluid" src="{{asset('img/umss.png')}}" width="400" height="500">
                    <div class="card-body">
                        <p class="card-text h1 text-center">Sistema de Registro de Perfiles de Proyectos Finales de Grado</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection