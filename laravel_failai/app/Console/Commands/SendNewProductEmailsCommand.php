<?php

namespace App\Console\Commands;

use App\Mail\NewProductNotification;
use App\Models\Product;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendNewProductEmailsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'products:sendmail-new';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */

    public function handle()
    {
        // gauname naujas prekes, kurios buvo sukurta paskutiniame dienų
        $newProducts = Product::where('created_at', '>', now()->subDay())->get();

        // siunčiame el. laiškus vartotojams apie naujas prekes
        foreach ($newProducts as $product) {
            $users = User::all(); // pavyzdžiui, visi vartotojai
            foreach ($users as $user) {
                Mail::to($user->email)->send(new NewProductNotification($product));
            }
        }

        // jei viskas gerai suveikė, grąžiname success rezultatą
        return Command::SUCCESS;
    }
}
