<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('categories')->insert(array(
            0 => array(
                'id'=>1,
                'parent_id'=>null,
                'name'=>'Offres emploi',
                'slug'=>'offres-emploi',
                'type'=> 'salaire',
            ),
            1 => array(
                'id'=>2,
                'parent_id'=>null,
                'name'=>'Auto-Moto',
                'slug'=>'auto-moto',
                'type'=> 'price',
            ),
            2 => array(
                'id'=>3,
                'parent_id'=>1,
                'name'=>'Fullstack developer',
                'slug'=>'fullstack-developer',
                'type'=> 'salaire',
            ),
            3 => array(
                'id'=>4,
                'parent_id'=>2,
                'name'=>'Voiture',
                'slug'=>'voiture',
                'type'=> 'prix',
            ),
    ));
    }
}
