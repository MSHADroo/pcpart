<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CpuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cpu')->insert([
            'title' => 'Intel - Core i7-8700K 3.7GHz 6-Core',
            'manufacture_id' => 1,
            'series_id' => 1,
            'family_id' => 4,
            'socket_id' => 16,
            'core' => 6,
            'tdp' => 95,
            'min_frequency' => 3.7,
            'max_frequency' => 4.7,
            'max_memory' => 64,
            'l1_cache' => '6 x 32KB Instruction, 6 x 32KB Data',
            'l2_cache' => '6 x 256KB',
            'l3_cache' => '1 x 12MB',
            'data_width' => 64,
            'multi_thread' => true,
            'ecc_support' => true,
            'cooler_include' => false,
            'status' => 'enable',
            'created_at' => now()
        ]);

        DB::table('cpu')->insert([
            'title' => 'Intel - Core i5-8600K 3.6GHz 6-Core',
            'manufacture_id' => 1,
            'series_id' => 1,
            'family_id' => 4,
            'socket_id' => 16,
            'core' => 6,
            'tdp' => 95,
            'min_frequency' => 3.6,
            'max_frequency' => 4.3,
            'max_memory' => 64,
            'l1_cache' => '6 x 32KB Instruction, 6 x 32KB Data',
            'l2_cache' => '6 x 256KB',
            'l3_cache' => '1 x 9MB',
            'data_width' => 64,
            'multi_thread' => false,
            'ecc_support' => true,
            'cooler_include' => false,
            'status' => 'enable',
            'created_at' => now()
        ]);
    }
}
