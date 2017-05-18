@extends('layouts.masterLogin')

@section('title')
	My Results
@endsection

@section('pageTitle')
    @if(Auth::check())
   <h2>{{$user->firstName}}'s Results: Module [number]</h2>
   @endif
@endsection

@section('content')
<div class="container-fluid basicFontStyle">
    <br>
    <h1 style="text-align:center"><strong>[Module Name]</strong></h1>
    <br>
    <div class="col-md-6">
        <a href={{ route("individual_module", array("id" => Auth::user()->id)) }}><button class="indiBtn greenbluedark2">Go to Module Information</button></a>
    </div>
    <div class="col-md-6">
         <a href={{ route("individual_module", array("id" => Auth::user()->id)) }}><button class="indiBtn2 greenbluedark2">Retake the quiz >></button></a>
    </div>
    <br><br><br><br>
    <div class="col-md-12">
        <table class="sortable-theme-bootstrap" style="width:100%" data-sortable>
            <thead>
                <tr>
                    <th>Attempt No.</th>
                    <th>Result (%)</th>
                    <th>Score</th>
                    <th>Date of test taken</th>
                    <th>Time taken</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>60</td>
                    <td>18/30</td>
                    <td>15, May 2017 10:49 AM</td>
                    <td>15 minutes 31 seconds</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>73</td>
                    <td>22/30</td>
                    <td>15, May 2017 11:20 AM</td>
                    <td>12 minutes 18 seconds</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>90</td>
                    <td>27/30</td>
                    <td>15, May 2017 11:52 AM</td>
                    <td>9 minutes 2 seconds</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>90</td>
                    <td>27/30</td>
                    <td>15, May 2017 11:52 AM</td>
                    <td>9 minutes 2 seconds</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>90</td>
                    <td>27/30</td>
                    <td>15, May 2017 11:52 AM</td>
                    <td>9 minutes 2 seconds</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>90</td>
                    <td>27/30</td>
                    <td>15, May 2017 11:52 AM</td>
                    <td>9 minutes 2 seconds</td>
                </tr>
            </tbody>
        </table>
    </div>

    
</div>
@endsection