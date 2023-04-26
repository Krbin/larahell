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
        $currency = $this->faker->currencyCode();
        $amount = $this->faker->randomFloat(2, 0, 100000);
        $value = Currency::convert()
            ->from($currency)
            ->to('SEK')
            ->amount($amount)
            ->get();
        return [
            'name' => $this->faker->word(),
            'amount' => $amount,
            'currency' => $currency,
            'payer' => $this->faker->word(),
            'debtors' => $this->faker->word(2),
            'date' => '2023-12-15',
            'note' => $this->faker->sentence(),
            'value' => $value
        ];
    }
}
