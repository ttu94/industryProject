<?php

class ModuleTestSeeder extends Seeder {
    public function run()
    {
        //Testing seeding module 1
         $ModuleTest = new ModuleTest;
        //primary key denoting module 1
         $ModuleTest->id = 1;
         //foreign key denoting where theresults for module 1 will be sents
         $ModuleTest->moduleName = "Module 1";
         $ModuleTest->question = "Will this work?";
         $ModuleTest->correctAnswer = "YES!";
         $ModuleTest->save();
         
         $ModuleTest = new ModuleTest;
         $ModuleTest->id = 2;
         //foreign key denoting where theresults for module 1 will be sent
         $ModuleTest->moduleName = "Module 1";
         $ModuleTest->question = "Does it?";
         $ModuleTest->correctAnswer = "Sure, why not.";
         $ModuleTest->save();
    }   
}