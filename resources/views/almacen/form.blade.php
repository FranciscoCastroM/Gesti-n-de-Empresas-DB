<!-- AQUI VA EL FORM DE ALMACEN-->

<h1>{{$modo}} dato</h1>

@if(count($errors)>0)
    <div class="alert alert-danger" role="alert">
<ul>
    @foreach($errors->all() as $error)
       <li> {{$error}} </li>
    @endforeach
</ul>
    </div>

   
@endif

<div class="form-group">

<label for="Nombre"> Nombre de Almacén </label>
<input type="text" class="form-control" name="nombreAlmacen" value="{{isset($almacen->nombreAlmacen)?$almacen->nombreAlmacen:old('nombreAlmacen')}}" id="nombreAlmacen">


</div>

<div class="form-group">
<label for="Nombre"> Dirección de Almacén</label>
<input type="text"class="form-control" name="direccionAlmacen" value="{{isset($almacen->direccionAlmacen)?$almacen->direccionAlmacen:old('direccionAlmacen')}}" id="direccionAlmacen">


</div>


<input class="btn btn-success" type="submit" value="{{$modo}} datos">

<a class="btn btn-primary" href = "{{url('almacen')}}">Regresar</a>

<br>