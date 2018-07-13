<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ManufactureTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('manufacture')->insert([
            'title' => 'Intel',
            'status' => 'enable',
            'created_at' => now()
        ]);

        DB::table('manufacture')->insert([
            'title' => 'AMD',
            'status' => 'enable',
            'created_at' => now()
        ]);

        DB::table('manufacture')->insert([
            'title' => 'ASUS',
            'status' => 'enable',
            'created_at' => now()
        ]);

        DB::table('manufacture')->insert([
            'title' => 'Samsung',
            'status' => 'enable',
            'created_at' => now()
        ]);


    }
}
