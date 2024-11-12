<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PartType;

class PartTypeSeeder extends Seeder
{
    public function run(): void
    {
        PartType::create([
            'name' => 'Engine',
        ]);

        PartType::create([
            'name' => 'Transmission',
        ]);
    }
}
