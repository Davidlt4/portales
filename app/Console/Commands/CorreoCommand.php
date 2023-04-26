<?php

namespace App\Console\Commands;

use App\Http\Controllers\CorreoController;
use Illuminate\Console\Command;

class CorreoCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'enviar:correo';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
        CorreoController::enviar();
        CorreoController::limpiar();
    }
}
