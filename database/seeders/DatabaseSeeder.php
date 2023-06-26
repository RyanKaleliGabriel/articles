<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        //We can make it easier by adding our seeders to the main DatabaseSeeder class inside the database/seeds folder
        $this->call(ArticlesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        //This way, we can simply run $ php artisan db:seed and it will run all the called classes in the run() method.
    }
}
