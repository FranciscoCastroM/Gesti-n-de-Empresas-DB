

<h1>{{$Modo}} Item</h1>
    @if(count($errors)>0)
        <div class="alert alert-danger" role="alert">
            <ul>
            @foreach($errors->all() as $error)
                <li> {{ $error }}</li>
            @endforeach
            </ul>
        </div>
    @endif

    <div class="form-group">
    <label for="nombre_bien" class="control-label"> Nombre Bien </label>
    <input type="text" class="form-control" name="nombre_bien" value="{{ isset($item->nombre_bien)?$item->nombre_bien:'' }}" id="nombre_bien">
    <br>

    <div class="form-group">
    <label for="cantidad_solicitada" class="control-label"> Cantidad Solicitada</label>
    <input type="number" class="form-control" name="cantidad_solicitada" value="{{ isset($item->cantidad_solicitada)?$item->cantidad_solicitada:'' }}" id="cantidad_solicitada">
    <br>

    <div class="form-group">
    <label for="cantidad_despachada" class="control-label"> Cantidad Despachada</label>
    <input type="number" class="form-control" name="cantidad_despachada" value="{{ isset($item->cantidad_despachada)?$item->cantidad_despachada:'' }}" id="cantidad_despachada">
    <br>
    <div class="form-group">
    <label for="unidad_de_medida_bien" class="control-label"> Unidad de Medida Bien</label>
    <input type="number" class="form-control" name="unidad_de_medida_bien" value="{{ isset($item->unidad_de_medida_bien)?$item->unidad_de_medida_bien:'' }}" id="unidad_de_medida_bien">
    <br>
    <div class="form-group">
    <label for="valor_initario" class="control-label"> Valor Initario</label>
    <input type="number" class="form-control" name="valor_initario" value="{{ isset($item->valor_initario)?$item->valor_initario:'' }}" id="valor_initario">
    <br>
    <div class="form-group">
    <label for="valor_total" class="control-label"> Valor Total</label>
    <input type="number" class="form-control" name="valor_total" value="{{ isset($item->valor_total)?$item->valor_total:'' }}" id="valor_total">
    <br>    

    <div class="form-group">
    <label for="orden_id" class="control-label"> Orden</label>
    <select name="orden_id" class="form-control" id="orden_id" cols="40" rows="3">
    @foreach($ordens as $orden)
        <option value="{{ isset($orden->id)?$orden->id:'' }}">{{ $orden->nit }}</option>
    @endforeach
    </select>
    <br>
    <div class="form-group">
    <label for="factura_id" class="control-label"> Factura</label>
    <select name="factura_id" class="form-control" id="factura_id" cols="40" rows="3">
    @foreach($facturas as $factura)
        <option value="{{ isset($factura->id)?$factura->id:'' }}">{{ $factura->NumFactura }}</option>
    @endforeach
    </select>
    <br>

    <input type="submit" class="btn btn-success" value=" {{ $Modo == 'Crear' ? 'Agregar Registro': 'Modificar Registro' }} ">

    <a class="btn btn-primary" href="{{ url('/items') }}" > Regresar</a>