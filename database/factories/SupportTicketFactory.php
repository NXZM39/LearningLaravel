<?php

namespace Database\Factories;

use App\Models\SupportTicket;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

class SupportTicketFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SupportTicket::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'question' => $this->faker->paragraph(),
        ];
    }
}

