<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SupportMail;
use Illuminate\Support\Facades\Mail;

class SupportController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'cedula' => 'required',
            'email' => 'required|email',
            'report' => 'required',
            'screenshot' => 'nullable|image|max:2048'
        ]);

        $details = [
            'name' => $request->name,
            'cedula' => $request->cedula,
            'email' => $request->email,
            'report' => $request->report
        ];

        if ($request->hasFile('screenshot')) {
            $path = $request->file('screenshot')->store('screenshots');
            $details['screenshot'] = $path;
            Mail::to('uneti2024grupo@gmail.com')->send(new SupportMail($details));
        } else {
            Mail::to('uneti2024grupo@gmail.com')->send(new SupportMail($details));
        }

        return back()->with('success', 'Tu reporte ha sido enviado. Te responderemos en 24 a 72 horas hábiles.');
    }
}
