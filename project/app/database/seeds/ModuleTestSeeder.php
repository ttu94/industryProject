<?php

class ModuleTestSeeder extends Seeder {
    public function run()
    {
        //Testing seeding module 1
        //id = question number
        // Module 1 Begining----------------------------------------------------------------
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
         $ModuleTest->moduleName = "Module 1";
         $ModuleTest->question = "Who is at a higher risk of getting a SCI";
         $ModuleTest->correctAnswer = "Young adults and elderly";
         $ModuleTest->save();
         
         $ModuleTest = new ModuleTest;
         $ModuleTest->moduleName = "Module 1";
         $ModuleTest->question = "What is the most vulnerable time period following a SCI";
         $ModuleTest->correctAnswer = "First year following the injury";
         $ModuleTest->save();
         
         $ModuleTest = new ModuleTest;
         $ModuleTest->moduleName = "Module 1";
         $ModuleTest->question = "Which of the following has the highest cost for treatment?";
         $ModuleTest->correctAnswer = "Quadriplegia at level C1-C4";
         $ModuleTest->save();
         
         $ModuleTest = new ModuleTest;
         $ModuleTest->moduleName = "Module 1";
         $ModuleTest->question = "Which of the following has the least cost for treatment?";
         $ModuleTest->correctAnswer = "Any ASIA-grade D injury";
         $ModuleTest->save();
         
         $ModuleTest = new ModuleTest;
         $ModuleTest->moduleName = "Module 1";
         $ModuleTest->question = "Which of the following is a common cause for SCI?";
         $ModuleTest->correctAnswer = "Accidents";
         $ModuleTest->save();
         
         $ModuleTest = new ModuleTest;
         $ModuleTest->moduleName = "Module 1";
         $ModuleTest->question = "Which of the following rarely causes a SCI?";
         $ModuleTest->correctAnswer = "Medical procedures";
         $ModuleTest->save();
         
         $ModuleTest = new ModuleTest;
         $ModuleTest->moduleName = "Module 1";
         $ModuleTest->question = "How many patients suffer from quadriplegia following a SCI?";
         $ModuleTest->correctAnswer = "More than half";
         $ModuleTest->save();
         
         $ModuleTest = new ModuleTest;
         $ModuleTest->moduleName = "Module 1";
         $ModuleTest->question = "How many patients recover fully from a SCI without any paralysis?";
         $ModuleTest->correctAnswer = "1 in every 250 patients";
         $ModuleTest->save();
         
         $ModuleTest = new ModuleTest;
         $ModuleTest->moduleName = "Module 1";
         $ModuleTest->question = "Choose the correct statement from below:";
         $ModuleTest->correctAnswer = "Functional recovery depends upon the extent of injury";
         $ModuleTest->save();
         
         $ModuleTest = new ModuleTest;
         $ModuleTest->moduleName = "Module 1";
         $ModuleTest->question = "The best possible outcomes are seen when the patients receive immediate medical treatment";
         $ModuleTest->correctAnswer = "True";
         $ModuleTest->save();
         
         $ModuleTest = new ModuleTest;
         $ModuleTest->moduleName = "Module 1";
         $ModuleTest->question = "Which statement is incorrect?";
         $ModuleTest->correctAnswer = "Surgery is the only cure available for SCI as of now";
         $ModuleTest->save();
         
         $ModuleTest = new ModuleTest;
         $ModuleTest->moduleName = "Module 1";
         $ModuleTest->question = "What is the role of physical therapy following a SCI?";
         $ModuleTest->correctAnswer = "After the initial surgical treatment intensive physical therapy over an extended period tends to yield maximum functional recovery";
         $ModuleTest->save();
         
         $ModuleTest = new ModuleTest;
         $ModuleTest->moduleName = "Module 1";
         $ModuleTest->question = "What would lead to a poorer outcome?";
         $ModuleTest->correctAnswer = "Both a. &amp; b";
         $ModuleTest->save();
         
         $ModuleTest = new ModuleTest;
         $ModuleTest->moduleName = "Module 1";
         $ModuleTest->question = "Which of the following is not a promising future therapy for SCI?";
         $ModuleTest->correctAnswer = "Laser therapy";
         $ModuleTest->save();
         
         $ModuleTest = new ModuleTest;
         $ModuleTest->moduleName = "Module 1";
         $ModuleTest->question = "Recovering from a SCI is very long and slow process";
         $ModuleTest->correctAnswer = "True";
         $ModuleTest->save();
         
         $ModuleTest = new ModuleTest;
         $ModuleTest->moduleName = "Module 1";
         $ModuleTest->question = "Commitment of the patient is one of the most important factors affecting recovery";
         $ModuleTest->correctAnswer = "True";
         $ModuleTest->save();
         
         $ModuleTest = new ModuleTest;
         $ModuleTest->moduleName = "Module 1";
         $ModuleTest->question = "Which of the following affects time and degree of recovery following SCI?";
         $ModuleTest->correctAnswer = "All of the above";
         $ModuleTest->save();
         
         $ModuleTest = new ModuleTest;
         $ModuleTest->moduleName = "Module 1";
         $ModuleTest->question = "When does the quickest recovery occur following a SCI?";
         $ModuleTest->correctAnswer = "Within the first six months";
         $ModuleTest->save();
         
         $ModuleTest = new ModuleTest;
         $ModuleTest->moduleName = "Module 1";
         $ModuleTest->question = "Any remaining loss of function after 1-2 years will likely become permanent";
         $ModuleTest->correctAnswer = "True";
         $ModuleTest->save();
         
         $ModuleTest = new ModuleTest;
         $ModuleTest->moduleName = "Module 1";
         $ModuleTest->question = "Is it possible to gain functional recovery even after 2 years?";
         $ModuleTest->correctAnswer = "Yes, with a positive outlook and hard work it may be achieved";
         $ModuleTest->save();
         
         // Module 1 End----------------------------------------------------------------------
    }   
}
