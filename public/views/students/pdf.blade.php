@extends('layouts.app')

@section('title', 'Student Card')
<div class="container">
    <div class="card" style="width: 18rem;">
        <<h1>Student Card</h1>
            <p>Nombre: {{ $student->first_name }}</p>
            <p>Apellido: {{ $student->last_name }}</p>
            <p>Correo: {{ $student->email }}</p>
            <p>Grado: {{ $student->grade }}</p>
            <p>Sección: {{ $student->section }}</p>
            <img src="{{ public_path('storage/' . $student->photo_path) }}" alt="Student Photo" width="150"
                height="150">
    </div>
</div>
@endsection
