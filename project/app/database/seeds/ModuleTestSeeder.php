<?php

class ModuleTestSeeder extends Seeder {
    public function run()
    {
        //Testing seeding module 1
        //id = question number
        
         $ModuleTest = new ModuleTest;
         $ModuleTest->moduleName = "Module 1";
         $ModuleTest->question = "How many people suffer from SCI each year globally?";
         $ModuleTest->correctAnswer = "Hundreds of thousands";
         $ModuleTest->save();
         
         $ModuleTest = new ModuleTest;
         $ModuleTest->moduleName = "Module 1";
         $ModuleTest->question = "Which of the following statements is correct?";
         $ModuleTest->correctAnswer = "Men are more likely than women to suffer from SCI";
         $ModuleTest->save();
         
         $ModuleTest = new ModuleTest;
         // $modUletest->id = 3;
         //foreign key denoting where theresults for module 1 will be sent
         $ModuleTest->moduleName = "Module 1";
         $ModuleTest->question = "Who is at a higher risk of getting a SCI";
         $ModuleTest->correctAnswer = "Young adults and elderly";
         $ModuleTest->save();
         
         $ModuleTest = new ModuleTest;
         // $modUletest->id = 4;
         //foreign key denoting where theresults for module 1 will be sent
         $ModuleTest->moduleName = "Module 1";
         $ModuleTest->question = "What is the most vulnerable time period following a SCI";
         $ModuleTest->correctAnswer = "First year following the injury";
         $ModuleTest->save();
    }   
}