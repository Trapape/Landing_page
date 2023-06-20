<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\EnviarCorreo;

class CorreoController extends Controller
{
    public function enviarCorreo(Request $request)
    {
        // Validar los datos del formulario si es necesario
        $request->validate([
            'nombre' => 'required',
            'telefono' => 'required',
            'correo' => 'required|email',
            'asunto' => 'required',
            'mensaje' => 'required',
        ]);

        // Obtener los datos del formulario
        $datos = [
            'nombre' => $request->nombre,
            'telefono' => $request->telefono,
            'correo' => $request->correo,
            'asunto' => $request->asunto,
            'mensaje' => $request->mensaje,
        ];

        // Enviar el correo electrónico
        Mail::to('20213l001045@utcv.edu.mx')->send(new EnviarCorreo($datos));

        // Redireccionar o mostrar un mensaje de éxito
        return redirect()->back()->with('success', 'El correo ha sido enviado correctamente.');
    }
}
