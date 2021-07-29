<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'define:permission';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Add Permissions';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $permissions = [
            ['name' => 'book lawyer'],
        ];
        foreach ($permissions as $permission){
            Permission::updateOrCreate(['name' => $permission['name']], $permission);
        }
        $role = Role::where('name', 'user')->first();
        $role->givePermissionTo(Permission::all());
        $this->info('Permissions successfully created!');
    }
}
