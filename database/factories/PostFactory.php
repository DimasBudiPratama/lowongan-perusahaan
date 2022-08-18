<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
           'title'  => $this->faker->sentence(mt_rand(4,8)), //mt_rand digunakan untuk memberikan jumlah yang diinginkan contoh nya mininal 2 sentence sampai sentence
           'lowongan'  => $this->faker->sentence(mt_rand(4,8)), //mt_rand digunakan untuk memberikan jumlah yang diinginkan contoh nya mininal 2 sentence sampai sentence
           'slug'   => $this->faker->slug(),
           'excerpt'=> $this->faker->paragraph(),
        //    'body'   => '<p>'. implode('</p><p>',$this->faker->paragraphs(mt_rand(10,15))). '</p>', //mt_rand digunakan untuk memberikan jumlah yang diinginkan contoh nya mininal 2 paragraft sampai paragraft
            
           'body'   => collect($this->faker->paragraphs(mt_rand(10,15)))
                        ->map(fn($p) => "<p>$p</p>")
                        ->implode(''),
           'keterangan'   => collect($this->faker->paragraphs(mt_rand(10,15)))
                        ->map(fn($p) => "<p>$p</p>")
                        ->implode(''),
           'user_id' => mt_rand(2,3), 
           'category_id'   => mt_rand(1,2),
           'pendidikan_id'   => mt_rand(1,2)
        ];
    }
}
