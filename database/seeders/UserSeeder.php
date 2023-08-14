<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Heriberto Jacome',
            'email'=> 'heriberto.jacome@trapape.com',
            'password' => bcrypt('B3T081422')
        ])->assignRole('admin');

        User::factory(9)->create();

    }
}
