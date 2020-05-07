<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Telegram;

class TelegramController extends Controller
{
    public function updatedActivity(){
        $activity = Telegram::getUpdates();
        dd($activity);
    }
    public function enviarMensaje(){
        $text = 'Aquí adjunta lo quieras enviar.';

        Telegram::sendMessage([
            'chat_id' => env('TELEGRAM_CHANNEL_ID', ''),
            'parse_mode' => 'HTML',
            'text' => $text
        ]);
    }
}
