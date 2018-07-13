<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CpuSocketTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cpu_socket')->insert([
            'title' => 'AM1',
            'manufacture_id' => 2,
            'status' => 'enable',
            'created_at' => now()
        ]);

        DB::table('cpu_socket')->insert([
            'title' => 'AM2',
            'manufacture_id' => 2,
            'status' => 'enable',
            'created_at' => now()
        ]);

        DB::table('cpu_socket')->insert([
            'title' => 'AM2+/AM2',
            'manufacture_id' => 2,
            'status' => 'enable',
            'created_at' => now()
        ]);
        DB::table('cpu_socket')->insert([
            'title' => 'AM3',
            'manufacture_id' => 2,
            'status' => 'enable',
            'created_at' => now()
        ]);
        DB::table('cpu_socket')->insert([
            'title' => 'AM3+',
            'manufacture_id' => 2,
            'status' => 'enable',
            'created_at' => now()
        ]);
        DB::table('cpu_socket')->insert([
            'title' => 'AM3+/AM3',
            'manufacture_id' => 2,
            'status' => 'enable',
            'created_at' => now()
        ]);
        DB::table('cpu_socket')->insert([
            'title' => 'AM3/AM2+',
            'manufacture_id' => 2,
            'status' => 'enable',
            'created_at' => now()
        ]);
        DB::table('cpu_socket')->insert([
            'title' => 'AM3/AM2+/AM2',
            'manufacture_id' => 2,
            'status' => 'enable',
            'created_at' => now()
        ]);
        DB::table('cpu_socket')->insert([
            'title' => 'AM4',
            'manufacture_id' => 2,
            'status' => 'enable',
            'created_at' => now()
        ]);
        DB::table('cpu_socket')->insert([
            'title' => 'FM1',
            'manufacture_id' => 2,
            'status' => 'enable',
            'created_at' => now()
        ]);
        DB::table('cpu_socket')->insert([
            'title' => 'FM2',
            'manufacture_id' => 2,
            'status' => 'enable',
            'created_at' => now()
        ]);
        DB::table('cpu_socket')->insert([
            'title' => 'FM2+',
            'manufacture_id' => 2,
            'status' => 'enable',
            'created_at' => now()
        ]);
        DB::table('cpu_socket')->insert([
            'title' => 'G34 x 2',
            'manufacture_id' => 2,
            'status' => 'enable',
            'created_at' => now()
        ]);
        DB::table('cpu_socket')->insert([
            'title' => 'LGA775',
            'manufacture_id' => 1,
            'status' => 'enable',
            'created_at' => now()
        ]);
        DB::table('cpu_socket')->insert([
            'title' => 'LGA1150',
            'manufacture_id' => 1,
            'status' => 'enable',
            'created_at' => now()
        ]);
        DB::table('cpu_socket')->insert([
            'title' => 'LGA1151',
            'manufacture_id' => 1,
            'status' => 'enable',
            'created_at' => now()
        ]);
        DB::table('cpu_socket')->insert([
            'title' => 'LGA1155',
            'manufacture_id' => 1,
            'status' => 'enable',
            'created_at' => now()
        ]);
        DB::table('cpu_socket')->insert([
            'title' => 'LGA1156',
            'manufacture_id' => 1,
            'status' => 'enable',
            'created_at' => now()
        ]);
        DB::table('cpu_socket')->insert([
            'title' => 'LGA1366',
            'manufacture_id' => 1,
            'status' => 'enable',
            'created_at' => now()
        ]);
        DB::table('cpu_socket')->insert([
            'title' => 'LGA1366 x 2',
            'manufacture_id' => 1,
            'status' => 'enable',
            'created_at' => now()
        ]);
        DB::table('cpu_socket')->insert([
            'title' => 'LGA2011',
            'manufacture_id' => 1,
            'status' => 'enable',
            'created_at' => now()
        ]);
        DB::table('cpu_socket')->insert([
            'title' => 'LGA2011 x 2',
            'manufacture_id' => 1,
            'status' => 'enable',
            'created_at' => now()
        ]);
        DB::table('cpu_socket')->insert([
            'title' => 'LGA2011-3',
            'manufacture_id' => 1,
            'status' => 'enable',
            'created_at' => now()
        ]);
        DB::table('cpu_socket')->insert([
            'title' => 'LGA2011-3 Narrow',
            'manufacture_id' => 1,
            'status' => 'enable',
            'created_at' => now()
        ]);
        DB::table('cpu_socket')->insert([
            'title' => 'LGA2011-3 Narrow x 2',
            'manufacture_id' => 1,
            'status' => 'enable',
            'created_at' => now()
        ]);
        DB::table('cpu_socket')->insert([
            'title' => 'LGA2011-3 x 2',
            'manufacture_id' => 1,
            'status' => 'enable',
            'created_at' => now()
        ]);
        DB::table('cpu_socket')->insert([
            'title' => 'LGA2066',
            'manufacture_id' => 1,
            'status' => 'enable',
            'created_at' => now()
        ]);

    }
}


