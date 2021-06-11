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
            'first_name' => $this->faker->name(),
            'last_name' => $this->faker->name(),
            'date_of_birth' => $this->faker->date(),
            'telephone' => $this->faker->phoneNumber(),
            'address_1' => $this->faker->streetAddress(),
            'address_2' => $this->faker->streetName(),
            'town' => $this->faker->city(),
            'postcode' => $this->faker->postcode(),
            'email' => $this->faker->unique()->safeEmail(),
            'join_date' => $this->faker->date(),
            'salary' => $this->faker->numberBetween(20000, 100000),
            'email_verified_at' => now(),
            'password' => $this->faker->password(),
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

    public function isAdmin()
    {
        $this->state([
            "isAdmin" => true
        ]);
    }

    public function isSuperAdmin()
    {
        $this->state([
            "isSuperAdmin" => true
        ]);
    }

}
