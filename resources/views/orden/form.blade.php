<div class="form-group">
<label for="nit"class="control-label">{{'nit'}}</label>
<input type="number" name="nit" id="nit" 
value="{{isset($orden->nit)?$orden->nit:''}}"</input>
</br>

<div class="form-group">
<label for="proveedor" class="control-label">{{' proveedor'}}</label>
<input type="text" name="proveedor" id="proveedor" 
value="{{isset($orden->proveedor)?$orden->proveedor:''}}"</input>
</br>

<div class="form-group">
<label for="fecha_orden" class="control-label">{{'Fecha orden'}}</label>
<input type="date" name="fecha_orden" id="fecha_orden"
 value="{{isset($orden->date)?$orden->date:''}}"</input>
</br>

<div class="form-group">
<label for="monto_total" class="control-label">{{'Monto Total'}}</label>
<input type="number" name="monto_total" id="monto_total"
value="{{isset($orden->monto_total)?$orden->monto_total:''}}"</input>
</br>

<div class="form-group">
<label for="fecha_entrega" class="control-label">{{'Fecha Entrega'}}</label>
<input type="date" name="fecha_entrega" id="fecha_entrega"
value="{{isset($orden->monto_total)?$orden->monto_total:''}}"</input>
</br>

<div class="form-group">
<label for="aprobada" class="control-label">{{'aprobada'}}</label>
<input type="text" name="aprobada" id="aprobada" 
value="{{isset($orden->aprobada)?$orden->aprobada:''}}"</input>
</br>

<input type="submit" class="btn btn-success" name="" value="{{ $Modo == 'crear' ? 'Agregar Registro': 'Modificar Registro'}}">

<a class="btn btn-primary" href="{{ url('Orden')}}">Regresar</a>