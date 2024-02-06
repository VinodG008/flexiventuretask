<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class AllservicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        DB::table('Allservice')->insert([
           
            'service_name' => Str::random(10),
            'service_price' => Str::random(10),
            'service_img'=>Str::random(10),
            
        ]);
    }
}
