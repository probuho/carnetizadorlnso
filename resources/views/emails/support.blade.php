<<<<<<< HEAD
@extends('layouts.email')

@section('content')
<div>
=======
<<<<<<< Updated upstream
<!DOCTYPE html>
<html>
<head>
    <title>Nuevo reporte de soporte</title>
</head>
<body>
>>>>>>> 60f3bc006404d2fa0e46bb06932e75651a461077
    <h1>Nuevo reporte de soporte</h1>
    <p><strong>Nombre:</strong> {{ $details['name'] }}</p>
    <p><strong>Cédula:</strong> {{ $details['cedula'] }}</p>
    <p><strong>Correo:</strong> {{ $details['email'] }}</p>
    <p><strong>Reporte:</strong> {{ $details['report'] }}</p>
    @if(!empty($details['screenshot']))
        <p>Captura de pantalla adjunta.</p>
    @endif
<<<<<<< HEAD
</div>
@endsection

=======
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
>>>>>>> 60f3bc006404d2fa0e46bb06932e75651a461077
