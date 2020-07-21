<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Monitoreo;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;

class MonitoreoController extends Controller
{
    public function store()
    {
        $datos = file('/var/www/html/Segrep/cpu');
        $datost = file('/var/www/html/Segrep/memt');
        $datosf = file('/var/www/html/Segrep/memf');
        $datosa = file('/var/www/html/Segrep/mema');
        return view('monitor', ["datos" => $datos, "datosf" => $datosf, "datosa" => $datosa, "datost" => $datost]);
    }
}
