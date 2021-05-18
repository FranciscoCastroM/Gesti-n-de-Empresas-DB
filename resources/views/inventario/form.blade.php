<h1>{{$Modo}} Inventario</h1>
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
    <label for="num_inventario" class="control-label"> Numero de Inventario </label>
    <input type="number" class="form-control" name="num_inventario" value="{{ isset($item->num_inventario)?$item->num_inventario:'' }}" id="num_inventario">
    <br>   

    <div class="form-group">
    <label for="salidaalmacen_id" class="control-label"> Salida Almacen</label>
    <select name="salidaalmacen_id" class="form-control" id="salidaalmacen_id" cols="40" rows="3">
    @foreach($salidaalmacens as $salidaalmacen)
        <option value="{{ isset($salidaalmacen->id)?$salidaalmacen->id:'' }}">{{ $salidaalmacen->NumSalida }}</option>
    @endforeach
    </select>
    <br>

    <input type="submit" class="btn btn-success" value=" {{ $Modo == 'Crear' ? 'Agregar Registro': 'Modificar Registro' }} ">

    <a class="btn btn-primary" href="{{ url('/inventario') }}" > Regresar</a>