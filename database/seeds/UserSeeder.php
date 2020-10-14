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
        $role->name = "Ketua RW";
        $role->save();

        $role = new Role();
        $role->name = "Ketua RT";
        $role->save();

        $role = new Role();
        $role->name = "Sekertaris RW";
        $role->save();

        $role = new Role();
        $role->name = "Sekertaris RT";
        $role->save();

        $role = new Role();
        $role->name = "Bendahara RW";
        $role->save();

        $role = new Role();
        $role->name = "Bendahara RT";
        $role->save();

        $user = new User();
        $user->name = "Admin Laravel";
        $user->email = "admin@gmail.com";
        $user->password = bcrypt("rahasia");
        $user->role_id = 1; 
        $user->save();
    }
}
