<?php

use Illuminate\Database\Seeder;

class SeederMonsterTypes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('monster_types')->truncate(); // maak leeg

        //Area 15/1
        DB::table('monster_types')->insert(['name' => 'Mutated Rat', 'image_url' => '/img/Monsters/Mutatedrat.png',
            'attack' => '50', 'defense' => '150', 'curhp' => '150', 'xp' => '10', 'gold' => '100', 'chance' => NULL]);
        DB::table('monster_types')->insert(['name' => 'Killer Clowns', 'image_url' => '/img/Monsters/killerclowns.png',
            'attack' => '10', 'defense' => '350', 'curhp' => '500', 'xp' => '50', 'gold' => '175', 'chance' => NULL]);
        DB::table('monster_types')->insert(['name' => 'Zombie', 'image_url' => '/img/Monsters/zombie.png',
            'attack' => '10', 'defense' => '0', 'curhp' => '50', 'xp' => '5', 'gold' => '50', 'chance' => NULL]);
        DB::table('monster_types')->insert(['name' => 'octo man', 'image_url' => '/img/Monsters/octoman.png',
            'attack' => '250', 'defense' => '1000', 'curhp' => '750', 'xp' => '400', 'gold' => '250', 'chance' => NULL]);
        DB::table('monster_types')->insert(['name' => 'scoripo', 'image_url' => '/img/Monsters/scoripo.png',
            'attack' => '3500', 'defense' => '3500', 'curhp' => '5000', 'xp' => '1000', 'gold' => '7500', 'chance' => '100']);

        //Area 15/2
        DB::table('monster_types')->insert(['name' => 'Cerberus', 'image_url' => '/img/Monsters/Cerbereus.png',
            'attack' => '25000', 'defense' => '30000', 'curhp' => '60000', 'xp' => '15000', 'gold' => '15500', 'chance' => '100']);
        DB::table('monster_types')->insert(['name' => 'Police officer', 'image_url' => '/img/Monsters/Officer.png',
            'attack' => '500', 'defense' => '500', 'curhp' => '1000', 'xp' => '850', 'gold' => '2400', 'chance' => NULL]);
        DB::table('monster_types')->insert(['name' => 'Swat team', 'image_url' => '/img/Monsters/Swat.png',
            'attack' => '2000', 'defense' => '4500', 'curhp' => '5500', 'xp' => '8000', 'gold' => '6000', 'chance' => NULL]);
        DB::table('monster_types')->insert(['name' => 'The Rat King', 'image_url' => '/img/Monsters/RatKing.png',
            'attack' => '2000', 'defense' => '6500', 'curhp' => '5000', 'xp' => '10000', 'gold' => '7000', 'chance' => NULL]);
        DB::table('monster_types')->insert(['name' => 'Mutated guard dog', 'image_url' => '/img/Monsters/Dog.png',
            'attack' => '1000', 'defense' => '500', 'curhp' => '1500', 'xp' => '1500', 'gold' => '4000', 'chance' => NULL]);
        DB::table('monster_types')->insert(['name' => 'Gangster Squad', 'image_url' => '/img/Monsters/GangsterSquad.png',
            'attack' => '6500', 'defense' => '1500', 'curhp' => '5000', 'xp' => '3800', 'gold' => '4500', 'chance' => NULL]);
        DB::table('monster_types')->insert(['name' => 'Prisoner', 'image_url' => '/img/Monsters/prisoner.png',
            'attack' => '100', 'defense' => '250', 'curhp' => '1000', 'xp' => '500', 'gold' => '1000', 'chance' => NULL]);
    }
}
