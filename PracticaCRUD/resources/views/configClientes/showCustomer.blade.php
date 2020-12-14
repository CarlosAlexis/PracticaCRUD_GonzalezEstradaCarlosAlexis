@extends('layouts.master')


@section('titulo')  

Clientes 

@stop

@section('main')

<div><a href="{{action('customers@create')}}">crear usuario <img src="{{url('https://image.flaticon.com/icons/png/512/72/72648.png')}}"></a></div>
{{session('status') ?? ''}}
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Direccion</th>
      <th scope="col">Codigo</th>
      <th scope="col">Telefono</th>
      <th scope="col">Actualizar</th>
      <th scope="col">Borrar</th>
    </tr>
  </thead>
  <tbody>

  @foreach($clientes as $user)

    <tr>
      <th scope="row">{{$user->idcl}}</th>
      <td>{{$user->nombre}}</td>
      <td>{{$user->apellido}}</td>
      <td>{{$user->direccion}}</td>
      <td>{{$user->cPostal}}</td>
      <td>{{$user->telefono}}</td>
      <td><a href="{{action('customers@show',['id'=>$user->idcl])}}"><img src="{{url('https://ps.w.org/automatic-safe-update/assets/icon-256x256.png?rev=2090952')}}"></a></td>
      <td><a href="{{action('customers@destroy',['id'=>$user->idcl])}}"><img src="{{url('https://alisteducation.com/wp-content/uploads/2012/06/delete.png')}}"></a></td>
    </tr>

    @endforeach

  </tbody>
</table>

@stop
