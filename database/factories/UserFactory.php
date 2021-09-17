<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'username' => $this->faker->bothify('?###??##'),
            'email' => $this->faker->unique()->safeEmail(),
            'name' => $this->faker->name(),
            'xp' => $this->faker->randomNumber(3),
            'headline' => $this->faker->sentence(3),
            'bio' => $this->faker->paragraph(3),
            'city' => $this->faker->city(),
            'last_used_at' => $this->faker->dateTimeBetween('-1 years', 'now'),
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
