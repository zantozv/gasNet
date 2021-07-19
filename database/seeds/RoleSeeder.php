<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roleA =Role::create(['name' =>'Admin']);
        $roleT =Role::create(['name' =>'Tecnico']);
        $roleC =Role::create(['name' =>'Cliente']);

        Permission::create(['name' => 'admin.home'])->syncRoles([$roleA,$roleT,$roleC]);

        Permission::create(['name' => 'admin.user'])->assignRole($roleA);

        Permission::create(['name' => 'admin.ciudades.index'])->syncRoles([$roleA,$roleT]);
        Permission::create(['name' => 'admin.ciudades.create'])->syncRoles([$roleA,$roleT]);
        Permission::create(['name' => 'admin.ciudades.edit'])->syncRoles([$roleA,$roleT]);
        Permission::create(['name' => 'admin.ciudades.destroy'])->assignRole($roleA);

        Permission::create(['name' => 'admin.tiposervicios.index'])->syncRoles([$roleA,$roleT]);
        Permission::create(['name' => 'admin.tiposervicios.create'])->syncRoles([$roleA,$roleT]);
        Permission::create(['name' => 'admin.tiposervicios.edit'])->syncRoles([$roleA,$roleT]);
        Permission::create(['name' => 'admin.tiposervicios.destroy'])->assignRole($roleA);

        Permission::create(['name' => 'admin.requisitos.index'])->syncRoles([$roleA,$roleT]);
        Permission::create(['name' => 'admin.requisitos.create'])->syncRoles([$roleA,$roleT]);
        Permission::create(['name' => 'admin.requisitos.edit'])->syncRoles([$roleA,$roleT]);
        Permission::create(['name' => 'admin.requisitos.destroy'])->assignRole($roleA);

        Permission::create(['name' => 'admin.servicios.index'])->syncRoles([$roleA,$roleT,$roleC]);
        Permission::create(['name' => 'admin.servicios.create'])->syncRoles([$roleA,$roleT]);
        Permission::create(['name' => 'admin.servicios.edit'])->syncRoles([$roleA,$roleT]);
        Permission::create(['name' => 'admin.servicios.destroy'])->assignRole($roleA);

        Permission::create(['name' => 'admin.documentos.index'])->syncRoles([$roleA,$roleT,$roleC]);
        Permission::create(['name' => 'admin.documentos.create'])->syncRoles([$roleA,$roleC]);
        Permission::create(['name' => 'admin.documentos.edit'])->syncRoles([$roleA,$roleT,$roleC]);
        Permission::create(['name' => 'admin.documentos.destroy'])->assignRole($roleA);
    }
}
