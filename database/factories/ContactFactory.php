<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Contact::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'from' => $this->faker->text(),
            'subject' => $this->faker->text(),
            'phone' => $this->faker->phoneNumber(),
            'to' => $this->faker->text(),
            'cc' => $this->faker->text(),
            'cco' => $this->faker->text(),
            'body' => $this->faker->text(),
            'code' => $this->faker->numberBetween(0, 32767),
        ];
    }
}
