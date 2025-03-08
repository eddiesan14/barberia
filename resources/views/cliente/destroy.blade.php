@extends('layouts.layout')

@section('title', 'mostrar usiario')

@section('content')

<div class="card" style="width: 18rem;">
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><b>nombre:</b><span>esteban perez</span></li>
    <li class="list-group-item"><b>cuenta:</b><span>estebanp</span></li>
    <li class="list-group-item"><b>telefono:</b><span>3000123</span></li>
    <li class="list-group-item"><b>email:</b><span>	estebanp@gmail.com</span></li>
    <li class="list-group-item"><b>fecha:</b><span>2025-01-01</span></li>
  </ul>
</div>
<td>
    <a href="{{route('cliente.index')}}" class="btn btn-primary">borrar</a>
    <a href="{{route('cliente.index')}}" class="btn btn-danger">borrar</a>
</td>
@endsection 