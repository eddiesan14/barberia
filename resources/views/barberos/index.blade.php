@extends('layouts.layout')

@section('title', 'Listado de Barberos')

@section('content')

<div class="container mt-4">
    <h1 class="text-center mb-3">Listado de Barberos</h1>

    <a href="{{ route('cliente.create') }}" class="btn btn-secondary btn-lg d-block mx-auto mb-4">Agregar Barbero</a>

    <table class="table table-bordered table-hover text-center">
        <thead class="bg-dark text-white">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Cuenta</th>
                <th scope="col">Teléfono</th>
                <th scope="col">Email</th>
                <th scope="col">Fecha</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Esteban Pérez</td>
                <td>estebanp</td>
                <td>3000123</td>
                <td>estebanp@gmail.com</td>
                <td>2025-01-01</td>
                <td>
                    <a href="{{route('barberos.show', $id=0)}}" class="btn btn-primary btn-sm mx-1">Ver Horario</a>
                    <a href="{{route('barberos.edit', $id=0)}}" class="btn btn-success btn-sm mx-1">Modificar Horario</a>
                    <a href="{{route('barberos.destroy', $id=0)}}" class="btn btn-danger btn-sm mx-1">Borrar</a>
                </td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Sebas Ríos</td>
                <td>sebasr</td>
                <td>12355665</td>
                <td>sebasr@gmail.com</td>
                <td>2025-01-02</td>
                <td>
                    <a href="{{route('cliente.show', $id=0)}}" class="btn btn-primary btn-sm mx-1">Ver</a>
                    <button class="btn btn-success btn-sm mx-1">Modificar</button>
                    <button class="btn btn-danger btn-sm mx-1">Eliminar</button>
                </td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Eddie Santiago</td>
                <td>eddies</td>
                <td>98765432</td>
                <td>eddies@gmail.com</td>
                <td>2025-01-03</td>
                <td>
                    <a href="{{route('cliente.show', $id=0)}}" class="btn btn-primary btn-sm mx-1">Ver</a>
                    <button class="btn btn-success btn-sm mx-1">Modificar</button>
                    <button class="btn btn-danger btn-sm mx-1">Eliminar</button>
                </td>
            </tr>
        </tbody>
    </table>

    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">4</a></li>
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>
</div>

@endsection
