<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::truncate();
        Category::truncate();
        Post::truncate();

        $user = User::factory()->create([
            'name' => 'John Doe'
        ]);

        // Post::factory(5)->create();

        Post::factory(5)->create([
            'user_id' => $user->id
        ]);

        // $user = User::factory()->create();

        // $personalna = Category::create([
        //     'name' => 'Personalna',
        //     'slug' => 'personalne'
        // ]);
        // $rodzinka = Category::create([
        //     'name' => 'Rodzinka',
        //     'slug' => 'rodzinka'
        // ]);
        // $hobby = Category::create([
        //     'name' => 'Hobby',
        //     'slug' => 'hobby'
        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $hobby->id,
        //     'title' => 'Moje Hobby',
        //     'slug' => 'my-first-post',
        //     'excerpt' => 'coś tam takiego czego jeszcze nie wiesz..',
        //     'body' => 'ach było to dawno dawno temu, i nikt nic o tym nie wiedział, a było to tak, wiesz tak to leci i leci, wiesz o co chodzi..'
        // ]);
        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $rodzinka->id,
        //     'title' => 'Coś o rodzince',
        //     'slug' => 'my-second-post',
        //     'excerpt' => 'coś tam takiego czego jeszcze nie wiesz..',
        //     'body' => 'ach było to dawno dawno temu, i nikt nic o tym nie wiedział, a było to tak, wiesz tak to leci i leci, wiesz o co chodzi..'
        // ]);
        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $personalna->id,
        //     'title' => 'Moje personalne info',
        //     'slug' => 'my-third-post',
        //     'excerpt' => 'coś tam takiego czego jeszcze nie wiesz..',
        //     'body' => 'ach było to dawno dawno temu, i nikt nic o tym nie wiedział, a było to tak, wiesz tak to leci i leci, wiesz o co chodzi..'
        // ]);
    }
}
