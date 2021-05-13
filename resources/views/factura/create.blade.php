
<!--creacion de registro factura      -->

@extends('layouts.app')<!--llamamos una vista-->

@section('content')
<div class="container">

<form action="{{url('/factura')}}" method="post" enctype="multipart/form-data">
@csrf
@include('factura.form',['modo'=>'Crear'])

</form>
</div>
@endsection