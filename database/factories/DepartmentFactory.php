<?php

namespace Database\Factories;

use App\Models\Department;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class DepartmentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Department::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'department_name' => $this->faker->word(),
            'address_1' => $this->faker->streetAddress(),
            'address_2' => $this->faker->streetName(),
            'town' => $this->faker->city(),
            'postcode' => $this->faker->postcode(),
            'department_head_id' => User::factory()
        ];
    }
}
