<?php

use Illuminate\Database\Seeder;

class SeedUsers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
       //  (1, 'test', 'test@test.com', '$2y$10$AJUYfde8UKYw9FVnFR34jO0acO.LlvyE5jXraqkzUejCXX0zRM9Ty', NULL, '2017-06-21 07:39:26', '2017-06-21 07:39:26');
        DB::table('users')->truncate(); // maak leeg
        DB::table('users')->insert(['id' => 1, 'name' => 'test', 'email' => 'test@test.com', 'password' => '$2y$10$AJUYfde8UKYw9FVnFR34jO0acO.LlvyE5jXraqkzUejCXX0zRM9Ty']);
    }
}