@extends('layouts.layout')

@section('title', 'Index Usuarios')

@section('content')

<div class="container mt-5">
    <h1 class="text-center display-5 mb-4">
        <span class="badge bg-primary">Listado de Clientes</span>
    </h1>

    <div class="text-end mb-4">
        <a href="{{ route('cliente.create') }}" class="btn btn-outline-primary btn-lg">
            <i class="fas fa-calendar-plus"></i> Agendar Cita
        </a>
    </div>

    <div class="table-responsive shadow-lg p-3 mb-5 bg-body rounded">
        <table class="table table-striped table-hover table-bordered text-center align-middle">
            <thead class="table-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Cuenta</th>
                    <th scope="col">Teléfono</th>
                    <th scope="col">Email</th>
                    <th scope="col">Fecha de Cita</th>
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
                        <a href="{{route('cliente.show', 0)}}" class="btn btn-primary btn-sm">
                            <i class="fas fa-eye"></i> Ver
                        </a>
                        <a href="{{route('cliente.edit', 0)}}" class="btn btn-success btn-sm">
                            <i class="fas fa-edit"></i> Modificar
                        </a>
                        <a href="{{route('cliente.destroy', 0)}}" class="btn btn-danger btn-sm">
                            <i class="fas fa-trash-alt"></i> Borrar
                        </a>
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
                        <a href="{{route('cliente.show', 0)}}" class="btn btn-primary btn-sm">
                            <i class="fas fa-eye"></i> Ver
                        </a>
                        <a href="{{route('cliente.edit', 0)}}" class="btn btn-success btn-sm">
                            <i class="fas fa-edit"></i> Modificar
                        </a>
                        <a href="{{route('cliente.destroy', 0)}}" class="btn btn-danger btn-sm">
                            <i class="fas fa-trash-alt"></i> Borrar
                        </a>
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
                        <a href="{{route('cliente.show', 0)}}" class="btn btn-primary btn-sm">
                            <i class="fas fa-eye"></i> Ver
                        </a>
                        <a href="{{route('cliente.edit', 0)}}" class="btn btn-success btn-sm">
                            <i class="fas fa-edit"></i> Modificar
                        </a>
                        <a href="{{route('cliente.destroy', 0)}}" class="btn btn-danger btn-sm">
                            <i class="fas fa-trash-alt"></i> Borrar
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

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
