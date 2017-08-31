@extends('layouts.adminMaster')

@section('title')
	Admin Quiz Editor
@endsection

@section('pageTitle')
    <!--NAME OF THIRD HEADER GOES HERE-->
   <h2>Admin Quiz Editor</h2>
@endsection

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        for(var i = 1;i <= 11;i++){
            var module = "Module " + i;
            var listid = "Module" + i;
            if(module == "Module 1"){
                $("#questionlist option[class=" + listid + "]").show();
      	    } else {
      	        $("#questionlist option[class=" + listid + "]").hide();
      	    }
        }
        $("#moduleTitleList").on("change", function() {
            var mtvalue = this.value;
            console.log(mtvalue)
            
            for(var i = 0;i < 11;i++){
                var module = "Module " + i;
                var listid = "Module" + i;
                if(mtvalue == module){
                    document.getElementById('optiondiv').innerHTML = '';
                    document.getElementById('optiondiv').innerHTML = '<input name="moduleNo" value="' + module + '" >';
                    $("#questionlist option[class=" + listid + "]").show();
          	    } else {
          	     //   var option = document.getElementById(listid);
          	        $("#questionlist option[class=" + listid + "]").hide();
          	    }
            }
        });
    });
</script>

<div class="container-fluid">
    <br>
    <div class="col-md-6 col-xs-6 basicFontStyle">
        @if($moduleTestDB)
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
            </select>
    </div>
    {{ Form::model($user, array('method' => 'PUT', 'route' => array('edit_question', Auth::user()->id)))}}
    <div class="col-md-6 col-xs-6 basicFontStyle">
            <select size="15" name="modQuestions" id="questionlist">
                @foreach($moduleTestDB as $moduleTestDB)
                    <option class="{{ str_replace(' ', '', $moduleTestDB->moduleName) }}" value="{{ $moduleTestDB->id }}">{{ $moduleTestDB->question }}</option>
                @endforeach
            </select>
            <button class="btns3 darkgrey" type="submit">Edit</button>
        
        <button class="btns3 darkgrey" type="submit">Add</button>
        @else
            <p>No Module Questions/ Module Database Doesn't Exist</p>
        @endif
    </div>
    <div id="optiondiv" style="display:none"></div>
    {{ Form::close() }}
</div>

@endsection
