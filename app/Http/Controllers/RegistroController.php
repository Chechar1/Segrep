<?php

namespace App\Http\Controllers;

use App\Registro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\Http\Requests\UsuarioRegistro;
use App\Http\Requests\UserUp;

class RegistroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return view('create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsuarioRegistro $request)
    {
        $registroAgregar = new Registro;


        $registroAgregar->name = $request->name;
        $registroAgregar->email = $request->email;
        $registroAgregar->password = $request->password;
        $registroAgregar->telegramId = $request->telegramId;

        if ($request->has('password')) {
            $registroAgregar['password']=Hash::make($registroAgregar['password']);
        }

        $registroAgregar->save();
        return redirect('/crear');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function show(Registro $registro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function edit(Registro $registro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function update(UserUp $request, $id)
    {
        $resgistroup = Registro::find($id);
        $resgistroup->name = $request->name;
        $resgistroup->email = $request->name;
        $resgistroup->password = $request->name;
        $resgistroup->telegramId = $request->name;


        $resgistroup->save();
        return redirect('/actualizar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Registro::destroy($id);
        return redirect('/ver');
    }
    public function ver(){
        $servers = Registro::all();
        return view('displayusers', ['servers' => $servers]);
    }
    public function actualizar($id)
    {
        $jugos = Registro::find($id);
        return view('createup',['jugos'=>$jugos]);
    }
}

