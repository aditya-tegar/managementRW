<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role();
        $role->name = "Admin";
        $role->save();

        $role = new Role();
        $role->name = "RW";
        $role->save();

        $role = new Role();
        $role->name = "RT 01";
        $role->save();

        $role = new Role();
        $role->name = "RT 02";
        $role->save();

        $role = new Role();
        $role->name = "RT 03";
        $role->save();

        $role = new Role();
        $role->name = "Warga 01";
        $role->save();

        $role = new Role();
        $role->name = "Warga 02";
        $role->save();

        $role = new Role();
        $role->name = "Warga 03";
        $role->save();

        $user = new User();
        $user->name = "Admin Laravel";
        $user->email = "admin@gmail.com";
        $user->password = bcrypt("rahasia");
        $user->role_id = 1; 
        $user->save();

        $user = new User();
        $user->name = "Ketua RW";
        $user->email = "rw@gmail.com";
        $user->password = bcrypt("rahasia");
        $user->role_id = 2; 
        $user->save();

        $user = new User();
        $user->name = "Ketua RT 01";
        $user->email = "rt_01@gmail.com";
        $user->password = bcrypt("rahasia");
        $user->role_id = 3; 
        $user->save();

        $user = new User();
        $user->name = "Ketua RT 02";
        $user->email = "rt_02@gmail.com";
        $user->password = bcrypt("rahasia");
        $user->role_id = 4; 
        $user->save();

        $user = new User();
        $user->name = "Ketua RT 03";
        $user->email = "rt_03@gmail.com";
        $user->password = bcrypt("rahasia");
        $user->role_id = 5; 
        $user->save();

        $user = new User();
        $user->name = "Warga 01";
        $user->email = "warga_01@gmail.com";
        $user->password = bcrypt("rahasia");
        $user->role_id = 6; 
        $user->save();

        $user = new User();
        $user->name = "Warga 02";
        $user->email = "warga_02@gmail.com";
        $user->password = bcrypt("rahasia");
        $user->role_id = 7; 
        $user->save();

        $user = new User();
        $user->name = "Warga 03";
        $user->email = "warga_03@gmail.com";
        $user->password = bcrypt("rahasia");
        $user->role_id = 8; 
        $user->save();
    }
}
