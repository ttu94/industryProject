@extends('layouts.adminMaster')

@section('title')
	Admin Quiz Editor
@endsection

@section('pageTitle')
    <!--NAME OF THIRD HEADER GOES HERE-->
   <h2>Admin Quiz Edit</h2>
@endsection

@section('content')
<div class="container-fluid">
    <br>
    <div class="col-md-12 basicFontStyle">
        {{ Form::model($user, array('method' => 'PUT', 'route' => array('update_question', Auth::user()->id)))}}
            @if($moduleTestDB)
                @foreach($moduleTestDB as $moduleTestDB)
                    Question: {{ Form::text('question', $moduleTestDB->question , array('class' => 'question register')) }} 
                    <br><br>
                     {{ Form::hidden('mtID', $val) }}
                     
                    Correct Answer: {{ Form::text('correctAnswer', $moduleTestDB->correctAnswer , array('class' => 'answers register')) }} <br>
                    <!--<p>moduleName::  {{ $moduleTestDB->moduleName }}</p>-->
                    <!--<p>question::  {{ $moduleTestDB->question }}</p>-->
                    <!--<p>correctAnswer::  {{ $moduleTestDB->correctAnswer }}</p>-->
                    <?php $count = 0; ?>
                    @foreach($moduleAnswersDB as $madb)
                        <?php $count++; $ans = 'answer'.$count; $maID = 'maID'.$count;?>
                        {{ Form::hidden($maID, $madb->id) }}
                        @if($madb->answer == $moduleTestDB->correctAnswer)
                            Answer {{ $count }}: {{ Form::text($ans, $madb->answer , array('class' => 'answers register')) }} 
                        @else
                            Answer {{ $count }}: {{ Form::text($ans, $madb->answer , array('class' => 'answers register')) }}
                        @endif
                        <br>
                        <!--<p>multi::  {{ $madb->answer }}</p>-->
                    @endforeach
                @endforeach
            @else
                <p>
                    Question with ID ( {{ $val }} ) doesn't exist. <br>
                    You need to select a question to edit.
                </p>
            @endif
            {{ Form::submit('Save', array('class' => 'btns3 darkgrey')) }}
        {{ Form::close() }}
        {{ Form::open(array('method' => 'DELETE', 'route' => array('delete_question', Auth::user()->id))) }}
          {{ Form::hidden('mtID', $val) }}
                    <button class="button warnred" type="submit" style="float:right; width:50%">Delete</button> 
     {{ Form::close() }}
        <!--<button class="button warnred" data-toggle="modal" data-target="#deleteModal" style="float:right">Delete</button> -->
        <a href={{ route("admin_quiz_editor", array("id" => Auth::user()->id)) }}><button class="btns3 darkgrey">Cancel</button></a>
    </div>
    
     {{ Form::open(array('method' => 'DELETE', 'route' => array('delete_question', Auth::user()->id))) }}
          {{ Form::hidden('mtID', $val) }}
            <!--MODAL FOR delete account -->
            <div class="modal fade" id="deleteModal" role="dialog">
              <div class="modal-dialog modal-sm">
                <div class="modal-content">
                  <div class="modal-header">
                    <!--<button type="button" class="close" data-dismiss="modal">&times;</button>-->
                    <h4 class="modal-title" style="text-align: center"><strong>WARNING!</strong></h4>
                  </div>
                  <div class="modal-body" style="text-align: center">
                    <p>Are you sure you want to delete this Question?<br>
                        This action cannot be undone.
                    </p>
                  </div>
                  <div class="modal-footer">
                     <button class="button darkgrey2" data-dismiss="modal" style="float:left; width:40%">Cancel</button>
                    <button class="button warnred" type="submit" style="float:right; width:50%">Delete</button> 
                  </div>
                </div>
              </div>
          </div> <!--MODAL ENDS -->
     {{ Form::close() }}
</div>

@endsection
