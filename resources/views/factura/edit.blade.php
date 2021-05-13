
<!--Edicion de factura       -->

@extends('layouts.app')<!--llamamos una vista-->

@section('content')
<div class="container">

<form action="{{url('/factura/'.$factura->id)}}" method="post" enctype="multipart/form-data">
@csrf

{{method_field('PATCH')}}
@include('factura.form',['modo'=>'Editar'])

</form>
</div>
@endsection