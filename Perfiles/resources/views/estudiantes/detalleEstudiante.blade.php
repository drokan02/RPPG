@extends('layouts.menu')
@section('titulo','Informacion del Estudiante')
@section('contenido')

    <table class="table">
        <thead>
        <tr>
            <th class="h1 " scope="col">Informacion Basica</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Nombre de estudiante: </td>
            <td>{{$estudiante->nombres}}</td>

        </tr>
        <tr>
            <td>Carrera del estudiante</td>
            <td>{{$estudiante->carrera()->pluck('nombre_carrera')->implode(' - ')}}</td>
        </tr>
        </tbody>
    </table>
    <table class="table">
        <thead>
        <tr>
            <th class="h1" scope="col">Informacion Personal</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Nombre de Usuario: </td>
            <td>{{$estudiante->user_name}}</td>
        </tr>
        <tr>
            <td>Correo Electronico</td>
            <td>{{$estudiante->email}}</td>
        </tr>
        <tr>
            <td>Telefono: </td>
            <td>{{$estudiante->telefono}}</td>
        </tr>
        </tbody>
    </table>
@endsection