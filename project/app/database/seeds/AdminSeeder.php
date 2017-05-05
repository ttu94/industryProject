<?php

class AdminSeeder extends Seeder {
    public function run()
    {
         $admin = new Admin;
         $admin->firstName = "Thuan";
         $admin->lastName = "Tu";
         $admin->email = "thuan.tu@griffithuni.edu.au";
         $admin->password = "Pokemon1";
         $admin->save();
         
         $admin = new Admin;
         $admin->firstName = "Caila";
         $admin->lastName = "Ancheta";
         $admin->email = "caila@griffithuni.edu.au";
         $admin->password = "Pokemon1";
         $admin->save();
         
         $admin = new Admin;
         $admin->firstName = "Courtney";
         $admin->lastName = "Hall";
         $admin->email = "courntney@griffithuni.edu.au";
         $admin->password = "Pokemon1";
         $admin->save();
        
    }   
}