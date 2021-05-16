@extends('layouts.app')

@section('content')

<div class="container">

<form action="{{ url('/Orden')}}" class="form-horizontal" method="post" enctype="multipart/form-data">
{{ csrf_field() }}

@include( 'orden.form',['Modo' => 'crear'])



</form>
</div>

@endsection
