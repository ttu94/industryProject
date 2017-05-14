@extends('layouts.masterLogin')

@section('title')
    {{-- USER NAME WILL NEED TO BE TAKEN OUT OF DB --}}
	My Results
	
@endsection

@section('pageTitle')
    <!--NAME OF THIRD HEADER GOES HERE-->
    <!--THIS ALSO NEEDS TO BE TAKEN FROM DB-->
    @if(Auth::check())
   <h2>{{$user->firstName}}'s Results!</h2>
   @endif
@endsection

@section('content')
<div class="container-fluid basicFontStyle">
    <br>
    <div class="overallPanel">
        <h1 style=text-align:center><strong>Overall Results</strong></h1>
        <br>
        <img class="graph" alt="demographs" src="{{ URL::to('/') }}/images/demographs.png"/>
    </div>
    <br>
    
    <!--MODULE 1 RESULTS-->
    <div class="moduleResPanel">
            <p class="modResTitle"><strong>Module 1: </strong>Demographics & Economics of Spinal Cord Injury (SCI)</p>
            <table>
                <tr class="r">
                    <!--User data from database-->
                    <td class="resHeaders"><strong>Date of completion:</strong></td>
                </tr>
                <tr class="r">
                    <!--User data from database-->
                    <td class="resHeaders"><strong>Date of last test:</strong></td>
                </tr>
                <tr class="r">
                    <!--User data from database-->
                    <td class="resHeaders"><strong>Pass percentage:</strong></td>
                </tr>
            </table>
            <br>
            <a href={{ route("individual_module", array("id" => Auth::user()->id)) }}><button class="btn3 greenbluedark2">See Module 1 Results</button></a>
    </div>
    <br><br>
    
    <!--MODULE 2 RESULTS-->
    <div class="moduleResPanel">
            <p class="modResTitle"><strong>Module 2: </strong>Spinal cord as a neutral tissue and injury to the nerves</p>
            <table>
                <tr class="r">
                    <!--User data from database-->
                    <td class="resHeaders"><strong>Date of completion:</strong></td>
                </tr>
                <tr class="r">
                    <!--User data from database-->
                    <td class="resHeaders"><strong>Date of last test:</strong></td>
                </tr>
                <tr class="r">
                    <!--User data from database-->
                    <td class="resHeaders"><strong>Pass percentage:</strong></td>
                </tr>
            </table>
            <br>
            <a href={{ route("individual_module", array("id" => Auth::user()->id)) }}><button class="btn3 greenbluedark2">See Module 2 Results</button></a>
    </div>
    <br><br>
    
    <!--MODULE 3 RESULTS-->
    <div class="moduleResPanel">
            <p class="modResTitle"><strong>Module 3: </strong>Structures</p>
            <table>
                <tr class="r">
                    <!--User data from database-->
                    <td class="resHeaders"><strong>Date of completion:</strong></td>
                </tr>
                <tr class="r">
                    <!--User data from database-->
                    <td class="resHeaders"><strong>Date of last test:</strong></td>
                </tr>
                <tr class="r">
                    <!--User data from database-->
                    <td class="resHeaders"><strong>Pass percentage:</strong></td>
                </tr>
            </table>
            <br>
            <a href={{ route("individual_module", array("id" => Auth::user()->id)) }}><button class="btn3 greenbluedark2">See Module 3 Results</button></a>
    </div>
    <br><br>
    
    <!--MODULE 4 RESULTS-->
    <div class="moduleResPanel">
            <p class="modResTitle"><strong>Module 4: </strong>Functions</p>
            <table>
                <tr class="r">
                    <!--User data from database-->
                    <td class="resHeaders"><strong>Date of completion:</strong></td>
                </tr>
                <tr class="r">
                    <!--User data from database-->
                    <td class="resHeaders"><strong>Date of last test:</strong></td>
                </tr>
                <tr class="r">
                    <!--User data from database-->
                    <td class="resHeaders"><strong>Pass percentage:</strong></td>
                </tr>
            </table>
            <br>
            <a href={{ route("individual_module", array("id" => Auth::user()->id)) }}><button class="btn3 greenbluedark2">See Module 4 Results</button></a>
    </div>
    <br><br>
    
    <!--MODULE 5 RESULTS-->
    <div class="moduleResPanel">
            <p class="modResTitle"><strong>Module 5: </strong>SCI mechanisms</p>
            <table>
                <tr class="r">
                    <!--User data from database-->
                    <td class="resHeaders"><strong>Date of completion:</strong></td>
                </tr>
                <tr class="r">
                    <!--User data from database-->
                    <td class="resHeaders"><strong>Date of last test:</strong></td>
                </tr>
                <tr class="r">
                    <!--User data from database-->
                    <td class="resHeaders"><strong>Pass percentage:</strong></td>
                </tr>
            </table>
            <br>
            <a href={{ route("individual_module", array("id" => Auth::user()->id)) }}><button class="btn3 greenbluedark2">See Module 5 Results</button></a>
    </div>
    <br><br>
    
    <!--MODULE 6 RESULTS-->
    <div class="moduleResPanel">
            <p class="modResTitle"><strong>Module 6: </strong>Types of injuries</p>
            <table>
                <tr class="r">
                    <!--User data from database-->
                    <td class="resHeaders"><strong>Date of completion:</strong></td>
                </tr>
                <tr class="r">
                    <!--User data from database-->
                    <td class="resHeaders"><strong>Date of last test:</strong></td>
                </tr>
                <tr class="r">
                    <!--User data from database-->
                    <td class="resHeaders"><strong>Pass percentage:</strong></td>
                </tr>
            </table>
            <br>
            <a href={{ route("individual_module", array("id" => Auth::user()->id)) }}><button class="btn3 greenbluedark2">See Module 6 Results</button></a>
    </div>
    <br><br>
    
    <!--MODULE 7 RESULTS-->
    <div class="moduleResPanel">
            <p class="modResTitle"><strong>Module 7: </strong>Different injuries and their effects on the cord and body</p>
            <table>
                <tr class="r">
                    <!--User data from database-->
                    <td class="resHeaders"><strong>Date of completion:</strong></td>
                </tr>
                <tr class="r">
                    <!--User data from database-->
                    <td class="resHeaders"><strong>Date of last test:</strong></td>
                </tr>
                <tr class="r">
                    <!--User data from database-->
                    <td class="resHeaders"><strong>Pass percentage:</strong></td>
                </tr>
            </table>
            <br>
            <a href={{ route("individual_module", array("id" => Auth::user()->id)) }}><button class="btn3 greenbluedark2">See Module 7 Results</button></a>
    </div>
    <br><br>
    
    <!--MODULE 8 RESULTS-->
    <div class="moduleResPanel">
            <p class="modResTitle"><strong>Module 8: </strong>Chromic effects of spinal cord injury</p>
            <table>
                <tr class="r">
                    <!--User data from database-->
                    <td class="resHeaders"><strong>Date of completion:</strong></td>
                </tr>
                <tr class="r">
                    <!--User data from database-->
                    <td class="resHeaders"><strong>Date of last test:</strong></td>
                </tr>
                <tr class="r">
                    <!--User data from database-->
                    <td class="resHeaders"><strong>Pass percentage:</strong></td>
                </tr>
            </table>
            <br>
            <a href={{ route("individual_module", array("id" => Auth::user()->id)) }}><button class="btn3 greenbluedark2">See Module 8 Results</button></a>
    </div>
    <br><br>
    
     <!--MODULE 9 RESULTS-->
    <div class="moduleResPanel">
            <p class="modResTitle"><strong>Module 9: </strong>Peripheral nerve regeneration</p>
            <table>
                <tr class="r">
                    <!--User data from database-->
                    <td class="resHeaders"><strong>Date of completion:</strong></td>
                </tr>
                <tr class="r">
                    <!--User data from database-->
                    <td class="resHeaders"><strong>Date of last test:</strong></td>
                </tr>
                <tr class="r">
                    <!--User data from database-->
                    <td class="resHeaders"><strong>Pass percentage:</strong></td>
                </tr>
            </table>
            <br>
            <a href={{ route("individual_module", array("id" => Auth::user()->id)) }}><button class="btn3 greenbluedark2">See Module 9 Results</button></a>
    </div>
    <br><br>
    
    <!--MODULE 10 RESULTS-->
    <div class="moduleResPanel">
            <p class="modResTitle"><strong>Module 10: </strong>CNS regeneration</p>
            <table>
                <tr class="r">
                    <!--User data from database-->
                    <td class="resHeaders"><strong>Date of completion:</strong></td>
                </tr>
                <tr class="r">
                    <!--User data from database-->
                    <td class="resHeaders"><strong>Date of last test:</strong></td>
                </tr>
                <tr class="r">
                    <!--User data from database-->
                    <td class="resHeaders"><strong>Pass percentage:</strong></td>
                </tr>
            </table>
            <br>
            <a href={{ route("individual_module", array("id" => Auth::user()->id)) }}><button class="btn3 greenbluedark2">See Module 10 Results</button></a>
    </div>
    <br><br>
    
    <!--MODULE 11 RESULTS-->
    <div class="moduleResPanel">
            <p class="modResTitle"><strong>Module 11: </strong>Repair therapeutic strategies</p>
            <table>
                <tr class="r">
                    <!--User data from database-->
                    <td class="resHeaders"><strong>Date of completion:</strong></td>
                </tr>
                <tr class="r">
                    <!--User data from database-->
                    <td class="resHeaders"><strong>Date of last test:</strong></td>
                </tr>
                <tr class="r">
                    <!--User data from database-->
                    <td class="resHeaders"><strong>Pass percentage:</strong></td>
                </tr>
            </table>
            <br>
            <a href={{ route("individual_module", array("id" => Auth::user()->id)) }}><button class="btn3 greenbluedark2">See Module 11 Results</button></a>
    </div>
</div>
@endsection