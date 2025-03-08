<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto Barber Fast</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-light">
    <div class="d-flex align-items-center justify-content-center min-vh-100">
        <div class="card shadow-lg rounded-4" style="width: 22rem;">
            <img src="/images/logo.jpeg" class="card-img-top rounded-top-4" alt="Creando diseños" style="height: 200px; object-fit: cover;">
            <div class="card-body text-center">
                <h4 class="card-title fw-bold">Proyecto Barber Fast</h4>
                <p class="card-text text-muted">Sistema de agenda para barberías.</p>
                <a href="{{ route('cliente.index') }}" class="btn btn-primary btn-lg fw-bold">Ir a Menú Principal</a>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
