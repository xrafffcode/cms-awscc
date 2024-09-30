<?php

namespace Database\Seeders;

use Database\Factories\DivisionFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DivisionFactory::times(10)->create();
    }
}
