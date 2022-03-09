<?php

use App\User;
use App\Role;
use App\Permissions;
use Illuminate\Database\Seeder;

class AclSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()['cache']->forget('spatie.permissions.cache');

        $permissions = Permissions::defaultPermissions();
        foreach ($permissions as $perms) {
            Permissions::firstOrCreate(['name' => $perms]);
        }
        $this->command->info('Default Permissions added.');

        $roles = Role::defaultRoles();
        foreach ($roles as $role) {
            $role = Role::firstOrCreate(['name' => $role]);

            if ($role->name == 'admin') {
                $role->givePermissionTo(Permissions::all());
            }
        }

        $this->command->info('Default Roles added.');
    }
}
