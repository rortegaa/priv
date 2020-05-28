<?php

use Illuminate\Database\Seeder;

class DistrictsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\District::create([
            'name' => 'privada santa catalina',
            'address' => 'paseo santa monica',
            'zip_code' => 32695
        ]);

        App\District::create([
            'name' => 'privada santa ana',
            'address' => 'paseo santa monica',
            'zip_code' => 32695
        ]);
    }
}
