<?php

namespace Database\Factories;
use App\Models\Phone;

use Illuminate\Database\Eloquent\Factories\Factory;

class PhoneFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Phone::class;

   
    
    public function definition()
    {
      
        return [
            'brand' => $this->faker->randomElement(['Samsung','Apple']),
            'model' => $this->faker->randomElement(['Iphnoe 13','Iphone 12','Galaxy S22','Galaxy S21']),
            'price' => $this->faker->numberBetween(800,3200),
            'screen' => $this->faker->randomFloat($nbMaxDecimals = 1, $min = 4, $max = 7),
            'memory' => $this->faker->randomElement($array = array ('32','128','256')),
            'osystem' => $this->faker->numberBetween(1,4),
            'condition' => $this->faker->randomElement($array = array ('Novo','Polovno')),
            'description' => 'Obicni opis',
        ];
    }
}
