<?php

namespace App\Commands;

use App\Commands\Command;
use Illuminate\Contracts\Bus\SelfHandling;

class sendMails extends Command implements SelfHandling
{
    /**
     * The name and signature of the console command.
     *
     * @var String
    */
    protected $signature = 'email:send {user}';
    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the command.
     *
     * @return void
     */
    public function handle()
    {
        //
    }
}
