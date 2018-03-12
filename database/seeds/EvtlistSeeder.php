<?php

use Illuminate\Database\Seeder;

class EvtlistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for($i = 0; $i <20; $i++){
            DB::table('evtlists')->insert([
                'GID' =>  $faker->randomDigit,
                'NODEID' => $faker->randomDigit,
                'NODEIP' => $faker->ipv4,
                'NODENAME' => $faker-> firstNameMale,
                'EVTSTART' => $faker-> dateTime($max = 'now', $timezone = null),
                'EVTEND' => $faker-> dateTime($max = 'now', $timezone = null),
                'EVTOPEN' =>  $faker->randomDigit,
                'EVTGROUP' =>  $faker->randomDigit,
                'EVTITEM' => $faker->realText($faker->numberBetween(10,20)),
                'NODESTAT' => $faker->randomDigit,
                'EVTDESCR' => str_random(10),
                'EVTCOMMENT' => str_random(10),
                'EVTID' =>  $faker->randomDigit,
                'EVTIGNORE' =>  $faker->randomDigit,
                'EVTNOTIFY' =>  $faker->randomDigit,
                'CLSNOTIFY' =>  $faker->randomDigit,
                'WCHK' =>  $faker->randomDigit,
                'CURWEIGHT' =>  $faker->randomDigit,
                'CHKDATE' => $faker-> dateTime($max = 'now', $timezone = null),
            ]);
        }
    }
}
