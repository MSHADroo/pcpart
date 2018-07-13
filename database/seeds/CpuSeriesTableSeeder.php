<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CpuSeriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cpu_series')->insert([
            'title' => 'Intel Core i7',
            'status' => 'enable',
            'created_at' => now()
        ]);

        DB::table('cpu_series')->insert([
            'title' => 'Intel Core i5',
            'status' => 'enable',
            'created_at' => now()
        ]);

        DB::table('cpu_series')->insert([
            'title' => 'Intel Core i3',
            'status' => 'enable',
            'created_at' => now()
        ]);

        DB::table('cpu_series')->insert([
            'title' => 'AMD Ryzen 7',
            'status' => 'enable',
            'created_at' => now()
        ]);

        DB::table('cpu_series')->insert([
            'title' => 'AMD Ryzen 5',
            'status' => 'enable',
            'created_at' => now()
        ]);

        DB::table('cpu_series')->insert([
            'title' => 'AMD Ryzen 3',
            'status' => 'enable',
            'created_at' => now()
        ]);


    }
}
