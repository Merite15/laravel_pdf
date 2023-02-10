<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ticket>
 */
class TicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'object' => $this->faker->sentence(4),
            'description' => $this->faker->text,
            'due_date' => $this->faker->dateTimeBetween('-1 month', 'now'),
            'origin' => $this->faker->randomElement(['call', 'mail']),
            'ticketable_type' => $this->faker->randomElement(['User', 'Customer']),
            'ticketable_id' => $this->faker->randomNumber([0, 10]),
            'status' => $this->faker->randomElement([0, 1]),
        ];
    }
}
