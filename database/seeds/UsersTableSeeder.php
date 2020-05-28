<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user =  App\User::create([
            'district_id' => 1,
            'role_id' => 1,
            'name' => 'david ortega',
            'email' => 'a@a.com',
            'password' => Hash::make('admin'),
            'authorized' => true
        ]);

        $user->userInfo()->create([
            'district_id' => $user->district_id,
            'street' => 'santa catalina',
            'external_number' => 9224,
            'internal_number' => 5,
        ]);
    }
}
