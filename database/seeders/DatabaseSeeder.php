<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        Post::truncate();
        Category::truncate();


        User::factory(3)->create();

        $politic = Category::create([
            'name' => 'polictics',
            'slug' => 'polictics',
        ]);

        $covid = Category::create([
            'name' => 'covid',
            'slug' => 'covid',
        ]);


        $economic = Category::create([
            'name' => 'economic',
            'slug' => 'economic',
        ]);

        $first = Post::create([
            'title' => 'As UK resists COVID measures, experts fear ‘devastating winter’',
            'slug' => 'as-uk-resiists',
            'excerpt' => "The death toll is also climbing. On Tuesday, officials recorded the highest daily toll since early March, with 223 deaths. More than 8,000 people are currently hospitalised with the virus.",
            'body' => "The death toll is also climbing. On Tuesday, officials recorded the highest daily toll since early March, with 223 deaths. More than 8,000 people are currently hospitalised with the virus.

            Alarmed by the situation, senior healthcare figures are publicly urging British Prime Minister Boris Johnson to tackle transmission rates by making face masks mandatory, advising people to work from home and raising awareness about the benefits of ventilated public spaces.",
            'published_at' => now(),
            'category_id' => $covid -> id,
            'user_id' => 1,
        ]);

        $sec = Post::create([
            'title' => 'Afghan journalists lament ‘bleak’ future for media under Taliban',
            'slug' => 'afgan-journalist',
            'excerpt' => "The death toll is also climbing. On Tuesday, officials recorded the highest daily toll since early March, with 223 deaths. More than 8,000 people are currently hospitalised with the virus.",
            'body' => "The death toll is also climbing. On Tuesday, officials recorded the highest daily toll since early March, with 223 deaths. More than 8,000 people are currently hospitalised with the virus.

            Alarmed by the situation, senior healthcare figures are publicly urging British Prime Minister Boris Johnson to tackle transmission rates by making face masks mandatory, advising people to work from home and raising awareness about the benefits of ventilated public spaces.",
            'published_at' => now(),
            'category_id' => $politic -> id,
            'user_id' => 2,
        ]);

        $third = Post::create([
            'title' => 'Judge says US held Afghan man unlawfully at Guantanamo Bay’',
            'slug' => 'judge-says',
            'excerpt' => "The death toll is also climbing. On Tuesday, officials recorded the highest daily toll since early March, with 223 deaths. More than 8,000 people are currently hospitalised with the virus.",
            'body' => "The death toll is also climbing. On Tuesday, officials recorded the highest daily toll since early March, with 223 deaths. More than 8,000 people are currently hospitalised with the virus.

            Alarmed by the situation, senior healthcare figures are publicly urging British Prime Minister Boris Johnson to tackle transmission rates by making face masks mandatory, advising people to work from home and raising awareness about the benefits of ventilated public spaces.",
            'published_at' => now(),
            'category_id' => $economic -> id,
            'user_id' => 3,
        ]);




    }
}
