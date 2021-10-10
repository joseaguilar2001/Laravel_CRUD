<h1>{{$modo}} empleado</h1>

@if(count($errors)>0)

    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <ul>
            
            @foreach($errors->all() as $error)
            <li>
            <strong>{{$error}}</strong>    
            </li>
            @endforeach
        </ul>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
<div class="form-group">

<label for="Nombre"> Nombre</label>
<input type="text" class="form-control" value="{{isset($empleado -> Nombre)?$empleado -> Nombre:old('Nombre')}}" name="Nombre" id="Nombre">
</div>

<div class="form-group">
<label for="ApellidoPaterno"> Apellido Paterno</label>
<input type="text" class="form-control" value="{{isset($empleado -> ApellidoPaterno)?$empleado -> ApellidoPaterno:old('ApellidoPaterno')}}" name="ApellidoPaterno" id="ApellidoPaterno">
</div>

<div class="form-group">
<label for="ApellidoMaterno">Apellido Materno</label>
<input type="text" class="form-control" name="ApellidoMaterno" id="ApellidoMaterno" value="{{isset($empleado -> ApellidoMaterno)?$empleado -> ApellidoMaterno:old('ApellidoMaterno')}}">
</div>

<div class="form-group">
<label for="Correo">Correo</label>
<input type="text" class="form-control" name="Correo" id="Correo" value="{{isset($empleado -> Correo)?$empleado -> Correo:old('Correo')}}">
</div>

<div class="form-group">
<label for="Foto">Foto</label>
@if(isset($empleado->Foto))
<img class="img-thumbnail img-fluid" src="{{asset('storage').'/'.$empleado->Foto}}" alt="" width="100">
@endif
<input type="file" name="Foto" id="Foto">
</div>

<a href="{{url('empleado/')}}" class="btn btn-primary">Regresar</a>
<input type="submit" value="{{$modo}} datos" class="btn btn-success">
