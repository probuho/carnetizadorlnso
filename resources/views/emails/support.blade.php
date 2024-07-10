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

