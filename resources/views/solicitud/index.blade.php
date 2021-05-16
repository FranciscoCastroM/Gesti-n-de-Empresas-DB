@extends('layouts.app')
@section('content')
<div class="container">
<a href = "{{url('Solicitud/create')}}" class="btn btn-success">Registrar nueva Solicitud</a>
<br/>
<br/>

<table class="table table-light table-hover">

    <thead class="thead-light">
        <tr>
            <th>#ID</th>
            <th>Fecha</th>
            <th>Responsable</th>
            <th>Centrocosto</th>
            <th>Rubropresupuestal</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
    @foreach($solicituds as $solicitud)
    <tr>
      <td>{{$loop->iteration}}</td>
      <td>{{$solicitud->fecha}}</td>
      <td>{{$solicitud->responsable}}</td>
      <td>{{$solicitud->centrocosto}}</td>
      <td>{{$solicitud->rubropresupuestal}}</td>
      <td>

        <a class="btn btn-warning" href="{{ url('/Solicitud/'.$solicitud->id.'/edit') }}"> Editar</a> 
            
         <form action="{{ url('/Solicitud/'.$solicitud->id) }}" method="post" style="display:inline">
        {{csrf_field() }}
        {{ method_field('DELETE') }}
        <button class="btn btn-danger" type="submit" onclick="return confirm('¿Borrar?')">Borrar</button>

        </form>

        </td>
     </tr>
     @endforeach
    </tbody>
</table>
</div>
@endsection