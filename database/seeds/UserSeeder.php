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
        $role->name = "Bendahara RW";
        $role->save();

        $role = new Role();
        $role->name = "Sekertaris RW";
        $role->save();

        $role = new Role();
        $role->name = "Ketua RT 01";
        $role->save();

        $role = new Role();
        $role->name = "Bendahara RT 01";
        $role->save();

        $role = new Role();
        $role->name = "Sekertaris RT 01";
        $role->save();
        
        $role = new Role();
        $role->name = "Ketua RT 02";
        $role->save();

        $role = new Role();
        $role->name = "Bendahara RT 02";
        $role->save();

        $role = new Role();
        $role->name = "Sekertaris RT 02";
        $role->save();
        
        $role = new Role();
        $role->name = "Ketua RT 03";
        $role->save();

        $role = new Role();
        $role->name = "Bendahara RT 03";
        $role->save();

        $role = new Role();
        $role->name = "Sekertaris RT 03";
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
        $user->name = "Bendahara RW";
        $user->email = "bendahara_rw@gmail.com";
        $user->password = bcrypt("rahasia");
        $user->role_id = 3; 
        $user->save();

        $user = new User();
        $user->name = "Sekertaris RW";
        $user->email = "sekertaris_rw@gmail.com";
        $user->password = bcrypt("rahasia");
        $user->role_id = 4; 
        $user->save();

        $user = new User();
        $user->name = "Ketua RT 01";
        $user->email = "rt_01@gmail.com";
        $user->password = bcrypt("rahasia");
        $user->role_id = 5; 
        $user->save();

        $user = new User();
        $user->name = "Bendahara RT 01";
        $user->email = "bendahara_rt_01@gmail.com";
        $user->password = bcrypt("rahasia");
        $user->role_id = 6; 
        $user->save();

        $user = new User();
        $user->name = "Sekertaris RT 01";
        $user->email = "sekertaris_rt_01@gmail.com";
        $user->password = bcrypt("rahasia");
        $user->role_id = 7; 
        $user->save();

        $user = new User();
        $user->name = "Ketua RT 02";
        $user->email = "rt_02@gmail.com";
        $user->password = bcrypt("rahasia");
        $user->role_id = 8; 
        $user->save();

        $user = new User();
        $user->name = "Bendahara RT 02";
        $user->email = "bendahara_rt_02@gmail.com";
        $user->password = bcrypt("rahasia");
        $user->role_id = 9; 
        $user->save();

        $user = new User();
        $user->name = "Sekertaris RT 02";
        $user->email = "sekertaris_rt_02@gmail.com";
        $user->password = bcrypt("rahasia");
        $user->role_id = 10; 
        $user->save();

        $user = new User();
        $user->name = "Ketua RT 03";
        $user->email = "rt_03@gmail.com";
        $user->password = bcrypt("rahasia");
        $user->role_id = 11; 
        $user->save();

        $user = new User();
        $user->name = "Bendahara RT 03";
        $user->email = "bendahara_rt_03@gmail.com";
        $user->password = bcrypt("rahasia");
        $user->role_id = 12; 
        $user->save();

        $user = new User();
        $user->name = "Sekertaris RT 03";
        $user->email = "sekertaris_rt_03@gmail.com";
        $user->password = bcrypt("rahasia");
        $user->role_id = 13; 
        $user->save();
    }
}
