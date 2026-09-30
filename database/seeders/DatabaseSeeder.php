<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = User::firstOrCreate(
            ['email' => 'noidamarketingcirp@gmail.com'],
            ['name' => 'noidamarketing']
        );

        $user->password = Hash::make('password@188');
        $user->save();

        $this->command->info('Default seeded user created: noidamarketing / noidamarketingcirp@gmail.com / password@188');
    }
}
