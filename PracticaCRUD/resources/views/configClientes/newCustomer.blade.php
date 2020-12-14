@extends('layouts.master')

@section('titulo')

@if((isset($clientes)) and (is_object($clientes)))

    modificacion de datos de usuario

    @php

    $title1='modificacion de datos de usuario';
    $nombre=$clientes->nombre;
    $apellido=$clientes->apellido;
    $direccion=$clientes->direccion;
    $cPostal=$clientes->cPostal;
    $telefono=$clientes->telefono;
    $idcl=$clientes->idcl;

    @endphp

    @else

    alta de un nuevo usuario

    @php

    $title1='alta de un nuevo usuario';
    $nombre='';
    $apellido='';
    $direccion='';
    $cPostal='';
    $telefono='';
    $idcl='';

    @endphp

    @endif
@stop

@section('content')

<div></div>
<form action="{{isset($clientes) ?  action('ClientesController@update') : action('ClientesController@save')}}" method="post" >
        {{csrf_field()}}
        @if((isset($clientes)) and (is_object($clientes)))
        <input type="hidden" name="idcl" value="{{$idcl}}">
        @endif
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" value="{{$nombre}}">
        <br>
        <label for="apellido">Apellido</label>
        <input type="text" name="apellido" value="{{$apellido}}">
        <br>
        <label for="direccion">Direccion</label>
        <input type="text" name="direccion" value="{{$direccion}}">
        <br>
        <label for="cPostal">Codig postal</label>
        <input type="text" name="cPostal" value="{{$cPostal}}">
        <br>
        <label for="telefono">Telefono</label>
        <input type="text" name="telefono" value="{{$telefono}}">
        <br>
        <input type="submit" value="submit">
    </form>

@stop