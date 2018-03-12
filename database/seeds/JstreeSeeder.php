<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Query\Builder;
use App\Jstree;

class JstreeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $faker = Faker\Factory::create();

        //$userids =Jstree::all()->pluck('id')->toArray();
        //$user_ids =DB::table('treeviews')->pluck('id')->toArray();
        //$user_ids = DB::table('treeviews')->select('id')->get();
        //$user_id = $faker->randomElement($user_ids)->id;
        //'PARENT_ID' =>  $faker->randomElement($user_ids),

        //for ($i = 11; $i <= 21; $i++) {
            DB::table('treeviews')->insert([
                    'id' => 1,
                    'NAME' => 'task1',
                    'PARENT_ID' => 0,
                    'TEXT' => 'task1title'
            ]);
            DB::table('treeviews')->insert([
                'id' =>  2,
                'NAME' => 'task2',
                'PARENT_ID' =>  0,
                'TEXT' => 'task2title'
            ]);
            DB::table('treeviews')->insert([
                'id' =>  3,
                'NAME' => 'task3',
                'PARENT_ID' =>  0,
                'TEXT' => 'task1title3'
            ]);
            DB::table('treeviews')->insert([
                'id' =>  4,
                'NAME' => 'task4',
                'PARENT_ID' =>  3,
                'TEXT' => 'task2title4'
            ]);
            DB::table('treeviews')->insert([
                'id' =>  5,
                'NAME' => 'task5',
                'PARENT_ID' =>  5,
                'TEXT' => 'task2title5'
            ]);
            DB::table('treeviews')->insert([
                'id' =>  6,
                'NAME' => 'task6',
                'PARENT_ID' =>  5,
                'TEXT' => 'desc'
            ]);
            DB::table('treeviews')->insert([
                'id' =>  7,
                'NAME' => 'task7',
                'PARENT_ID' =>  2,
                'TEXT' => 'desc'
            ]);
      // }

    }
}
