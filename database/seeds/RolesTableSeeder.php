<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Role::create(['name' => 'admin']);
        App\Role::create(['name' => 'presidente']);
        App\Role::create(['name' => 'secretario']);
        App\Role::create(['name' => 'tesorero']);
        App\Role::create(['name' => 'comite']);
        App\Role::create(['name' => 'residente']);
        App\Role::create(['name' => 'visitante']);
    }
}
