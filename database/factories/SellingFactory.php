<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Selling;
use Carbon\Carbon;

class SellingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

     protected $model = Selling::class;

    public function definition()
    {
        return [
            'date' => Carbon::now(),
            'phone' => $this->faker->numberBetween(1,10),
            'customer'=> $this->faker->numberBetween(1,10),
        ];
    }
}
