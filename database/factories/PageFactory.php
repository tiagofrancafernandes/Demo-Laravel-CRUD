<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Page>
 */
class PageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $title = $this->faker->sentence(), //Meu Site
            'slug' => \Str::slug($title),
            'content' => $this->faker->sentence(45),
            'active' => true,
            'protected' => false,
        ];
    }
}
