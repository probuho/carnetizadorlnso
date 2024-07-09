<<<<<<< Updated upstream
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
=======
@extends('layouts.email')

@section('content')
<div>
    <h1>Nuevo reporte de soporte</h1>
    <p><strong>Nombre:</strong> {{ $details['name'] }}</p>
    <p><strong>Cédula:</strong> {{ $details['cedula'] }}</p>
    <p><strong>Correo:</strong> {{ $details['email'] }}</p>
    <p><strong>Reporte:</strong> {{ $details['report'] }}</p>
    @if(!empty($details['screenshot']))
        <p>Captura de pantalla adjunta.</p>
    @endif
</div>
@endsection

>>>>>>> Stashed changes
