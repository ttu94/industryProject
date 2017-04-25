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
    }   
}