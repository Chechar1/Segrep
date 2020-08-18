<?php

namespace App\Http\Controllers;

use App\Servidor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\Http\Requests\ServidoRegistro;

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
    public function store(Request $request)
    {
        $registroAgregar = new Servidor;


        $registroAgregar->name = $request->name;
        $registroAgregar->ip = $request->ip;
        $registroAgregar->password = $request->password;
        $registroAgregar->host = $request->host;
        $registroAgregar->port = $request->port;


        $registroAgregar->save();
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
    public function update(Request $request, $id)
    {
        $serverup = Servidor::findOrFail($id);
        if ($request->name != NULL){
            $serverup->name = $request->name;
        }
        if ($request->ip != NULL){
            $serverup->ip = $request->name;
        }
        if ($request->password != NULL){
            $serverup->password = $request->name;
        }
        if ($request->host != NULL){
            $serverup->host = $request->name;
        }
        if ($request->port != NULL){
            $serverup->port = $request->name;
        }
        $serverup->save();
        return redirect('/servidor');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Servidor::delete($id);
    }
    public function ver(){
        $servers = Servidor::all();
        return view('displayserver', ['servers' => $servers]);
    }
}
