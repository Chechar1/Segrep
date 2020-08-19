<?php

namespace App\Http\Controllers;

use App\Servidor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\Http\Requests\ServidorRegistro;
use App\Http\Requests\ServerUp;

class ServidorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('server');
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
    public function store(ServidorRegistro $request)
    {
        $servidorAgregar = new Servidor;


        $servidorAgregar->name = $request->name;
        $servidorAgregar->ip = $request->ip;
        $servidorAgregar->password = $request->password;
        $servidorAgregar->host = $request->host;
        $servidorAgregar->port = $request->port;

        if ($request->has('password')) {
            $servidorAgregar['password']=Hash::make($servidorAgregar['password']);
        }

        $servidorAgregar->save();
        return redirect('/servidor');
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
    public function update(ServerUp $request, $id)
    {
        $serverup = Servidor::find($id);
        $serverup->name = $request->name;
        $serverup->ip = $request->ip;
        $serverup->password = $request->password;

        if ($request->has('password')) {
            $serverup['password']=Hash::make($serverup['password']);
        }

        $serverup->host = $request->host;
        $serverup->port = $request->port;
        $serverup->save();
        return redirect('/verserver');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Servidor::destroy($id);
        return redirect('/verserver');
    }
    public function ver(){
        $servers = Servidor::all();
        return view('displayserver', ['servers' => $servers]);
    }
    public function actualizar($id)
    {
        $jugos = Servidor::find($id);
        return view('serverup',['jugos'=>$jugos]);
    }
}
