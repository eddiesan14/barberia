@extends('layouts.layout')

@section('title', 'Mostrar Horario Barberos')

@section('content')

<div class="container mt-5">
    <h2 class="text-center mb-4">Horario de Barberos</h2>

    <table class="table table-bordered table-hover text-center">
        <thead class="bg-dark text-white">
            <tr>
                <th scope="col">Día</th>
                <th scope="col" class="bg-success text-white py-3">Lunes</th>
                <th scope="col" class="bg-danger text-white py-3">Martes</th>
                <th scope="col" class="bg-success text-white py-3">Miércoles</th>
                <th scope="col" class="bg-danger text-white py-3">Jueves</th>
                <th scope="col" class="bg-success text-white py-3">Viernes</th>
                <th scope="col" class="bg-danger text-white py-3">Sábado</th>
                <th scope="col" class="bg-success text-white py-3">Domingo</th>
            </tr>
        </thead>
        <tbody>
            <!-- Aquí puedes agregar los horarios -->
            <tr>
                <td><b>Horario</b></td>
                <td>9:00 AM - 7:00 PM</td>
                <td>9:00 AM - 7:00 PM</td>
                <td>9:00 AM - 7:00 PM</td>
                <td>9:00 AM - 7:00 PM</td>
                <td>9:00 AM - 7:00 PM</td>
                <td>10:00 AM - 5:00 PM</td>
                <td>Cerrado</td>
            </tr>
        </tbody>
    </table>

    <a href="{{ route('barberos.index') }}" class="btn btn-primary d-block mx-auto mt-4">Regresar</a>
</div>

@endsection
