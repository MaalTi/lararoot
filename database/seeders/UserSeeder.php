<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::factory(10)->create([
            'password' =>  Hash::make('password'),
        ]);
        foreach ($users as $user) {
            $user->assignRole('Basic');
        }
    }
}
