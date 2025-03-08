@extends('layouts.layout')

@section('title', 'Modificar Horario')

@section('content')

<div class="container mt-4">
    <h2 class="text-center mb-4">Modificar Horario</h2>

    <div class="row row-cols-2 row-cols-md-4 g-3">
        @php
            $dias = ['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo'];
            $selecciones = ['si' => 'Sí', 'no' => 'No'];
        @endphp

        @foreach($dias as $index => $dia)
        <div class="col">
            <div class="form-floating">
                <select class="form-select" id="floatingSelect{{ $index }}">
                    @foreach($selecciones as $valor => $texto)
                        <option value="{{ $valor }}" {{ $valor == 'si' ? 'selected' : '' }}>{{ $texto }}</option>
                    @endforeach
                </select>
                <label class="form-label">{{ $dia }}</label>
            </div>
        </div>
        @endforeach
    </div>

    <div class="text-center mt-4">
        <a href="{{ route('barberos.index') }}" class="btn btn-primary btn-lg">Guardar y Regresar</a>
    </div>
</div>

@endsection
             