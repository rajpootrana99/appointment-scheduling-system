<?php


use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class RoleUserSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();


        // this can be done as separate statements
        $role = Role::create(['name' => 'lawyer']);

        // or may be done by chaining
        $role = Role::create(['name' => 'user']);

        $role = Role::create(['name' => 'admin']);

        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),
        ]);

        $user->assignRole('admin');
    }
}
