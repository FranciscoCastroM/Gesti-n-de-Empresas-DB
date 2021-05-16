!-- AQUI VA EL FORM DE ALMACEN-->

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

<label for="Nombre"> Salida Almacen </label>
<input type="date" class="form-control" name="salidasA" value="{{isset($almacen->salidasA)?$almacen->salidasA:old('salidasA')}}" id="salidasA">


</div>

<div class="form-group">
<label for="Nombre"> Factura Almacen</label>
<input type="text"class="form-control" name="facturaS" value="{{isset($almacen->facturaS)?$almacen->facturaS:old('facturaS')}}" id="facturaS">


</div>


<input class="btn btn-success" type="submit" value="{{$modo}} datos">

<a class="btn btn-primary" href = "{{url('almacen')}}">Regresar</a>

<br>