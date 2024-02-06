<?php

namespace Database\Factories;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\pujatype>
 */
class pujatypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
           
              'service_name' => Str::random(10),
            'service_price' => Str::random(10),
            'service_img'=>Str::random(10),
            ];
    
    }
}
