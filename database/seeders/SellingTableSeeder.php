<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Selling;

class SellingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Selling::factory()->count(10)->create();
    }
}
