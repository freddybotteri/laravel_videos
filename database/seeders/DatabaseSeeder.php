<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        \App\Models\Group::factory(3)->create();

        \App\Models\Level::factory()->create([
            'name' => 'Oro'
        ]);
        \App\Models\Level::factory()->create([
            'name' => 'Plata'
        ]);
        \App\Models\Level::factory()->create([
            'name' => 'Bronce'
        ]);
    }
}
