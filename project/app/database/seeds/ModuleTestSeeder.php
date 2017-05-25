<?php

class ModuleTestSeeder extends Seeder {
    public function run()
    {
        //Testing seeding module 1
         $ModuleTest = new ModuleTest;
        
        //primary key denoting module 1
         $ModuleTest->id = 1;
         
         //foreign key denoting where theresults for module 1 will be sent
         $ModuleTest->moduleResult_id = 1;
         $ModuleTest->moduleName = "Demographics and Economics of Spinal Cord Injury (SCI)";
         
         $ModuleTest->question = "Will this work?";
         $ModuleTest->correctAnswer = "YES!";
         
         $ModuleTest->save();
    }   
}