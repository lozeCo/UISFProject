<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class genera_usuarios extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => 'Alvaro Burgoa Naranjo',
            'email' => 'alvaroburgoa@gmail.com',
            'password' => bcrypt('inicial2019'),
        ]);
    }
}
