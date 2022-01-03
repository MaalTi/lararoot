<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::factory()->create([
            'name' => 'Super Admin 1',
            'email' => 'admin1@demo.com',
            'password' =>  Hash::make('password'),
        ]);
        $user->assignRole('Super Admin');

        $user = User::factory()->create([
            'name' => 'Super Admin 2',
            'email' => 'admin2@demo.com',
            'password' =>  Hash::make('password'),
        ]);
        $user->assignRole('Super Admin');

    }
}
