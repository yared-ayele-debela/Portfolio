<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('service')->insert([
            [
                'service_name' => 'Web Design',
                'service_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'price'=>1200,
                'technology_used'=>'Html,Css,Javascript,Jquery',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'service_name' => 'Graphic Design',
                'service_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'price'=>1200,
                'technology_used'=>'Html,Css,Javascript,Jquery',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'service_name' => 'UI/UX Design',
                'service_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'price'=>1200,
                'technology_used'=>'Html,Css,Javascript,Jquery',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}