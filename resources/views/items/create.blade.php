@extends('layouts.app')

@section('content')

<div class="container">

    <form action="{{ url('/items') }}" method="post" enctype="multipart/form-data">
    @csrf

    @include('items.form',['Modo' => 'crear'])

    </form>

</div>


@endsection