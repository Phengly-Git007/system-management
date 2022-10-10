<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $admin = User::create([
        'name' => 'Admin Kok',
        'email' => 'admin@kok.com',
        'email_verified_at' => now(),
        'password' =>bcrypt('password'), // password
        'remember_token' => Str::random(10),
       ]);

    $permissions = [
        $this->permission('credit-officer'),
        $this->permission('home'),
        $this->permission('manage-zone')
        ];
        foreach ($permissions as $permission){
        Permission::create($permission);
        }

       $role = Role::create([
        'name'  => 'Administrator',
       ]);

       $pers = Permission::pluck('id','id')->all();
       $role->syncPermissions($pers);
       $admin->assignRole([$role->id]);
    //    $role->permissions->sync($permissions);
    }

    private function permission($val){
        return [
            'name' => $val
        ];
    }
}
