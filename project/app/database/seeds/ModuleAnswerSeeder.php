<?php

class ModuleAnswerSeeder extends Seeder {
    public function run()
    {
        //Testing seeding module 1
         $ModuleAnswer = new ModuleAnswer;
         $ModuleAnswer->id = 1;
         $ModuleAnswer->moduleTest_id = "1";
         $ModuleAnswer->set = "q1";
         $ModuleAnswer->answer = "A few hundred";
         $ModuleAnswer->save();
         
         $ModuleAnswer = new ModuleAnswer;
         $ModuleAnswer->id = 2;
         $ModuleAnswer->moduleTest_id = "1";
         $ModuleAnswer->set = "q1";
         $ModuleAnswer->answer = "A few thousand";
         $ModuleAnswer->save();
         
         $ModuleAnswer = new ModuleAnswer;
         $ModuleAnswer->id = 3;
         $ModuleAnswer->moduleTest_id = "1";
         $ModuleAnswer->set = "q1";
         $ModuleAnswer->answer = "Hundreds of thousands";
         $ModuleAnswer->save();
         
         $ModuleAnswer = new ModuleAnswer;
         $ModuleAnswer->id = 4;
         $ModuleAnswer->moduleTest_id = "1";
         $ModuleAnswer->set = "q1";
         $ModuleAnswer->answer = "Billions of people";
         $ModuleAnswer->save();
         
         
         
         $ModuleAnswer = new ModuleAnswer;
         $ModuleAnswer->id = 5;
         $ModuleAnswer->moduleTest_id = "2";
         $ModuleAnswer->set = "q2";
         $ModuleAnswer->answer = "Men are more likely than women to suffer from SCI";
         $ModuleAnswer->save();
         
         $ModuleAnswer = new ModuleAnswer;
         $ModuleAnswer->id = 6;
         $ModuleAnswer->moduleTest_id = "2";
         $ModuleAnswer->set = "q2";
         $ModuleAnswer->answer = "Women are more likely than men to suffer from SCI";
         $ModuleAnswer->save();
         
         $ModuleAnswer = new ModuleAnswer;
         $ModuleAnswer->id = 7;
         $ModuleAnswer->moduleTest_id = "2";
         $ModuleAnswer->set = "q2";
         $ModuleAnswer->answer = "Men and women are equally likely";
         $ModuleAnswer->save();
         
         $ModuleAnswer = new ModuleAnswer;
         $ModuleAnswer->id = 8;
         $ModuleAnswer->moduleTest_id = "2";
         $ModuleAnswer->set = "q2";
         $ModuleAnswer->answer = "None of the above";
         $ModuleAnswer->save();
         
         $ModuleAnswer = new ModuleAnswer;
         $ModuleAnswer->id = 9;
         $ModuleAnswer->moduleTest_id = "3";
         $ModuleAnswer->set = "q3";
         $ModuleAnswer->answer = "Newborns";
         $ModuleAnswer->save();
         
         $ModuleAnswer = new ModuleAnswer;
         $ModuleAnswer->id = 10;
         $ModuleAnswer->moduleTest_id = "3";
         $ModuleAnswer->set = "q3";
         $ModuleAnswer->answer = "Children";
         $ModuleAnswer->save();
         
         $ModuleAnswer = new ModuleAnswer;
         $ModuleAnswer->id = 11;
         $ModuleAnswer->moduleTest_id = "3";
         $ModuleAnswer->set = "q3";
         $ModuleAnswer->answer = "Young adults and elderly";
         $ModuleAnswer->save();
         
         $ModuleAnswer = new ModuleAnswer;
         $ModuleAnswer->id = 12;
         $ModuleAnswer->moduleTest_id = "3";
         $ModuleAnswer->set = "q3";
         $ModuleAnswer->answer = "Middle aged people";
         $ModuleAnswer->save();
         
         
         
         $ModuleAnswer = new ModuleAnswer;
         $ModuleAnswer->id = 13;
         $ModuleAnswer->moduleTest_id = "4";
         $ModuleAnswer->set = "q4";
         $ModuleAnswer->answer = "First year following the injury";
         $ModuleAnswer->save();
         
         $ModuleAnswer = new ModuleAnswer;
         $ModuleAnswer->id = 14;
         $ModuleAnswer->moduleTest_id = "4";
         $ModuleAnswer->set = "q4";
         $ModuleAnswer->answer = "First 2 years following the injury";
         $ModuleAnswer->save();
         
         $ModuleAnswer = new ModuleAnswer;
         $ModuleAnswer->id = 15;
         $ModuleAnswer->moduleTest_id = "4";
         $ModuleAnswer->set = "q4";
         $ModuleAnswer->answer = "Five years following the injury";
         $ModuleAnswer->save();
         
         $ModuleAnswer = new ModuleAnswer;
         $ModuleAnswer->id = 16;
         $ModuleAnswer->moduleTest_id = "4";
         $ModuleAnswer->set = "q4";
         $ModuleAnswer->answer = "Second year till the fifth year following the injury";
         $ModuleAnswer->save();
         
         //up to question 4
    }   
}