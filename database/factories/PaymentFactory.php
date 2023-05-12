<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use AmrShawky\LaravelCurrency\Facade\Currency;

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
    public function definition(): array
    {
        return [
            'payment_name' => $this->faker->word(),
            'amount' => $this->faker->randomFloat(2, 0, 100000),
            'payer' => $this->faker->word(),
            'debtors' => $this->faker->word(2),
            // 'date' => $this->faker->dateTime(),
            'note' => $this->faker->sentence(),

        ];
    }
}
