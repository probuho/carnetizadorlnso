<!DOCTYPE html>
<html>
<head>
    <title>Nuevo reporte de soporte</title>
</head>
<body>
    <h1>Nuevo reporte de soporte</h1>
    <p>Nombre: {{ $details['name'] }}</p>
    <p>Cédula: {{ $details['cedula'] }}</p>
    <p>Correo: {{ $details['email'] }}</p>
    <p>Reporte: {{ $details['report'] }}</p>
    @if(!empty($details['screenshot']))
        <p>Captura de pantalla adjunta.</p>
    @endif
</body>
</html>
