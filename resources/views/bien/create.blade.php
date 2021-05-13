<form action="{{ url('/bien')}}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
<label for="Nombre">{{'Nombre'}}</label>
<input type="text" name="Nombre" id="Nombre" value=""</input>
</br>

<label for="Cantidad">{{'Cantidad'}}</label>
<input type="number" name="Cantidad" id="Cantidad" value=""</input>
</br>

<label for="UbicacionArea">{{'Ubicación Área'}}</label>
<input type="text" name="UbicacionArea" id="UbicacionArea" value=""</input>
</br>

<input type="submit" value="Agregar">



</form>
