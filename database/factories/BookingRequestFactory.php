<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\BookingRequest;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BookingRequest>
 */
class BookingRequestFactory extends Factory
{
    protected $model = BookingRequest::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'client_name' => $this->faker->name,
            'client_email' => $this->faker->email(),
            'wedding_date' => $this->faker->date(),
            'number_guests' => $this->faker->numerify('###'),
            'budget' => $this->faker->numerify('#####'),
        ];
    }
}
