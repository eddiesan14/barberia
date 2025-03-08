@extends('layouts.layout')

@section('title', 'Mostrar Usuario')

@section('content')

<div class="container d-flex justify-content-center mt-5">
    <div class="card shadow-lg rounded border-primary" style="width: 22rem;">
        <div class="card-header bg-primary text-white text-center">
            <h4>Detalles del Usuario</h4>
        </div>
        <ul class="list-group list-group-flush p-3">
            <li class="list-group-item">
                <b class="text-primary">Nombre:</b> <span class="ms-2">Esteban Pérez</span>
            </li>
            <li class="list-group-item">
                <b class="text-primary">Cuenta:</b> <span class="ms-2">estebanp</span>
            </li>
            <li class="list-group-item">
                <b class="text-primary">Teléfono:</b> <span class="ms-2">3000123</span>
            </li>
            <li class="list-group-item">
                <b class="text-primary">Email:</b> <span class="ms-2">estebanp@gmail.com</span>
            </li>
            <li class="list-group-item">
                <b class="text-primary">Fecha:</b> <span class="ms-2">2025-01-01</span>
            </li>
        </ul>
    </div>
</div>

<div class="text-center mt-4">
    <a href="{{ route('cliente.index') }}" class="btn btn-outline-secondary">
        <i class="fas fa-arrow-left"></i> Regresar
    </a>
</div>

@endsection
