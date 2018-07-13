<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VgaBridgeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vga_bridge')->insert([
            'title' => '2-way SLI Capable',
            'status' => 'enable',
            'created_at' => now()
        ]);

        DB::table('vga_bridge')->insert([
            'title' => '3-way SLI Capable',
            'status' => 'enable',
            'created_at' => now()
        ]);

        DB::table('vga_bridge')->insert([
            'title' => '4-way SLI Capable',
            'status' => 'enable',
            'created_at' => now()
        ]);

        DB::table('vga_bridge')->insert([
            'title' => '2-way CrossFire Capable',
            'status' => 'enable',
            'created_at' => now()
        ]);

        DB::table('vga_bridge')->insert([
            'title' => '3-way CrossFire Capable',
            'status' => 'enable',
            'created_at' => now()
        ]);

        DB::table('vga_bridge')->insert([
            'title' => '4-way CrossFire Capable',
            'status' => 'enable',
            'created_at' => now()
        ]);
    }
}
