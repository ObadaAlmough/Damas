<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
                    'name' => 'Obada Almoughrabi',
                    'email' => 'obadaAlmoug@damas.com',
                    'password' => bcrypt('obada')
                ]);
                $user->attachRole('superadmin');
    }
}
