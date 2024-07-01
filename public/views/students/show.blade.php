<!-- resources/views/students/show.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Carnet Estudiantil</h1>
        <div class="card" style="width: 18rem;">
            <img src="{{ Storage::url($student->photo_path) }}" class="card-img-top" alt="Foto de {{ $student->first_name }}">
            <div class="card-body">
                <h5 class="card-title">{{ $student->first_name }} {{ $student->last_name }}</h5>
                <p class="card-text">Correo: {{ $student->email }}</p>
                <p class="card-text">Grado: {{ $student->grade }}</p>
                <p class="card-text">Sección: {{ $student->section }}</p>
            </div>
        </div>
        <form action="{{ route('students.send_email', $student) }}" method="POST" class="mt-3">
            @csrf
            <button type="submit" class="btn btn-primary">Enviar por Correo</button>
        </form>
    </div>
@endsection
