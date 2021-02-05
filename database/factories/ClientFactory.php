<?php

namespace Database\Factories;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Client::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'firstname' => $this->faker->firstName,
            'lastname' => $this->faker->lastName,
            'mobile'=>$this->faker->phoneNumber,
            'tel'=>$this->faker->phoneNumber,
            'email1' => $this->faker->unique()->safeEmail,
            'email2' => $this->faker->unique()->safeEmail,
        ];
    }
}
