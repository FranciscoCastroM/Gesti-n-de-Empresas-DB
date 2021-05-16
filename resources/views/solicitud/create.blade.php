@extends('layouts.app')

@section('content')

<div class="container">

<form action="{{ url('/Solicitud')}}" class="form-horizontal" method="post" enctype="multipart/form-data">
{{ csrf_field() }}

@include( 'solicitud.form',['Modo' => 'crear'])



</form>
</div>

@endsection
