<?php

namespace App\Http\Controllers;

use App\Token;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\TokenValida;
use Illuminate\Foundation\Console\Presets\React;
use Telegram;

class TokenController extends Controller
{
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth');
    }

    /**
     * Show the form for creating a new resource.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(TokenValida $request)
    {
        $token = new Token;
        $token->multitoken = $request->multitoken;

        $usuario = Token::findOrFail(auth()->user()->id);
        if($token->multitoken == $usuario->multitoken){
            $usuario->is_valido = true;
            $usuario->save();
            return redirect('/home');
        }else{
            return back();
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $token = Str::random(10);
        $usuario = Token::findOrFail(auth()->user()->id);
        $usuario->multitoken = $token;
        $usuario->save();
        Telegram::sendMessage([
            'chat_id' => auth()->user()->telegramId,
            'parse_mode' => 'HTML',
            'text' => $token
        ]);
        return view('auth');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Token  $token
     * @return \Illuminate\Http\Response
     */
    public function show(Token $token)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Token  $token
     * @return \Illuminate\Http\Response
     */
    public function edit(Token $token)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Token  $token
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Token $token)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Token  $token
     * @return \Illuminate\Http\Response
     */
    public function destroy(Token $token)
    {
        //
    }
}
