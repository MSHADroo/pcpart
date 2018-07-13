<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MainboardFormFactorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mainboard_form_factor')->insert([
            'title' => 'ATX',
            'status' => 'enable',
            'created_at' => now()
        ]);
        DB::table('mainboard_form_factor')->insert([
            'title' => 'EATX',
            'status' => 'enable',
            'created_at' => now()
        ]);
        DB::table('mainboard_form_factor')->insert([
            'title' => 'Flex ATX',
            'status' => 'enable',
            'created_at' => now()
        ]);
        DB::table('mainboard_form_factor')->insert([
            'title' => 'HPTX',
            'status' => 'enable',
            'created_at' => now()
        ]);
        DB::table('mainboard_form_factor')->insert([
            'title' => 'Micro ATX',
            'status' => 'enable',
            'created_at' => now()
        ]);
        DB::table('mainboard_form_factor')->insert([
            'title' => 'Mini DTX',
            'status' => 'enable',
            'created_at' => now()
        ]);
        DB::table('mainboard_form_factor')->insert([
            'title' => 'Mini ITX',
            'status' => 'enable',
            'created_at' => now()
        ]);
        DB::table('mainboard_form_factor')->insert([
            'title' => 'SSI CEB',
            'status' => 'enable',
            'created_at' => now()
        ]);
        DB::table('mainboard_form_factor')->insert([
            'title' => 'SSI EEB',
            'status' => 'enable',
            'created_at' => now()
        ]);
        DB::table('mainboard_form_factor')->insert([
            'title' => 'Thin Mini ITX',
            'status' => 'enable',
            'created_at' => now()
        ]);
        DB::table('mainboard_form_factor')->insert([
            'title' => 'XL ATX',
            'status' => 'enable',
            'created_at' => now()
        ]);

    }
}