
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendar Cita - MediCitas</title>

    <link href="css/styles.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h1>Agendar Cita Médica</h1>
    <p>Complete los datos para registrar una cita médica.</p>

    <form>
        <div class="mb-3">
            <label for="paciente" class="form-label">Nombre del paciente</label>
            <input type="text" class="form-control" id="paciente" required>
        </div>

        <div class="mb-3">
            <label for="doctor" class="form-label">Doctor</label>
            <input type="text" class="form-control" id="doctor" required>
        </div>

        <div class="mb-3">
            <label for="fecha" class="form-label">Fecha de la cita</label>
            <input type="date" class="form-control" id="fecha" required>
        </div>

        <div class="mb-3">
            <label for="hora" class="form-label">Hora</label>
            <input type="time" class="form-control" id="hora" required>
        </div>

        <button type="submit" class="btn btn-primary">Agendar Cita</button>
        <a href="index.php" class="btn btn-secondary">Volver al inicio</a>
    </form>
</div>

</body>
</html>
