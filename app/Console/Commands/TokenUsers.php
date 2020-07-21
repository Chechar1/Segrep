<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TokenUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'token:users';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Deshabilita los tokens pasado cierto tiempo';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $users = DB::select('select * from users where is_valido = ?', [1]);

        foreach ($users as $user) {
            $affected = DB::update('update users set enviado = 0 where id = ?', [$user->id]);
            $affected = DB::update('update users set Multitoken = NULL where id = ?', [$user->id]);
        }
    }
}
