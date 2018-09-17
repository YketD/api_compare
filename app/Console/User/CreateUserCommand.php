<?php

namespace App\Console\User;

use App\User;
use Illuminate\Console\Command;

class CreateUserCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'code14:create-User';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a User';

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
        $user = new User();
        $user->name = "admin";
        $user->email = "admin@admin.nl";
        $user->password = bcrypt("admin");

        $user->save();
    }
}
