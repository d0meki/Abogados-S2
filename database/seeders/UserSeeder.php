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
        $admin = User::create([
            'name' => 'Freddy Arriaga Cruz',
            'email' => 'fac.ficct@uagrm.edu',
            'password' => bcrypt('password')
        ])->assignRole('admin');

        $admin->createToken('auth_token')->plainTextToken;

        $user1 = User::create([
            'name' => 'Emerson Flores Robles',
            'email' => 'efr.ficct@uagrm.edu',
            'password' => bcrypt('password')
        ]);

        $user1->createToken('auth_token')->plainTextToken;

        $user2 = User::create([
            'name' => 'Vania Llanos Palma',
            'email' => 'vlp.ficct@uagrm.edu',
            'password' => bcrypt('password')
        ]);

        $user2->createToken('auth_token')->plainTextToken;

        $user3 = User::create([
            'name' => 'Bianca Ayala Cortez',
            'email' => 'bac.ficct@uagrm.edu',
            'password' => bcrypt('password')
        ]);

        $user3->createToken('auth_token')->plainTextToken;

        $user4 = User::create([
            'name' => 'Cristhian Flores Mob',
            'email' => 'cfm.ficct@uagrm.edu',
            'password' => bcrypt('password')
        ]);

        $user4->createToken('auth_token')->plainTextToken;

        $user5 = User::create([
            'name' => 'Edson Ruiz Paz',
            'email' => 'erp.ficct@uagrm.edu',
            'password' => bcrypt('password')
        ]);

        $user5->createToken('auth_token')->plainTextToken;

        $user6 = User::create([
            'name' => 'Vanesa Palma Llanos',
            'email' => 'vpl.ficct@uagrm.edu',
            'password' => bcrypt('password')
        ]);

        $user6->createToken('auth_token')->plainTextToken;
        
        $user7 = User::create([
            'name' => 'Sasori Gara Arena',
            'email' => 'sga.ficct@uagrm.edu',
            'password' => bcrypt('password')
        ]);

        $user7->createToken('auth_token')->plainTextToken;

        $user8 = User::create([
            'name' => 'Juan Gutierrez Arana',
            'email' => 'jga.ficct@uagrm.edu',
            'password' => bcrypt('password')
        ]);

        $user8->createToken('auth_token')->plainTextToken;

        $user9 = User::create([
            'name' => 'Moises Farias Torrez',
            'email' => 'mft.ficct@uagrm.edu',
            'password' => bcrypt('password')
        ]);

        $user9->createToken('auth_token')->plainTextToken;

        $user10 = User::create([
            'name' => 'Nazareth Ordoñez De Arriaga',
            'email' => 'noa.ficct@uagrm.edu',
            'password' => bcrypt('password')
        ]);

        $user10->createToken('auth_token')->plainTextToken;

        $user11 = User::create([
            'name' => 'Ian Zaid Llanos',
            'email' => 'izl.ficct@uagrm.edu',
            'password' => bcrypt('password')
        ]);

        $user11->createToken('auth_token')->plainTextToken;

        $user12 = User::create([
            'name' => 'Limber Arteaga Burgoa',
            'email' => 'lab.ficct@uagrm.edu',
            'password' => bcrypt('password')
        ]);

        $user12->createToken('auth_token')->plainTextToken;

        $user13 = User::create([
            'name' => 'Teodoro Robles Salvatierra',
            'email' => 'trs.ficct@uagrm.edu',
            'password' => bcrypt('password')
        ]);

        $user13->createToken('auth_token')->plainTextToken;

        $user14 = User::create([
            'name' => 'Richard Moreno Veizaga',
            'email' => 'rmv.ficct@uagrm.edu',
            'password' => bcrypt('password')
        ]);

        $user14->createToken('auth_token')->plainTextToken;

        $user15 = User::create([
            'name' => 'Paulina Socles Valdivia',
            'email' => 'psv.ficct@uagrm.edu',
            'password' => bcrypt('password')
        ]);

        $user15->createToken('auth_token')->plainTextToken;

        $user16 = User::create([
            'name' => 'Ruben Duran Eribaldi',
            'email' => 'rde.ficct@uagrm.edu',
            'password' => bcrypt('password')
        ]);

        $user16->createToken('auth_token')->plainTextToken;

        $user17 = User::create([
            'name' => 'Dario Sorses Murillo',
            'email' => 'dsm.ficct@uagrm.edu',
            'password' => bcrypt('password')
        ]);

        $user17->createToken('auth_token')->plainTextToken;

        $user18 = User::create([
            'name' => 'Eclisiastes Morbon Stark',
            'email' => 'ems.ficct@uagrm.edu',
            'password' => bcrypt('password')
        ]);

        $user18->createToken('auth_token')->plainTextToken;

        $user19 = User::create([
            'name' => 'Dayneris Targerian Snow',
            'email' => 'dts.ficct@uagrm.edu',
            'password' => bcrypt('password')
        ]);

        $user19->createToken('auth_token')->plainTextToken;
    
      //  $other = User::factory(20)->create();

    }
}
