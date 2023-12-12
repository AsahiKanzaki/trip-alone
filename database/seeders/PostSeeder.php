<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert(['name'=>'グルメ']);
        DB::table('genres')->insert(['name'=>'自然']);
        DB::table('genres')->insert(['name'=>'体験']);
        DB::table('genres')->insert(['name'=>'旅館']);
        DB::table('genres')->insert(['name'=>'歴史']);
        
    }
}
