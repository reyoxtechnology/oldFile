<?php

namespace Database\Seeders;
use App\Models\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $developer = new Role();
        $developer->name ='developer';
        $developer->display_name= 'developwer'; //optional
        $developer-> description = 'developer for the project'; //optional
        $developer->save();

       $admin = new Role();
       $admin->name ='admin';
       $admin->display_name= 'admin'; //optional
       $admin-> description = 'project admin'; //optional
       $admin->save();

       $developer = new Role();
       $developer->name ='agent';
       $developer->display_name= 'agent'; //optional
       $developer-> description = 'agent'; //optional
       $developer->save();

       $developer = new Role();
       $developer->name ='user';
       $developer->display_name= 'user'; //optional
       $developer-> description = 'user'; //optional
       $developer->save();
    }
}
