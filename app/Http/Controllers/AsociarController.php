<?php

namespace App\Http\Controllers;

use App\Servidor;
use App\User;
use App\Asociar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\Http\Requests\AsociarRegistro;
use App\Http\Requests\AsociarUp;

class AsociarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servers = Servidor::all();
        $datos = User::all();
        return view('asociar', ['datos' => $servers, 'datoservers' => $datos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AsociarRegistro $request)
    {
        $registroAgregar = new Asociar;


        $registroAgregar->user_id = $request->user_id;
        $registroAgregar->server_id = $request->server_id;

        $registroAgregar->save();
        return redirect('asociarc');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AsociarUp $request, $id)
    {
        $serverup = Asociar::find($id);
        $serverup->user_id = $request->user_id;
        $serverup->server_id = $request->server_id;

        $serverup->save();
        return redirect('/verasociar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Asociar::destroy($id);
        return redirect('/verasociar');
    }
    public function ver(){
        $servers = Asociar::all();
        return view('displayasociar', ['servers' => $servers]);
    }

    public function actualizar($id)
    {
        $jugos = Asociar::find($id);
        return view('asociarup',['jugos'=>$jugos]);
    }
}
