<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            'name' => Str::random(10),
            'email' => Str::random(10).'@kopdig.id',
            'password' => password_hash('password', PASSWORD_DEFAULT), // 12345678
            'remember_token' => Str::random(10),
            'role_id' => 4,
            'cooperative_id' => Arr::random([1,2,3,4]),
            'credit_card_number' => '1234567890123456',
            'phone_number' => '09123456789',
            'address' => '123 Fake Street, Fake City, Fake State, 12345',
        ];


        for ($users=1; $users <= 5; $users++) {
            User::create($users);
        }
    }

}
