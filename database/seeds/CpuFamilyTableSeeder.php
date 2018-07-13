<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CpuFamilyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cpu_family')->insert([
            'title' => 'Coffee Lake-S',
            'status' => 'enable',
            'created_at' => now()
        ]);

        DB::table('cpu_family')->insert([
            'title' => 'Kaby Lake-S',
            'status' => 'enable',
            'created_at' => now()
        ]);

        DB::table('cpu_family')->insert([
            'title' => 'Kaby Lake-X',
            'status' => 'enable',
            'created_at' => now()
        ]);

        DB::table('cpu_family')->insert([
            'title' => 'Skylake-X',
            'status' => 'enable',
            'created_at' => now()
        ]);
    }
}
