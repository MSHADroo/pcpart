<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(ManufactureTableSeeder::class);
         $this->call(CpuSeriesTableSeeder::class);
         $this->call(CpuFamilyTableSeeder::class);
         $this->call(CpuSocketTableSeeder::class);
         $this->call(MainboardFormFactorTableSeeder::class);
         $this->call(MainboardChipsetTableSeeder::class);
         $this->call(VgaBridgeTableSeeder::class);
         $this->call(MemoryTypeTableSeeder::class);
    }