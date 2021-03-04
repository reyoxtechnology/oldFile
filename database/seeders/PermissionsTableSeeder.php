<?php

namespace Database\Seeders;
use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // this are all admin duty
        
       $createAgent = new Permission();
       $createAgent->name ='Accept-agent';
       $createAgent->display_name = 'Accept agent'; //optional
       $createAgent->description= 'give access to agent to sell higher'; //optional
       $createAgent->save();

       $createAgent = new Permission();
       $createAgent->name ='suspend-agent';
       $createAgent->display_name = 'suspend agent'; //optional
       $createAgent->description= 'suspend agent for bad attitude'; //optional
       $createAgent->save();

       $createAgent = new Permission();
       $createAgent->name ='view-agent';
       $createAgent->display_name = 'view agent'; //optional
       $createAgent->description= 'view agent'; //optional
       $createAgent->save();

       $createAgent = new Permission();
       $createAgent->name ='delete-agent';
       $createAgent->display_name = 'delete agent'; //optional
       $createAgent->description= 'delete agent'; //optional
       $createAgent->save();


       $createAgent = new Permission();
       $createAgent->name ='view-users';
       $createAgent->display_name = 'view users'; //optional
       $createAgent->description= 'view users'; //optional
       $createAgent->save();

       $createAgent = new Permission();
       $createAgent->name ='delete-users';
       $createAgent->display_name = 'delete users'; //optional
       $createAgent->description= 'delete users'; //optional
       $createAgent->save();
       
    }
}
