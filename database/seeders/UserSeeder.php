<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
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
            'name' => 'Freddy Arriaga Cruz',
            'email' => 'fac.ficct@uagrm.edu',
            'password' => bcrypt('irascema')
        ])->assignRole('admin');
        User::factory(20)->create();
    }
}
