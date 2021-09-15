<?php

namespace App\Console\Commands;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class ChangePassword extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'change:password 
    {new_password : The new password} 
    {email=admin@admin.com : New user, default admin}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Change password of the desired user';

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
     * @return int
     */
    public function handle()
    {
        $email = $this->argument('email');
        $new_password = $this->argument('new_password');
        if ($this->confirm('Are you ssure you want to run the command with this data email '.$email.' password '.$new_password)) {
            $user = User::where('email','=', $email)->first();
            $user->password = Hash::make($new_password );
            $user->save();
        }
    }
}
