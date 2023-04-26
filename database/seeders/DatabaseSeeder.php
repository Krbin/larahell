<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Payment;
use DateTime;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Payment::factory(6)->create();
        // Payment::create([
        //     'id' => 1,
        //     'name' => 'Test Name',
        //     'amount' => 5.50,
        //     'currency' => 'CZK',
        //     'payer' => 'Payer',
        //     'debtors' => 'debtor1,debtor2',
        //     'date' => '2023-12-11',
        //     'note' =>  'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur perspiciatis impedit officiis,dolorem a ratione! Modi, non sit ad consequuntur, quo exercitationem ducimus dolore inventore, illum dit nemo aspernatur ea.'
        // ]);
    }
}
