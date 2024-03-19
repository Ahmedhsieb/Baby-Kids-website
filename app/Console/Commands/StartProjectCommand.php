<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;
use function Symfony\Component\Translation\t;

class StartProjectCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'start:project';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This Command is for make new user when run the project for first time!';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $name = $this->ask('Enter User Name: ');
        $email = $this->ask('Enter User Email: ');
        $password = $this->ask('Enter User Password: ');

        if ($email == User::where('email', $email)->first()){
            $this->info('The user email is already exist! ');
            return 0;
        }

        User::create([
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($password)
        ]);

        $this->info('User Created Successfully');

        return 0;
    }
}
