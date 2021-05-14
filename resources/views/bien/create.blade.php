@extends('layouts.app')

@section('content')

<div class="container">

<form action="{{ url('/bien')}}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}

@include( 'bien.form',['Modo' => 'crear'])



</form>

</div>

@endsection

