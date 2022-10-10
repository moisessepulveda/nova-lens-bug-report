<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Payment>
 */
class PaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'payment_date' => $this->faker->dateTimeBetween('2019-01-01', '2022-09-09'),
            'amount' => $this->faker->numberBetween(1000, 60000),
        ];
    }
}
