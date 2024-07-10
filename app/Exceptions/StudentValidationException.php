<?php

namespace App\Exceptions;

use Exception;

class StudentValidationException extends Exception
{
    public function render($request)
    {
        return response()->json([
            'message' => 'Los campos de estudiante no pueden estar vacíos si el rol es diferente de Estudiante.',
        ], 422);
    }
}
