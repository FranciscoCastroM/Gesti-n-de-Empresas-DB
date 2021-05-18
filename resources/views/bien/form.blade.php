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


<div class="form-group">
    <label for="inventario_id" class="control-label"> Orden</label>
    <select name="inventario_id" id="inventario_id" cols="40" rows="3">
    @foreach($inventarios as $inventario)
        <option value="{{ isset($inventario->id)?$inventario->id:'' }}">{{ $inventario->num_inventario }}</option>
    @endforeach
    </select>
    <br>

<input type="submit" class="btn btn-success" name="" value="{{ $Modo == 'crear' ? 'Agregar Registro': 'Modificar Registro'}}">

<a class="btn btn-primary" href="{{ url('bien')}}">Regresar</a>
