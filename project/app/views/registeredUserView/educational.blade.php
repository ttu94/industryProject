@extends('layouts.masterLogin')

@section('title')
    Educational Modules
@endsection

@section('pageTitle')
    <!--NAME OF THIRD HEADER GOES HERE-->
    <!--THIS ALSO NEEDS TO BE TAKEN FROM DB-->
   <h2>Educational Modules</h2>
@endsection

@section('content')
<div class="container-fluid"> 
    <br>
    <p class="basicFontStyle" style="text-align: center"> 
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
    nisi ut aliquip ex ea commodo consequat.
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
                        Demographics & Economics of Spinal Cord Injury (SCI)
                    </p><br>
                    <a href="modulePageOne"><button class="btns greenbluemedium">Read More</button></a>
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
                    <a href="abstractModule"><button class="btns greenbluedark">Read More</button></a>
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
                    <a href="register"><button class="btns greenbluemedium" text-align: center >Read More</button></a>
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
                    <a href="modulesOne"><button class="btns greenbluedark">Read More</button></a>
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
                    <a href="aboutUs"><button class="btns greenbluemedium">Read More</button></a>
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
                    <a href="abstractModule"><button class="btns greenbluedark">Read More</button></a>
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
                    <a href="register"><button class="btns greenbluemedium" text-align: center >Read More</button></a>
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
                    <a href="modulesOne"><button class="btns greenbluedark">Read More</button></a>
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
                    <a href="aboutUs"><button class="btns greenbluemedium">Read More</button></a>
                </div>
                <br>
            </div>
        </div>
    </div>
    
    <br><br>
    
    <div class="row">
        <div class="col-md-4">
            <div class="panels panels-default panelsFour">
                <br>
                <h3 style="text-align: center">Module 10</h3>
                <div class="panels-body">
                    <p class="moduleTitle">
                        CNS regeneration
                    </p><br>
                    <a href="abstractModule"><button class="btns greenbluedark">Read More</button></a>
                </div>
                <br>
            </div>
        </div>
   
        <div class="col-md-4">
            <div class="panels panels-default panelsFive">
                <br>
                <h3 style="text-align: center">Module 11</h3>
                <div class="panels-body">
                    <p class="moduleTitle">
                        Repair therapeutic strategies 
                    </p><br><br>
                    <a href="register"><button class="btns greenbluemedium" text-align: center >Read More</button></a>
                </div>
                <br>
            </div>
         </div>
    </div>
</div>
</div>

           
    
@endsection