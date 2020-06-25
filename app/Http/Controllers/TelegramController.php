<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Telegram;
use Illuminate\Support\Str;


class TelegramController extends Controller
{
    public function updatedActivity(){
        $activity = Telegram::getUpdates();
        dd($activity);
    }
    public function enviarMensaje(){
        $text = Str::random(10);

        Telegram::sendMessage([
            'chat_id' => auth()->user()->telegramId,
            'parse_mode' => 'HTML',
            'text' => $text
        ]);
        return redirect('telegram');
    }
    public function index(){
        return view('telegram');
    }
}
