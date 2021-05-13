<form class="" action="{{url('/bien', $bien->id)}}" method="post" enctype="multipart/form-data">
  {{ csrf_field()}}
  {{ method_field('PATCH')}}

  <label for="Nombre">{{'Nombre'}}</label>
  <input type="text" name="Nombre" id="Nombre" value="{{$bien->Nombre}}">
  </br>

  <label for="Cantidad">{{'Cantidad'}}</label>
  <input type="number" name="Cantidad" id="Cantidad" value="{{$bien->Cantidad}}">
  </br>

  <label for="UbicacionArea">{{'Ubicación Área'}}</label>
  <input type="text" name="UbicacionArea" id="UbicacionArea" value="{{$bien->UbicacionArea}}">
  </br>

  <input type="submit" name="" value="Editar">

</form>
