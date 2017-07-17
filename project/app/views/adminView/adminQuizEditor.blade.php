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
                <option value="Demographics and Economics of Spinal Cord Injury (SCI)" selected>Module 1: Demographics & Economics of Spinal Cord Injury</option>
                <option>Module 2: Spinal cord as a neutral tissue and injury to the nerves</option>
                <option>Module 3: </option>
                <option>Module 4:</option>
                <option>Module 5:</option>
                <option>Module 6:</option>
                <option>Module 7:</option>
                <option>Module 8:</option>
                <option>Module 9:</option>
                <option>Module 10:</option>
                <option>Module 11:</option>
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
