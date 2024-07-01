@extends('layouts.app')

@section('content')
<h1>Lista de Estudiantes</h1>
<a href="{{ route('students.create') }}">Crear Estudiante</a>
<ul>
    @foreach ($students as $student)
    <li>
        <a href="{{ route('students.show', $student) }}">{{ $student->name }}</a>
        <a href="{{ route('students.pdf', $student) }}">PDF</a>
    </li>
    @endforeach
</ul>
@endsection