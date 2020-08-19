<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Monitoreo;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;
use App\Servidor;
use App\User;
use App\Asociar;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\Http\Requests\AsociarRegistro;
use App\Http\Requests\AsociarUp;
use App\Http\Requests\UsuarioRegistro;
use App\Http\Requests\UserUp;
use App\Http\Requests\ServidorRegistro;
use App\Http\Requests\ServerUp;

class MonitoreoController extends Controller
{
    public function index()
    {
        $datosf = User::findOrFail(auth()->user()->id);
        $datos = Asociar::findOrFail($datosf->id);
        $datost = Servidor::findOrFail($datos->server_id);
        return view('displaymon', ["datost" => $datost]);
    }
    public function store()
    {
        $datos = file('/var/www/html/Segrep/cpu');
        $datost = file('/var/www/html/Segrep/memtotal');
        $datosf = file('/var/www/html/Segrep/memfree');
        $datosa = file('/var/www/html/Segrep/memava');
        return view('monitor', ["datos" => $datos, "datosf" => $datosf, "datosa" => $datosa, "datost" => $datost]);
    }
}
