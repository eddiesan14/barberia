@extends('layouts.layout')

@section('title', 'Index Usuarios')

@section('content')

<div class="container mt-5">
    <div class="row d-flex justify-content-center gap-4">
        <div class="card shadow-lg border-primary rounded" style="width: 18rem;">
            <img src="/images/barba.jpg" class="card-img-top rounded-top" alt="Servicio de Barba">
            <div class="card-body text-center">
                <h5 class="card-title">Barba</h5>
                <p class="card-text text-muted">Recorte y perfilado de barba con precisión.</p>
                <a href="#" class="btn btn-success">4.000</a>
            </div>
        </div>

        <div class="card shadow-lg border-primary rounded" style="width: 18rem;">
            <img src="/images/cejas.webp" class="card-img-top rounded-top" alt="Servicio de Cejas">
            <div class="card-body text-center">
                <h5 class="card-title">Cejas</h5>
                <p class="card-text text-muted">Depilación y definición de cejas.</p>
                <a href="#" class="btn btn-success">1.000</a>
            </div>
        </div>

        <div class="card shadow-lg border-primary rounded" style="width: 18rem;">
            <img src="images/corte 2.jpg" class="card-img-top rounded-top" alt="Servicio de Corte de Pelo">
            <div class="card-body text-center">
                <h5 class="card-title">Corte</h5>
                <p class="card-text text-muted">Corte de cabello profesional con estilo.</p>
                <a href="#" class="btn btn-success">14.000</a>
            </div>
        </div>
    </div>
</div>

@endsection
