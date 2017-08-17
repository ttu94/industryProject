@extends('layouts.masterLogin')

@section('title')
	My Results
@endsection

@section('pageTitle')
    @if(Auth::check())
   <h2 style="color:white">{{$user->firstName}}'s Results: {{ $moduleNo }} </h2>
   @endif
@endsection

@section('content')
<div class="container-fluid basicFontStyle">
    <br>
    <h1 style="text-align:center"><strong> {{ $moduleNo }} </strong></h1>
    <br>
    <div class="col-md-6">
        <a href={{ route("individual_module", array("id" => Auth::user()->id)) }}><button class="indiBtn darkgrey2">Go to Module Information</button></a>
    </div>
    <div class="col-md-6">
         <a href={{ route("individual_module", array("id" => Auth::user()->id)) }}><button class="indiBtn2 darkgrey2">Retake the quiz >></button></a>
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
                <?php $count=1 ?>
                @foreach($userResultsDB as $k=>$r)
                    <tr>
                        <td> {{ $count++ }} </td>
                        <td> {{ ($r->moduleResult * 100) }} </td>
                        <td> [score: e.g. 4/10]</td>
                        <td> {{ $r->created_at }} </td>
                        <td> [time taken] </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    
</div>
@endsection