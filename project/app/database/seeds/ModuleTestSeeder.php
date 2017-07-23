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
         $ModuleTest->question = "How many people suffer from SCI each year globally?";
         $ModuleTest->correctAnswer = "Hundreds of thousands";
         $ModuleTest->save();
         
         $ModuleTest = new ModuleTest;
         $ModuleTest->id = 2;
         //foreign key denoting where theresults for module 1 will be sent
         $ModuleTest->moduleName = "Module 1";
         $ModuleTest->question = "Which of the following statements is correct?";
         $ModuleTest->correctAnswer = "Men are more likely than women to suffer from SCI";
         $ModuleTest->save();
         
         $ModuleTest = new ModuleTest;
         $ModuleTest->id = 3;
         //foreign key denoting where theresults for module 1 will be sent
         $ModuleTest->moduleName = "Module 1";
         $ModuleTest->question = "Who is at a higher risk of getting a SCI";
         $ModuleTest->correctAnswer = "Young adults and elderly";
         $ModuleTest->save();
         
         $ModuleTest = new ModuleTest;
         $ModuleTest->id = 4;
         //foreign key denoting where theresults for module 1 will be sent
         $ModuleTest->moduleName = "Module 1";
         $ModuleTest->question = "What is the most vulnerable time period following a SCI";
         $ModuleTest->correctAnswer = "First year following the injury";
         $ModuleTest->save();
    }   
}