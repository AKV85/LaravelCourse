<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class SendEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mail:send
                        {user : The ID of the user}
                        {--queue : Whether the job should be queued}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send a marketing email to a user';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $userId=$this->argument('user');
        $this->info("User ID: $userId");
        $this->info("Sending email to user with ID $userId...");
        return Command::SUCCESS;
    }
}
