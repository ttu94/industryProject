@extends('layouts.adminMaster')

@section('title')
	Admin Add Question
@endsection

@section('pageTitle')
    <!--NAME OF THIRD HEADER GOES HERE-->
   <h2>Admin Add Question</h2>
@endsection

@section('content')
<div class="container-fluid">
    <br>
    <div class="col-md-12 basicFontStyle">
        {{ Form::model($user, array('method' => 'PUT', 'route' => array('new_question', Auth::user()->id)))}}
                    <!--Select Question Module-->
                    <select name="moduleTitle" id="moduleTitleList"> 
                        <option value="Module 1" selected>Module 1: Demographics & Economics of Spinal Cord Injury</option>
                        <option value="Module 2">Module 2: Spinal cord as a neutral tissue and injury to the nerves</option>
                        <option value="Module 3">Module 3: Structure</option>
                        <option value="Module 4">Module 4: Functions</option>
                        <option value="Module 5">Module 5: SCI mechanisms</option>
                        <option value="Module 6">Module 6: Types of injuries</option>
                        <option value="Module 7">Module 7: Different injuries and their effects on the cord and body</option>
                        <option value="Module 8">Module 8: Chromic effects of spinal cord injury</option>
                        <option value="Module 9">Module 9: Peripheral nerve regeneration</option>
                        <option value="Module 10">Module 10: CNS regeneration</option>
                        <option value="Module 11">Module 11: Repair therapeutic strategies</option>
                    </select> <br>
                    Question: {{ Form::text('question', null , array('class' => 'question register')) }} <br><br>
                    Correct Answer: {{ Form::text('correctAnswer', null, array('class' => 'answers register')) }} <br>
                    <?php
                    
                        for($count=1;$count<=4;$count++){
                            $ans = 'answer'.$count;
                            ?>
                            Answer {{ $count }}: {{ Form::text($ans, null , array('class' => 'answers register')) }}<br>
                            <?php
                            
                        }
                        
                    ?>
            {{ Form::submit('Add New Question', array('class' => 'basicFontStyle btns3 darkgrey')) }}
        {{ Form::close() }}
        <a href={{ route("admin_quiz_editor", array("id" => Auth::user()->id)) }}><button class="btns3 darkgrey">Cancel</button></a>
    </div>
</div>

@endsection