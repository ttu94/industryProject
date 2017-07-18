@extends('layouts.adminMaster')

@section('title')
	Admin Quiz Editor
@endsection

@section('pageTitle')
    <!--NAME OF THIRD HEADER GOES HERE-->
   <h2>Admin Quiz Editor</h2>
@endsection

@section('content')
<script>
 var conceptName = $('#modTitleList').find(":selected").val();
 console.log("value: " + conceptName)
    
</script>

<div class="container-fluid">
    <br>
    <div class="col-md-12 basicFontStyle">
        @if($moduleTestDB)
        
            <select name="moduleTitle" id="moduleTitleList">
                <option value="Module 1" selected>Module 1: Demographics & Economics of Spinal Cord Injury</option>
                <option value="Module 2">Module 2: Spinal cord as a neutral tissue and injury to the nerves</option>
                <option value="Module 3">Module 3: </option>
                <option value="Module 4">Module 4:</option>
                <option value="Module 5">Module 5:</option>
                <option value="Module 6">Module 6:</option>
                <option value="Module 7">Module 7:</option>
                <option value="Module 8">Module 8:</option>
                <option value="Module 9">Module 9:</option>
                <option value="Module 10">Module 10:</option>
                <option value="Module 11">Module 11:</option>
            </select>
            
            {{ Form::model($user, array('method' => 'PUT', 'route' => array('update_question', Auth::user()->id)))}}
            <select size="15" name="modQuestions" id="questionlist">
                @foreach($moduleTestDB as $moduleTestDB)
                    <option value="{{ $moduleTestDB->id }}">{{ $moduleTestDB->question }}</option>
                @endforeach
            </select>
            
            <button class="button redbrown" type="submit" style="float:right; width:50%">Add Question</button> 
        <!--</form>-->
        {{ Form::close() }}
        
        @else
            <p>No Module Questions/ Module Database Doesn't Exist</p>
        @endif
    </div>
</div>

@endsection
