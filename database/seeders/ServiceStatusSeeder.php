<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ServiceStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('service_status')->insert([
            'services' => 'register',
            'status' => 'on',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

}
