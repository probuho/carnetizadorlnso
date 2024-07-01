@extends('layouts.app')

@section('title', 'Confirmar Estudiante')

@section('content')
<div class="container">
    <h2>Confirmar Estudiante</h2>
    <div class="card">
        <div class="card-body">
            <p><strong>Nombre:</strong> {{ $student->first_name }}</p>
            <p><strong>Apellido:</strong> {{ $student->last_name }}</p>
            <p><strong>Correo Electrónico:</strong> {{ $student->email }}</p>
            <p><strong>Año/Grado:</strong> {{ $student->grade }}</p>
            <p><strong>Sección:</strong> {{ $student->section }}</p>
            <p><strong>Fotografía:</strong></p>
            @if ($student->photo_path)
                <img src="{{ Storage::url($student->photo_path) }}" alt="Foto del estudiante" class="img-thumbnail" width="200">
            @else
                <p>No se proporcionó fotografía.</p>
            @endif
        </div>
    </div>
    <br>
    <a href="{{ route('students.confirm', ['id' => $student->id]) }}" class="btn btn-primary">Confirmar</a>
    <a href="{{ url('/students/create') }}" class="btn btn-secondary">Cancelar</a>
</div>
@endsection
