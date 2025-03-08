@extends('layouts.layout')

@section('title', 'Modificar Usuario')

@section('content')

<div class="container mt-5">
    <div class="card shadow-lg p-4 rounded">
        <h2 class="text-center mb-4">Modificar Usuario</h2>



            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control form-control-lg" id="nombre" name="nombre" value="jose sanchez" required>
                </div>
                <div class="col-md-6">
                    <label for="cuenta" class="form-label">Cuenta</label>
                    <input type="text" class="form-control form-control-lg" id="cuenta" name="cuenta" value="jsanchez" required>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="telefono" class="form-label">Teléfono</label>
                    <input type="tel" class="form-control form-control-lg" id="telefono" name="telefono" value="3000123" pattern="[0-9]{10}" title="Ingrese un número de 10 dígitos" required>
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control form-control-lg" id="email" name="email" value="jsanchez@gmail.com" required>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="fecha" class="form-label">Fecha</label>
                    <input type="date" class="form-control form-control-lg" id="fecha" name="fecha" value="2025-01-02" required>
                </div>
            </div>

            <div class="text-center">
                <a href="{{ route('cliente.index') }}" class="btn btn-success btn-lg">Guardar y Regresar</a>
                <a href="{{ route('cliente.index') }}" class="btn btn-warning btn-lg fw-bold text-dark">Regresar</a>
            </div>
        </form>
    </div>
</div>

@endsection
