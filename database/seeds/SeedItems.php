<?php

use Illuminate\Database\Seeder;

class SeedItems extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->truncate(); // maak leeg
    }
}