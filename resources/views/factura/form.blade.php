
<!-- plantilla para editar y crear      -->

<h1>{{$modo}} Factura </h1>

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

<label for="Nombre"> Numero Entrada </label>
<input type="text" class="form-control" name="NumeroEntrada" value="{{isset($factura->NumeroEntrada)?$factura->NumeroEntrada:old('NumeroEntrada')}}" id="NumeroEntrada">


</div>

<div class="form-group">
<label for="Nombre"> Numero Factura</label>
<input type="text"class="form-control" name="NumFactura" value="{{isset($factura->NumFactura)?$factura->NumFactura:old('NumFactura')}}" id="NumFactura">


</div>

<div class="form-group">
<label for="Nombre"> Proveedor </label>
<input type="text" class="form-control" name="Proveedor" value="{{isset($factura->Proveedor)?$factura->Proveedor:old('Proveedor')}}" id="Proveedor">

  
</div>  

<div class="form-group">
<label for="Nombre"> Total Bienes </label>
<input type="text" class="form-control" name="TotalBienes" value="{{isset($factura->TotalBienes)?$factura->TotalBienes:old('TotalBienes')}}" id="TotalBienes">

</div>

<div class="form-group">

<label for="Nombre"> Valor Total</label>
<input type="text" class="form-control" name="ValorTotal"  value="{{isset($factura->ValorTotal)?$factura->ValorTotal:old('ValorTotal')}}" id="ValorTotal">


</div>

<div class="form-group">
<label for="Nombre"> Fecha </label>
<input type="date" class="form-control" name="Fecha" value="{{isset($factura->Fecha)?$factura->Fecha:old('Fecha')}}" id="Fecha">

</div>

<input class="btn btn-success" type="submit" value="{{$modo}} datos">

<a class="btn btn-primary" href = "{{url('factura')}}">Regresar</a>

<br>