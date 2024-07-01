<!-- resources/views/emails/student_card.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Carnet Estudiantil</title>
</head>
<body>
    <h1>Carnet Estudiantil</h1>
    <img src="{{ Storage::url($student->photo_path) }}" alt="Foto de {{ $student->first_name }}">
    <p>Nombre: {{ $student->first_name }} {{ $student->last_name }}</p>
    <p>Grado: {{ $student->grade }}</p>
    <p>Sección: {{ $student->section }}</p>
</body>
</html>
