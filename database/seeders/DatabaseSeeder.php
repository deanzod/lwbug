<?php

namespace Database\Seeders;

use App\Models\Other;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(5)->create()->each(function ($user) {
            $company =  \App\Models\Company::factory()->hasOthers()->create();
            $user->companies()->attach($company);
        });
    }
}
