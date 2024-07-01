<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;
use App\Mail\StudentCardMail;
use Barryvdh\Snappy\Facades\SnappyPdf as PDF;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class StudentController extends Controller
{
    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        // Validar los datos del formulario
        $data = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'nullable|email',
            'grade' => 'required|string|max:255',
            'section' => 'required|string|max:255',
            'photo' => 'nullable|image|max:2048',
            'rol' => 'required|string|max:255',
        ], [
            'first_name.required' => 'El campo nombre es obligatorio.',
            'last_name.required' => 'El campo apellido es obligatorio.',
            'email.email' => 'El campo correo electrónico debe ser una dirección de correo válida.',
            'grade.required' => 'El campo año/grado es obligatorio.',
            'section.required' => 'El campo sección es obligatorio.',
            'photo.image' => 'El archivo debe ser una imagen.',
            'photo.required' => 'La fotografía es obligatoria.',
            'photo.max' => 'La imagen no debe superar los 2MB.',
            'rol.required' => 'El campo rol es obligatorio.',
        ]);

        if ($request->rol == 'Estudiante') {
            $request->validate([
                'grade' => 'required|string|max:255',
                'section' => 'required|string|max:255',
            ]);
        }
        // Subir la foto si se proporciona
        if ($request->hasFile('photo')) {
            $data['photo_path'] = $request->file('photo')->store('photos', 'public');
        }

        // Crear el estudiante en la base de datos
        $student = Student::create($data);

        // Redirigir a la vista previa del estudiante
        return redirect()->route('students.preview', ['id' => $student->id])->with('success', '¡Estudiante creado exitosamente!');
    }

    // public function store(Request $request)
    // {
    //     $data = $request->validate([
    //         'first_name' => 'required|string|max:255',
    //         'last_name' => 'required|string|max:255',
    //         'email' => 'nullable|email',
    //         'grade' => 'required|string|max:255',
    //         'section' => 'required|string|max:255',
    //         'photo' => 'nullable|image|max:2048',
    //         'rol' => 'required|string|max:255',
    //     ]);

    //     if ($request->hasFile('photo')) {
    //         $data['photo_path'] = $request->file('photo')->store('photos', 'public');
    //     }

    //     $student = Student::create($data);

    //     return redirect()->route('students.preview', ['id' => $student->id]);
    // }

    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'first_name' => 'required|string|max:255',
    //         'last_name' => 'required|string|max:255',
    //         'email' => 'nullable|email',
    //         'grade' => 'required|string|max:255',
    //         'section' => 'required|string|max:255',
    //         'photo' => 'nullable|image|max:2048',
    //     ], [
    //         'first_name.required' => 'El campo nombre es obligatorio.',
    //         'last_name.required' => 'El campo apellido es obligatorio.',
    //         'email.email' => 'El campo correo electrónico debe ser una dirección de correo válida.',
    //         'grade.required' => 'El campo año/grado es obligatorio.',
    //         'section.required' => 'El campo sección es obligatorio.',
    //         'photo.image' => 'El archivo debe ser una imagen.',
    //         'photo.max' => 'La imagen no debe superar los 2MB.',
    //     ]);

    //     // Subir la foto si se proporciona
    //     $photoPath = $request->file('photo') ? $request->file('photo')->store('photos', 'public') : null;

    //     // Crear el estudiante en la base de datos
    //     $student = Student::create([
    //         'first_name' => $request->first_name,
    //         'last_name' => $request->last_name,
    //         'email' => $request->email,
    //         'grade' => $request->grade,
    //         'section' => $request->section,
    //         'photo_path' => $photoPath,
    //     ]);

    //     // Redirigir de vuelta a la página anterior con el mensaje de éxito
    //     return redirect()->back()->with('success', '¡Estudiante creado exitosamente!');
    // }

    public function preview($id)
    {
        $student = Student::findOrFail($id);
        return view('students.preview', compact('student'));
    }

    public function approve($id)
    {
        $student = Student::findOrFail($id);
        // Aquí puedes agregar lógica para marcar al estudiante como aprobado, si es necesario
        return redirect()->route('students.index')->with('success', '¡El estudiante ha sido aprobado!');
    }

    public function print($id)
    {
        $student = Student::findOrFail($id);
        $pdf = PDF::loadView('students.carnet', compact('student'));
        return $pdf->download('carnet.pdf');
    }

    public function email($id)
    {
        $student = Student::findOrFail($id);
        $pdf = PDF::loadView('students.carnet', compact('student'));

        Mail::send([], [], function ($message) use ($student, $pdf) {
            $message->to($student->email)
                ->subject('Carnet Estudiantil')
                ->attachData($pdf->output(), 'carnet.pdf');
        });

        return redirect()->route('students.index')->with('success', '¡El carnet ha sido enviado por correo!');
    }

    public function confirm($id)
    {
        $student = Student::findOrFail($id);
        return view('students.confirm', compact('student'));
    }

    public function sendEmail(Student $student)
    {
        Mail::to($student->email)->send(new StudentCardMail($student));
        return back()->with('success', 'Carnet enviado por correo electrónico.');
    }


    public function show($id)
    {
        $student = Student::findOrFail($id);
        return view('students.show', compact('student'));
    }

    public function generatePdf($id)
    {
        $student = Student::findOrFail($id);
        $pdf = PDF::loadView('students.pdf', compact('student'));
        return $pdf->download('student.pdf');
    }
}


// app/Http/Controllers/StudentController.php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\Models\Student;
// use Illuminate\Support\Facades\Storage;

// class StudentController extends Controller
// {
//     public function create()
//     {
//         return view('students.create');
//     }

//     public function store(Request $request)
//     {
//         $request->validate([
//             'first_name' => 'required|string|max:255',
//             'last_name' => 'required|string|max:255',
//             'email' => 'nullable|email',
//             'grade' => 'required|string|max:255',
//             'section' => 'required|string|max:255',
//             'photo' => 'nullable|image|max:2048',
//         ], [
//             'first_name.required' => 'El campo nombre es obligatorio.',
//             'last_name.required' => 'El campo apellido es obligatorio.',
//             'email.email' => 'El campo correo electrónico debe ser una dirección de correo válida.',
//             'grade.required' => 'El campo año/grado es obligatorio.',
//             'section.required' => 'El campo sección es obligatorio.',
//             'photo.image' => 'El archivo debe ser una imagen.',
//             'photo.max' => 'La imagen no debe superar los 2MB.',
//         ]);

//         $photoPath = $request->file('photo') ? $request->file('photo')->store('photos', 'public') : null;

//         $student = Student::create([
//             'first_name' => $request->first_name,
//             'last_name' => $request->last_name,
//             'email' => $request->email,
//             'grade' => $request->grade,
//             'section' => $request->section,
//             'photo_path' => $photoPath,
//         ]);

//         return redirect()->back()->with('success', '¡Estudiante creado exitosamente!');
//     }
// }
