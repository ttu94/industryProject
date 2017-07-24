<?php

class ModuleAnswerSeeder extends Seeder {
    public function run()
    {
        //Testing seeding module 1
        //moduleTest_id = question number from moduleTest
        //set = randomise 1 question per set
        
        // ----------------------------
        //       Table of Content
        // ----------------------------
        
        // Module 1 - line 18
        // Module 2 - line 546
        
        
        // ----------------------------
        //         Module 1. 6 sets
        // ----------------------------
         $ModuleAnswer = new ModuleAnswer;
         $ModuleAnswer->moduleTest_id = "1";
         $ModuleAnswer->set = "q1";
         $ModuleAnswer->answer = "A few hundred";
         $ModuleAnswer->save();
         
         $ModuleAnswer = new ModuleAnswer;
         $ModuleAnswer->moduleTest_id = "1";
         $ModuleAnswer->set = "q1";
         $ModuleAnswer->answer = "A few thousand";
         $ModuleAnswer->save();
         
         $ModuleAnswer = new ModuleAnswer;
         $ModuleAnswer->moduleTest_id = "1";
         $ModuleAnswer->set = "q1";
         $ModuleAnswer->answer = "Hundreds of thousands";
         $ModuleAnswer->save();
         
         $ModuleAnswer = new ModuleAnswer;
         $ModuleAnswer->moduleTest_id = "1";
         $ModuleAnswer->set = "q1";
         $ModuleAnswer->answer = "Billions of people";
         $ModuleAnswer->save();
         
         
         
         $ModuleAnswer = new ModuleAnswer;
         $ModuleAnswer->moduleTest_id = "2";
         $ModuleAnswer->set = "q1";
         $ModuleAnswer->answer = "Men are more likely than women to suffer from SCI";
         $ModuleAnswer->save();
         
         $ModuleAnswer = new ModuleAnswer;
         $ModuleAnswer->moduleTest_id = "2";
         $ModuleAnswer->set = "q1";
         $ModuleAnswer->answer = "Women are more likely than men to suffer from SCI";
         $ModuleAnswer->save();
         
         $ModuleAnswer = new ModuleAnswer;
         $ModuleAnswer->moduleTest_id = "2";
         $ModuleAnswer->set = "q1";
         $ModuleAnswer->answer = "Men and women are equally likely";
         $ModuleAnswer->save();
         
         $ModuleAnswer = new ModuleAnswer;
         $ModuleAnswer->moduleTest_id = "2";
         $ModuleAnswer->set = "q1";
         $ModuleAnswer->answer = "None of the above";
         $ModuleAnswer->save();
         
         
         
         $ModuleAnswer = new ModuleAnswer;
         $ModuleAnswer->moduleTest_id = "3";
         $ModuleAnswer->set = "q1";
         $ModuleAnswer->answer = "Newborns";
         $ModuleAnswer->save();
         
         $ModuleAnswer = new ModuleAnswer;
         $ModuleAnswer->moduleTest_id = "3";
         $ModuleAnswer->set = "q1";
         $ModuleAnswer->answer = "Children";
         $ModuleAnswer->save();
         
         $ModuleAnswer = new ModuleAnswer;
         $ModuleAnswer->moduleTest_id = "3";
         $ModuleAnswer->set = "q1";
         $ModuleAnswer->answer = "Young adults and elderly";
         $ModuleAnswer->save();
         
         $ModuleAnswer = new ModuleAnswer;
         $ModuleAnswer->moduleTest_id = "3";
         $ModuleAnswer->set = "q1";
         $ModuleAnswer->answer = "Middle aged people";
         $ModuleAnswer->save();
         
         
         
         $ModuleAnswer = new ModuleAnswer;
         $ModuleAnswer->moduleTest_id = "4";
         $ModuleAnswer->set = "q2";
         $ModuleAnswer->answer = "First year following the injury";
         $ModuleAnswer->save();
         
         $ModuleAnswer = new ModuleAnswer;
         $ModuleAnswer->moduleTest_id = "4";
         $ModuleAnswer->set = "q2";
         $ModuleAnswer->answer = "First 2 years following the injury";
         $ModuleAnswer->save();
         
         $ModuleAnswer = new ModuleAnswer;
         $ModuleAnswer->moduleTest_id = "4";
         $ModuleAnswer->set = "q2";
         $ModuleAnswer->answer = "Five years following the injury";
         $ModuleAnswer->save();
         
         $ModuleAnswer = new ModuleAnswer;
         $ModuleAnswer->moduleTest_id = "4";
         $ModuleAnswer->set = "q2";
         $ModuleAnswer->answer = "Second year till the fifth year following the injury";
         $ModuleAnswer->save();
         
         
         
         $ModuleAnswer = new ModuleAnswer;
         $ModuleAnswer->moduleTest_id = "5";
         $ModuleAnswer->set = "q2";
         $ModuleAnswer->answer = "Quadriplegia at level C1-C4";
         $ModuleAnswer->save();
         
         $ModuleAnswer = new ModuleAnswer;
         $ModuleAnswer->moduleTest_id = "5";
         $ModuleAnswer->set = "q2";
         $ModuleAnswer->answer = "Quadriplegia at level C5-C8";
         $ModuleAnswer->save();
         
         $ModuleAnswer = new ModuleAnswer;
         $ModuleAnswer->moduleTest_id = "5";
         $ModuleAnswer->set = "q2";
         $ModuleAnswer->answer = "Paraplegia";
         $ModuleAnswer->save();
         
         $ModuleAnswer = new ModuleAnswer;
         $ModuleAnswer->moduleTest_id = "5";
         $ModuleAnswer->set = "q2";
         $ModuleAnswer->answer = "Any ASIA-grade D injury";
         $ModuleAnswer->save();
         
         
         
         $ModuleAnswer = new ModuleAnswer;
         $ModuleAnswer->moduleTest_id = "6";
         $ModuleAnswer->set = "q2";
         $ModuleAnswer->answer = "Quadriplegia at level C1-C4";
         $ModuleAnswer->save();
         
         $ModuleAnswer = new ModuleAnswer;
         $ModuleAnswer->moduleTest_id = "6";
         $ModuleAnswer->set = "q2";
         $ModuleAnswer->answer = "Quadriplegia at level C5-C8";
         $ModuleAnswer->save();
         
         $ModuleAnswer = new ModuleAnswer;
         $ModuleAnswer->moduleTest_id = "6";
         $ModuleAnswer->set = "q2";
         $ModuleAnswer->answer = "Paraplegia";
         $ModuleAnswer->save();
         
         $ModuleAnswer = new ModuleAnswer;
         $ModuleAnswer->moduleTest_id = "6";
         $ModuleAnswer->set = "q2";
         $ModuleAnswer->answer = "Any ASIA-grade D injury";
         $ModuleAnswer->save();
         
         
         
         $ModuleAnswer = new ModuleAnswer;
         $ModuleAnswer->moduleTest_id = "7";
         $ModuleAnswer->set = "q3";
         $ModuleAnswer->answer = "Accidents";
         $ModuleAnswer->save();
         
         $ModuleAnswer = new ModuleAnswer;
         $ModuleAnswer->moduleTest_id = "7";
         $ModuleAnswer->set = "q3";
         $ModuleAnswer->answer = "Gunshot injury";
         $ModuleAnswer->save();
         
         $ModuleAnswer = new ModuleAnswer;
         $ModuleAnswer->moduleTest_id = "7";
         $ModuleAnswer->set = "q3";
         $ModuleAnswer->answer = "Medical procedures";
         $ModuleAnswer->save();
         
         $ModuleAnswer = new ModuleAnswer;
         $ModuleAnswer->moduleTest_id = "7";
         $ModuleAnswer->set = "q3";
         $ModuleAnswer->answer = "Cancer";
         $ModuleAnswer->save();
         
         
         
         $ModuleAnswer = new ModuleAnswer;
         $ModuleAnswer->moduleTest_id = "8";
         $ModuleAnswer->set = "q3";
         $ModuleAnswer->answer = "Vehicular accidents";
         $ModuleAnswer->save();
         
         $ModuleAnswer = new ModuleAnswer;
         $ModuleAnswer->moduleTest_id = "8";
         $ModuleAnswer->set = "q3";
         $ModuleAnswer->answer = "Fall from heights";
         $ModuleAnswer->save();
         
         $ModuleAnswer = new ModuleAnswer;
         $ModuleAnswer->moduleTest_id = "8";
         $ModuleAnswer->set = "q3";
         $ModuleAnswer->answer = "Sporting accidents";
         $ModuleAnswer->save();
         
         $ModuleAnswer = new ModuleAnswer;
         $ModuleAnswer->moduleTest_id = "8";
         $ModuleAnswer->set = "q3";
         $ModuleAnswer->answer = "Medical procedures";
         $ModuleAnswer->save();
         
         
         
         $ModuleAnswer = new ModuleAnswer;
         $ModuleAnswer->moduleTest_id = "9";
         $ModuleAnswer->set = "q4";
         $ModuleAnswer->answer = "All of the patients";
         $ModuleAnswer->save();
         
         $ModuleAnswer = new ModuleAnswer;
         $ModuleAnswer->moduleTest_id = "9";
         $ModuleAnswer->set = "q4";
         $ModuleAnswer->answer = "More than half";
         $ModuleAnswer->save();
         
         $ModuleAnswer = new ModuleAnswer;
         $ModuleAnswer->moduleTest_id = "9";
         $ModuleAnswer->set = "q4";
         $ModuleAnswer->answer = "Very few";
         $ModuleAnswer->save();
         
         $ModuleAnswer = new ModuleAnswer;
         $ModuleAnswer->moduleTest_id = "9";
         $ModuleAnswer->set = "q4";
         $ModuleAnswer->answer = "None";
         $ModuleAnswer->save();
         
         
         
         $ModuleAnswer = new ModuleAnswer;
         $ModuleAnswer->moduleTest_id = "10";
         $ModuleAnswer->set = "q4";
         $ModuleAnswer->answer = "All of them";
         $ModuleAnswer->save();
         
         $ModuleAnswer = new ModuleAnswer;
         $ModuleAnswer->moduleTest_id = "10";
         $ModuleAnswer->set = "q4";
         $ModuleAnswer->answer = "More than half";
         $ModuleAnswer->save();
         
         $ModuleAnswer = new ModuleAnswer;
         $ModuleAnswer->moduleTest_id = "10";
         $ModuleAnswer->set = "q4";
         $ModuleAnswer->answer = "1 in every 10 patients";
         $ModuleAnswer->save();
         
         $ModuleAnswer = new ModuleAnswer;
         $ModuleAnswer->moduleTest_id = "10";
         $ModuleAnswer->set = "q4";
         $ModuleAnswer->answer = "1 in every 250 patients";
         $ModuleAnswer->save();
         
         
         
         $ModuleAnswer = new ModuleAnswer;
         $ModuleAnswer->moduleTest_id = "11";
         $ModuleAnswer->set = "q5";
         $ModuleAnswer->answer = "Functional recovery depends upon the extent of injury";
         $ModuleAnswer->save();
         
         $ModuleAnswer = new ModuleAnswer;
         $ModuleAnswer->moduleTest_id = "11";
         $ModuleAnswer->set = "q5";
         $ModuleAnswer->answer = "The most severe cases show quickest recovery";
         $ModuleAnswer->save();
         
         $ModuleAnswer = new ModuleAnswer;
         $ModuleAnswer->moduleTest_id = "11";
         $ModuleAnswer->set = "q5";
         $ModuleAnswer->answer = "Prompt medical assistance is not essential for recovery";
         $ModuleAnswer->save();
         
         $ModuleAnswer = new ModuleAnswer;
         $ModuleAnswer->moduleTest_id = "11";
         $ModuleAnswer->set = "q5";
         $ModuleAnswer->answer = "Functional recovery is easy to achieve";
         $ModuleAnswer->save();
         
         
         
         $ModuleAnswer = new ModuleAnswer;
         $ModuleAnswer->moduleTest_id = "12";
         $ModuleAnswer->set = "q5";
         $ModuleAnswer->answer = "True";
         $ModuleAnswer->save();
         
         $ModuleAnswer = new ModuleAnswer;
         $ModuleAnswer->moduleTest_id = "12";
         $ModuleAnswer->set = "q5";
         $ModuleAnswer->answer = "False";
         $ModuleAnswer->save();
         
         
         
         $ModuleAnswer = new ModuleAnswer;
         $ModuleAnswer->moduleTest_id = "13";
         $ModuleAnswer->set = "q5";
         $ModuleAnswer->answer = "Surgery is very important to remove the debris";
         $ModuleAnswer->save();
         
         $ModuleAnswer = new ModuleAnswer;
         $ModuleAnswer->moduleTest_id = "13";
         $ModuleAnswer->set = "q5";
         $ModuleAnswer->answer = "Surgery takes the pressure off of the injured cord to prevent further damage to the cord";
         $ModuleAnswer->save();
         
         $ModuleAnswer = new ModuleAnswer;
         $ModuleAnswer->moduleTest_id = "13";
         $ModuleAnswer->set = "q5";
         $ModuleAnswer->answer = "Surgery is the only cure available for SCI as of now";
         $ModuleAnswer->save();
         
         $ModuleAnswer = new ModuleAnswer;
         $ModuleAnswer->moduleTest_id = "13";
         $ModuleAnswer->set = "q5";
         $ModuleAnswer->answer = "Surgery can help to minimize the complications following a SCI";
         $ModuleAnswer->save();
         
         
         
         $ModuleAnswer = new ModuleAnswer;
         $ModuleAnswer->moduleTest_id = "14";
         $ModuleAnswer->set = "q5";
         $ModuleAnswer->answer = "No role whatsoever";
         $ModuleAnswer->save();
         
         $ModuleAnswer = new ModuleAnswer;
         $ModuleAnswer->moduleTest_id = "14";
         $ModuleAnswer->set = "q5";
         $ModuleAnswer->answer = "After the initial surgical treatment intensive physical therapy over an extended period tends to yield maximum functional recovery";
         $ModuleAnswer->save();
         
         $ModuleAnswer = new ModuleAnswer;
         $ModuleAnswer->moduleTest_id = "14";
         $ModuleAnswer->set = "q5";
         $ModuleAnswer->answer = "Physical therapy is only useful in the first few months following an injury to avoid any pain";
         $ModuleAnswer->save();
         
         $ModuleAnswer = new ModuleAnswer;
         $ModuleAnswer->moduleTest_id = "14";
         $ModuleAnswer->set = "q5";
         $ModuleAnswer->answer = "Mild physical therapy in an infrequent manner is very helpful and has a recreational role following a SCI";
         $ModuleAnswer->save();
         
         
         
         $ModuleAnswer = new ModuleAnswer;
         $ModuleAnswer->moduleTest_id = "15";
         $ModuleAnswer->set = "q5";
         $ModuleAnswer->answer = "Depression";
         $ModuleAnswer->save();
         
         $ModuleAnswer = new ModuleAnswer;
         $ModuleAnswer->moduleTest_id = "15";
         $ModuleAnswer->set = "q5";
         $ModuleAnswer->answer = "Substance abuse";
         $ModuleAnswer->save();
         
         $ModuleAnswer = new ModuleAnswer;
         $ModuleAnswer->moduleTest_id = "15";
         $ModuleAnswer->set = "q5";
         $ModuleAnswer->answer = "Physical therapy";
         $ModuleAnswer->save();
         
         $ModuleAnswer = new ModuleAnswer;
         $ModuleAnswer->moduleTest_id = "15";
         $ModuleAnswer->set = "q5";
         $ModuleAnswer->answer = "Both a & b";
         $ModuleAnswer->save();
         
         
         
         $ModuleAnswer = new ModuleAnswer;
         $ModuleAnswer->moduleTest_id = "16";
         $ModuleAnswer->set = "q6";
         $ModuleAnswer->answer = "Cell transplants";
         $ModuleAnswer->save();
         
         $ModuleAnswer = new ModuleAnswer;
         $ModuleAnswer->moduleTest_id = "16";
         $ModuleAnswer->set = "q6";
         $ModuleAnswer->answer = "Laser therapy";
         $ModuleAnswer->save();
         
         $ModuleAnswer = new ModuleAnswer;
         $ModuleAnswer->moduleTest_id = "16";
         $ModuleAnswer->set = "q6";
         $ModuleAnswer->answer = "Natural products & Growth factors";
         $ModuleAnswer->save();
         
         $ModuleAnswer = new ModuleAnswer;
         $ModuleAnswer->moduleTest_id = "16";
         $ModuleAnswer->set = "q6";
         $ModuleAnswer->answer = "Robotics & Brain-computer interface";
         $ModuleAnswer->save();
         
         
         
         $ModuleAnswer = new ModuleAnswer;
         $ModuleAnswer->moduleTest_id = "17";
         $ModuleAnswer->set = "q6";
         $ModuleAnswer->answer = "True";
         $ModuleAnswer->save();
         
         $ModuleAnswer = new ModuleAnswer;
         $ModuleAnswer->moduleTest_id = "17";
         $ModuleAnswer->set = "q6";
         $ModuleAnswer->answer = "False";
         $ModuleAnswer->save();
         
         
         
         $ModuleAnswer = new ModuleAnswer;
         $ModuleAnswer->moduleTest_id = "18";
         $ModuleAnswer->set = "q6";
         $ModuleAnswer->answer = "True";
         $ModuleAnswer->save();
         
         $ModuleAnswer = new ModuleAnswer;
         $ModuleAnswer->moduleTest_id = "18";
         $ModuleAnswer->set = "q6";
         $ModuleAnswer->answer = "False";
         $ModuleAnswer->save();
         
         
         
         $ModuleAnswer = new ModuleAnswer;
         $ModuleAnswer->moduleTest_id = "19";
         $ModuleAnswer->set = "q6";
         $ModuleAnswer->answer = "Severity of the injury";
         $ModuleAnswer->save();
         
         $ModuleAnswer = new ModuleAnswer;
         $ModuleAnswer->moduleTest_id = "19";
         $ModuleAnswer->set = "q6";
         $ModuleAnswer->answer = "Commitment from the patient";
         $ModuleAnswer->save();
         
         $ModuleAnswer = new ModuleAnswer;
         $ModuleAnswer->moduleTest_id = "19";
         $ModuleAnswer->set = "q6";
         $ModuleAnswer->answer = "Positive outlook and adherence to the treatment";
         $ModuleAnswer->save();
         
         $ModuleAnswer = new ModuleAnswer;
         $ModuleAnswer->moduleTest_id = "19";
         $ModuleAnswer->set = "q6";
         $ModuleAnswer->answer = "All of the above";
         $ModuleAnswer->save();
         
         
         
         $ModuleAnswer = new ModuleAnswer;
         $ModuleAnswer->moduleTest_id = "20";
         $ModuleAnswer->set = "q6";
         $ModuleAnswer->answer = "Within the first six months";
         $ModuleAnswer->save();
         
         $ModuleAnswer = new ModuleAnswer;
         $ModuleAnswer->moduleTest_id = "20";
         $ModuleAnswer->set = "q6";
         $ModuleAnswer->answer = "Within the first year";
         $ModuleAnswer->save();
         
         $ModuleAnswer = new ModuleAnswer;
         $ModuleAnswer->moduleTest_id = "20";
         $ModuleAnswer->set = "q6";
         $ModuleAnswer->answer = "Within first 2 years";
         $ModuleAnswer->save();
         
         $ModuleAnswer = new ModuleAnswer;
         $ModuleAnswer->moduleTest_id = "20";
         $ModuleAnswer->set = "q6";
         $ModuleAnswer->answer = "After 2 years";
         $ModuleAnswer->save();
         
         
         
         $ModuleAnswer = new ModuleAnswer;
         $ModuleAnswer->moduleTest_id = "21";
         $ModuleAnswer->set = "q6";
         $ModuleAnswer->answer = "True";
         $ModuleAnswer->save();
         
         $ModuleAnswer = new ModuleAnswer;
         $ModuleAnswer->moduleTest_id = "21";
         $ModuleAnswer->set = "q6";
         $ModuleAnswer->answer = "False";
         $ModuleAnswer->save();
         
         
         
         $ModuleAnswer = new ModuleAnswer;
         $ModuleAnswer->moduleTest_id = "22";
         $ModuleAnswer->set = "q6";
         $ModuleAnswer->answer = "Yes, but it is not significant";
         $ModuleAnswer->save();
         
         $ModuleAnswer = new ModuleAnswer;
         $ModuleAnswer->moduleTest_id = "22";
         $ModuleAnswer->set = "q6";
         $ModuleAnswer->answer = "Yes, with a positive outlook and hard work it may be achieved";
         $ModuleAnswer->save();
         
         $ModuleAnswer = new ModuleAnswer;
         $ModuleAnswer->moduleTest_id = "22";
         $ModuleAnswer->set = "q6";
         $ModuleAnswer->answer = "Yes, it is easily achieved";
         $ModuleAnswer->save();
         
         $ModuleAnswer = new ModuleAnswer;
         $ModuleAnswer->moduleTest_id = "22";
         $ModuleAnswer->set = "q6";
         $ModuleAnswer->answer = "No, it is impossible";
         $ModuleAnswer->save();
         
         
         
        // ----------------------------
        //         Module 2. x sets
        // ----------------------------
         
         
    }   
}


            // Template
        //  $ModuleAnswer = new ModuleAnswer;
        //  $ModuleAnswer->moduleTest_id = "";
        //  $ModuleAnswer->set = "";
        //  $ModuleAnswer->answer = "";
        //  $ModuleAnswer->save();
         
        //  $ModuleAnswer = new ModuleAnswer;
        //  $ModuleAnswer->moduleTest_id = "";
        //  $ModuleAnswer->set = "";
        //  $ModuleAnswer->answer = "";
        //  $ModuleAnswer->save();
         
        //  $ModuleAnswer = new ModuleAnswer;
        //  $ModuleAnswer->moduleTest_id = "";
        //  $ModuleAnswer->set = "";
        //  $ModuleAnswer->answer = "";
        //  $ModuleAnswer->save();
         
        //  $ModuleAnswer = new ModuleAnswer;
        //  $ModuleAnswer->moduleTest_id = "";
        //  $ModuleAnswer->set = "";
        //  $ModuleAnswer->answer = "";
        //  $ModuleAnswer->save();