<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/





Route::get('/', function () {
    return view('sitio');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');
Route::post('/students', [StudentController::class, 'store'])->name('students.store');
Route::get('students/create', [StudentController::class, 'create'])->name('students.create');
Route::post('students', [StudentController::class, 'store'])->name('students.store');
Route::get('students/{student}', [StudentController::class, 'show'])->name('students.show');
Route::post('students/{student}/send-email', [StudentController::class, 'sendEmail'])->name('students.send_email');
// Ruta para generar PDF
Route::get('students/{student}/pdf', [StudentController::class, 'generatePdf'])->name('students.generate_pdf');
Route::get('/students/confirm/{id}', [StudentController::class, 'confirm'])->name('students.confirm');


//Rutas de vista previa 'Aprovacion, impresion, envio por correo'

Route::get('/students/preview/{id}', [StudentController::class, 'preview'])->name('students.preview');
Route::get('/students/approve/{id}', [StudentController::class, 'approve'])->name('students.approve');
Route::get('/students/print/{id}', [StudentController::class, 'print'])->name('students.print');
Route::get('/students/email/{id}', [StudentController::class, 'email'])->name('students.email');




