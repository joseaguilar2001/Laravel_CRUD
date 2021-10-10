@extends('layouts.app')
@section('content')
<div class="container">


@if(Session::has('mensaje'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
{{Session::get('mensaje')}}
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button> 
</div>
@endif
<a href="{{url('empleado/create')}}" class="btn btn-success">Registrar nuevo empleado</a>
<br>
<br>
<table class="table table-light">

  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido Materno</th>
      <th scope="col">Apellido Paterno</th>
      <th scope="col">Correo</th>
      <th scope="col">Foto</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach($empleados as $empleado )  
    <tr>
      <th scope="row">{{$empleado -> id}}</th>
      <td>{{$empleado -> Nombre}}</td>
      <td>{{$empleado -> ApellidoPaterno}}</td>
      <td>{{$empleado -> ApellidoMaterno}}</td>
      <td>{{$empleado -> Correo}}</td>
      <td>
      <img class="img-thumbnail img-fluid" width="100" src="{{asset('storage').'/'.$empleado->Foto}}" alt="">
    </td>
    <td> <a href="{{url('/empleado/'.$empleado->id.'/edit')}}" class="btn btn-warning">
        Editar
      </a>
        <form action="{{url('/empleado/'.$empleado -> id)}}" class="d-inline" method="post">
        @csrf 
        {{method_field('DELETE')}}
        <input type="submit" class="btn btn-danger" onclick="return confirm('¿Quiere borrar?')" value="Borrar">
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
{{!! $empleados -> links() !!}}
</div>
@endsection