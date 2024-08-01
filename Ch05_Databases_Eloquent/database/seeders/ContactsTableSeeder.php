<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        
        // User IDs
        $userIds = [2, 4];

        foreach ($userIds as $userId) {
            // Create up to 5 contacts for each user
            $numberOfContacts = rand(1, 5);
            for ($i = 0; $i < $numberOfContacts; $i++) {
                DB::table('contacts')->insert([
                    'name' => $faker->name,
                    'email' => $faker->unique()->safeEmail,
                    'phone' => $faker->phoneNumber,
                    'user_id' => $userId,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
