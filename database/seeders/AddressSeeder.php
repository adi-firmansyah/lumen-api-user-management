<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\User;
use Illuminate\Database\Seeder;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userIds = User::inRandomOrder()->take(5)->pluck('id');

        foreach ($userIds as $userId) {
            Address::factory(rand(1, 3))->create([
                'user_id' => $userId,
            ]);
        }
    }
}
