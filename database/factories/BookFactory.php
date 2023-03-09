<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "authorid"=>random_int(1,100),
            "title"=>$this->faker->name,
            "ISBN"=>$this->faker->colorName,
            "pub_year"=>random_int(1,25),
            "available"=>random_int(1,20)
        ];
    }
}
