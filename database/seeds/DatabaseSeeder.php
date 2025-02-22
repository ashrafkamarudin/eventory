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
        // $this->call(UsersTableSeeder::class);
        $this->call(LaratrustSeeder::class);
        // $this->call(UserSeeder::class);
        // $this->call(EventSeeder::class);
        // $this->call(UserEventCommentSeeder::class);
    }
}
