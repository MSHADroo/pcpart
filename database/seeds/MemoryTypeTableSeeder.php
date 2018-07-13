<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MemoryTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('memory_type')->insert([
            'title' => 'DDR2 184-pin DIMM',
            'status' => 'enable',
            'created_at' => now()
        ]);

        DB::table('memory_type')->insert([
            'title' => 'DDR2 200-pin SODIMM',
            'status' => 'enable',
            'created_at' => now()
        ]);

        DB::table('memory_type')->insert([
            'title' => 'DDR2 204-pin SODIMM',
            'status' => 'enable',
            'created_at' => now()
        ]);

        DB::table('memory_type')->insert([
            'title' => 'DDR2 240-pin DIMM',
            'status' => 'enable',
            'created_at' => now()
        ]);

        DB::table('memory_type')->insert([
            'title' => 'DDR2 260-pin SODIMM',
            'status' => 'enable',
            'created_at' => now()
        ]);

        DB::table('memory_type')->insert([
            'title' => 'DDR2 284-pin DIMM',
            'status' => 'enable',
            'created_at' => now()
        ]);

        DB::table('memory_type')->insert([
            'title' => 'DDR2 288-pin DIMM',
            'status' => 'enable',
            'created_at' => now()
        ]);

        DB::table('memory_type')->insert([
            'title' => 'DDR3 184-pin DIMM',
            'status' => 'enable',
            'created_at' => now()
        ]);

        DB::table('memory_type')->insert([
            'title' => 'DDR3 200-pin SODIMM',
            'status' => 'enable',
            'created_at' => now()
        ]);

        DB::table('memory_type')->insert([
            'title' => 'DDR3 204-pin SODIMM',
            'status' => 'enable',
            'created_at' => now()
        ]);

        DB::table('memory_type')->insert([
            'title' => 'DDR3 240-pin DIMM',
            'status' => 'enable',
            'created_at' => now()
        ]);

        DB::table('memory_type')->insert([
            'title' => 'DDR3 260-pin SODIMM',
            'status' => 'enable',
            'created_at' => now()
        ]);

        DB::table('memory_type')->insert([
            'title' => 'DDR3 284-pin DIMM',
            'status' => 'enable',
            'created_at' => now()
        ]);

        DB::table('memory_type')->insert([
            'title' => 'DDR3 288-pin DIMM',
            'status' => 'enable',
            'created_at' => now()
        ]);

        DB::table('memory_type')->insert([
            'title' => 'DDR4 184-pin DIMM',
            'status' => 'enable',
            'created_at' => now()
        ]);

        DB::table('memory_type')->insert([
            'title' => 'DDR4 200-pin SODIMM',
            'status' => 'enable',
            'created_at' => now()
        ]);

        DB::table('memory_type')->insert([
            'title' => 'DDR4 204-pin SODIMM',
            'status' => 'enable',
            'created_at' => now()
        ]);

        DB::table('memory_type')->insert([
            'title' => 'DDR4 240-pin DIMM',
            'status' => 'enable',
            'created_at' => now()
        ]);

        DB::table('memory_type')->insert([
            'title' => 'DDR4 260-pin SODIMM',
            'status' => 'enable',
            'created_at' => now()
        ]);

        DB::table('memory_type')->insert([
            'title' => 'DDR4 284-pin DIMM',
            'status' => 'enable',
            'created_at' => now()
        ]);

        DB::table('memory_type')->insert([
            'title' => 'DDR4 288-pin DIMM',
            'status' => 'enable',
            'created_at' => now()
        ]);
    }
}
