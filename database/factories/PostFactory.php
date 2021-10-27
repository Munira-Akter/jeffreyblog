<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this -> faker -> sentence();
        $slug = Str::slug($title);
        return [
            'title' => $title,
            'slug' => $slug,
            'user_id' => User::factory(),
            'category_id' => Category::factory(),
            'excerpt' =>  $this->faker->text(200)    ,
            'body' => $this -> faker -> paragraph(),
            // 'thumbnail' =>'https://source.unsplash.com/random',
            'published_at' => now()
        ];
    }
}
