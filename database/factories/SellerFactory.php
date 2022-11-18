<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SellerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $pt = ['Unsought Products', 'Commodity', 'Customer Preferences', 'Convenience Products', 'Niche Products'];
        return [
            'name'=>$this->faker->name(),
            'email'=>$this->faker->unique()->safeEmail(),
            'product_type'=>$this->faker->randomElement($pt),
            'total_sales'=>$this->faker->randomNumber($nbDigits = 5, $strict = false)
        ];
    }
}
