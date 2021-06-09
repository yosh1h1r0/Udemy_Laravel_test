<?php

namespace Database\Factories;

use App\Models\ContactForm;
use Illuminate\Database\Eloquent\Factories\Factory;


class ContactFormFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ContactForm::class;

    /**
     * Define the model's default state.
     *
     *  @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'url' => $this->faker->url,
            'sex' => $this->faker->randomElement(['0', '1']),
            'age' => $this->faker->numberBetween($min = 11, $max = 30),
            'contact' => $this->faker->realText(100),
        ];
    }
}
