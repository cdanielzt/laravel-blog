<?php

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
        App\User::create([
            'name' => 'Carlos Zapata',
            'email' => 'i@admin.com',
            'password' => bcrypt('admin'),
        ]);

        factory(App\Post::class,24)->create();
    }
}
