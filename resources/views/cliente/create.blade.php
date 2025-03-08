@extends('layouts.layout')

@section('title', 'Index Usuarios')

@section('content')
<div class="container mt-5">
    <div class="card shadow-lg p-4 rounded">
        <h2 class="text-center mb-4">Formulario de Registro</h2>
        
        

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control form-control-lg" id="nombre" name="nombre" placeholder="Ingrese su nombre" required>
                </div>
                <div class="col-md-6">
                    <label for="cuenta" class="form-label">Cuenta</label>
                    <input type="text" class="form-control form-control-lg" id="cuenta" name="cuenta" placeholder="Número de cuenta" required>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="telefono" class="form-label">Teléfono</label>
                    <input type="tel" class="form-control form-control-lg" id="telefono" name="telefono" placeholder="Ingrese su teléfono" pattern="[0-9]{10}" title="Ingrese un número de 10 dígitos" required>
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control form-control-lg" id="email" name="email" placeholder="Ingrese su correo" required>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="fecha" class="form-label">Fecha</label>
                    <input type="date" class="form-control form-control-lg" id="fecha" name="fecha" required>
                </div>
            </div>

            <div class="text-center">
                <a href="{{ route('cliente.index') }}" class="btn btn-success btn-lg">Guardar y Regresar</a>
                <a href="{{ route('cliente.index') }}" class="btn btn-secondary btn-lg">Cancelar</a>
            </div>
        </form>
    </div>
</div>
@endsection
