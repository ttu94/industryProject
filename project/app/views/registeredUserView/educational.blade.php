@extends('layouts.masterLogin')

@section('title')
    Educational Modules
@endsection

@section('pageTitle')
    <!--NAME OF THIRD HEADER GOES HERE-->
    <!--THIS ALSO NEEDS TO BE TAKEN FROM DB-->
   <h2 style="color:white">Educational Modules</h2>
@endsection

@section('content')
<div class="container-fluid"> 
    <br>
    <p class="basicFontStyle text1" style="text-align: center"> 
    Here you have access to all eleven educational modules.
    By clicking on each module, you can see the module content and be able
    to download PDF versions, watch videos and take the quizzes.<br><br>
    Happy Learning!
    </p>
<div>
    <br>
    <div class="row">  
        <div class="col-md-4">
            <div class="panels panels-default panelsOne">
                <br>
                <h3 style="text-align: center">Module 1</h3>
                <div class="panels-body">
                    <p class="moduleTitle">
                        Facts and Figures for SCI
                    </p><br>
                    <a href={{ route("module_one", array("id" => Auth::user()->id)) }}><button class="btns darkgrey2">Read More</button></a>
                </div>
                <br>
            </div>
        </div>
    
        <div class="col-md-4">
            <div class="panels panels-default panelsTwo">
                <br>
                <h3 style="text-align: center">Module 2</h3>
                <div class="panels-body">
                    <p class="moduleTitle">
                        Spinal cord as a neutral tissue and injury to the nerves
                    </p><br>
                    <a href={{ route("module_two", array("id" => Auth::user()->id)) }}><button class="btns darkgrey2">Read More</button></a>
                </div>
                <br>
            </div>
        </div>
   
        <div class="col-md-4">
            <div class="panels panels-default panelsOne">
                <br>
                <h3 style="text-align: center">Module 3</h3>
                <div class="panels-body">
                    <p class="moduleTitle">
                        Structures
                    </p><br><br>
                    <a href={{ route("module_three", array("id" => Auth::user()->id)) }}><button class="btns darkgrey2" text-align: center >Read More</button></a>
                </div>
                
            </div>
        </div>
    </div>
    
    <br><br>
    
    <div class="row">  
        <div class="col-md-4">
            <div class="panels panels-default panelsTwo">
                <br>
                <h3 style="text-align: center">Module 4</h3>
                <div class="panels-body">
                    <p class="moduleTitle">
                        Functions
                    </p><br>
                    <a href={{ route("module_four", array("id" => Auth::user()->id)) }}><button class="btns darkgrey2">Read More</button></a>
                </div>
                <br><br>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="panels panels-default panelsOne">
                <br>
                <h3 style="text-align: center">Module 5</h3>
                <div class="panels-body">
                    <p class="moduleTitle">
                        SCI mechanisms
                    </p><br>
                    <a href={{ route("module_five", array("id" => Auth::user()->id)) }}><button class="btns darkgrey2">Read More</button></a>
                </div>
                <br>
            </div>
        </div>
    
        <div class="col-md-4">
            <div class="panels panels-default panelsTwo">
                <br>
                <h3 style="text-align: center">Module 6</h3>
                <div class="panels-body">
                    <p class="moduleTitle">
                        Types of injuries
                    </p><br>
                    <a href={{ route("module_six", array("id" => Auth::user()->id)) }}><button class="btns darkgrey2">Read More</button></a>
                </div>
                <br>
            </div>
        </div>
    </div>
    
    <br><br>
    
    <div class="row">  
        <div class="col-md-4">
            <div class="panels panels-default panelsOne">
                <br>
                <h3 style="text-align: center">Module 7</h3>
                <div class="panels-body">
                    <p class="moduleTitle">
                        Different injuries and their effects on the cord and body
                    </p><br>
                    <a href={{ route("module_seven", array("id" => Auth::user()->id)) }}><button class="btns darkgrey2" text-align: center >Read More</button></a>
                </div>
                
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="panels panels-default panelsTwo">
                <br>
                <h3 style="text-align: center">Module 8</h3>
                <div class="panels-body">
                    <p class="moduleTitle">
                        Chromic effects of spinal cord injury
                    </p><br>
                    <a href={{ route("module_eight", array("id" => Auth::user()->id)) }}><button class="btns darkgrey2">Read More</button></a>
                </div>
                <br><br>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panels panels-default panelsOne">
                <br>
                <h3 style="text-align: center">Module 9</h3>
                <div class="panels-body">
                    <p class="moduleTitle">
                        Peripheral nerve regeneration
                    </p><br>
                    <a href={{ route("module_nine", array("id" => Auth::user()->id)) }}><button class="btns darkgrey2">Read More</button></a>
                </div>
                <br>
            </div>
        </div>
    </div>
    
    <br><br>
    
    <div class="row">
        <div class="col-md-4">
            <div class="panels panels-default panelsTwo">
                <br>
                <h3 style="text-align: center">Module 10</h3>
                <div class="panels-body">
                    <p class="moduleTitle">
                        CNS regeneration
                    </p><br>
                    <a href={{ route("module_ten", array("id" => Auth::user()->id)) }}><button class="btns darkgrey2">Read More</button></a>
                </div>
                <br>
            </div>
        </div>
   
        <div class="col-md-4">
            <div class="panels panels-default panelsOne">
                <br>
                <h3 style="text-align: center">Module 11</h3>
                <div class="panels-body">
                    <p class="moduleTitle">
                        Repair therapeutic strategies 
                    </p><br><br>
                    <a href={{ route("module_eleven", array("id" => Auth::user()->id)) }}><button class="btns darkgrey2" text-align: center >Read More</button></a>
                </div>
                <br>
            </div>
         </div>
    </div>
</div>
</div>

           
    
@endsection