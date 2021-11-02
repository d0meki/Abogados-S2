<?php

namespace Database\Seeders;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name'=>'admin']);
        $role2 = Role::create(['name'=>'abogado']);
        $role3 = Role::create(['name'=>'procurador']);

        Permission::create(['name'=>'users.index'])->assignRole($role1);
        Permission::create(['name'=>'users.edit'])->assignRole($role1);
        Permission::create(['name'=>'users.update'])->assignRole($role1);

        Permission::create(['name'=>'personas.index'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name'=>'personas.create'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name'=>'personas.edit'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name'=>'personas.destroy'])->syncRoles([$role1,$role2,$role3]);

        Permission::create(['name'=>'demandantes.index'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name'=>'demandantes.create'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name'=>'demandantes.edit'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name'=>'demandantes.destroy'])->syncRoles([$role1,$role2,$role3]);

        Permission::create(['name'=>'demandados.index'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name'=>'demandados.create'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name'=>'demandados.edit'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name'=>'demandados.destroy'])->syncRoles([$role1,$role2,$role3]);

        Permission::create(['name'=>'juezs.index'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name'=>'juezs.create'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name'=>'juezs.edit'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name'=>'juezs.destroy'])->syncRoles([$role1,$role2,$role3]);

        Permission::create(['name'=>'abogados.index'])->syncRoles([$role1]);
        Permission::create(['name'=>'abogados.create'])->syncRoles([$role1]);
        Permission::create(['name'=>'abogados.edit'])->syncRoles([$role1]);
        Permission::create(['name'=>'abogados.destroy'])->syncRoles([$role1]);

        Permission::create(['name'=>'procuradors.index'])->syncRoles([$role1]);
        Permission::create(['name'=>'procuradors.create'])->syncRoles([$role1]);
        Permission::create(['name'=>'procuradors.edit'])->syncRoles([$role1]);
        Permission::create(['name'=>'procuradors.destroy'])->syncRoles([$role1]);

        Permission::create(['name'=>'expedientes.index'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name'=>'expedientes.create'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name'=>'expedientes.edit'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name'=>'expedientes.destroy'])->syncRoles([$role1,$role2,$role3]);

        Permission::create(['name'=>'archivos.index'])->syncRoles([$role1]);
        Permission::create(['name'=>'archivos.create'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name'=>'archivos.edit'])->syncRoles([$role1]);
        Permission::create(['name'=>'archivos.destroy'])->syncRoles([$role1,$role2,$role3]);

    }
}
