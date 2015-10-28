<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        factory(App\Post::class, 50)->create();
        factory(App\Post::class, 50)->create()->each(function($u){
            $u->comment()->save(factory('App\Comment')->make());
        });
    }
}
