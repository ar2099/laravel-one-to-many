<?php

use Illuminate\Database\Seeder;
use App\Models\Post;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10 ; $i++) { 
            $post = new Post();
            $post->author = $faker->name();
            $post->data = $faker->date();
            $post->title = $faker->sentence();
            $post->text = $faker->text(300);
            $post->slung = Str::slug($post->title, '-');
            $post->save();
        }
    }
}
