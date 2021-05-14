<div class="form-group">
<label for="Nombre" class="control-label">{{'Nombre'}}</label>
<input type="text" class="form-control" name="Nombre" id="Nombre"
value="{{isset($bien->Nombre)?$bien->Nombre:''}}"</input>
</div>

<div class="form-group">
<label for="Cantidad" class="control-label">{{'Cantidad'}}</label>
<input type="number" class="form-control" name="Cantidad" id="Cantidad"
value="{{isset($bien->Cantidad)?$bien->Cantidad:''}}"</input>
</div>

<div class="form-group">
<label for="UbicacionArea" class="control-label">{{'Ubicación Área'}}</label>
<input type="text" class="form-control" name="UbicacionArea" id="UbicacionArea"
value="{{isset($bien->UbicacionArea)?$bien->UbicacionArea:''}}"</input>
</div>

<input type="submit" class="btn btn-success" name="" value="{{ $Modo == 'crear' ? 'Agregar Registro': 'Modificar Registro'}}">

<a class="btn btn-primary" href="{{ url('bien')}}">Regresar</a>
