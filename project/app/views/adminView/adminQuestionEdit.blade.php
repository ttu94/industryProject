@extends('layouts.adminMaster')

@section('title')
	Admin Quiz Editor
@endsection

@section('pageTitle')
    <!--NAME OF THIRD HEADER GOES HERE-->
   <h2>Admin Quiz Editor</h2>
@endsection

@section('content')
<div class="container-fluid">
    <br>
    <div class="col-md-12 basicFontStyle">
        {{ Form::model($user, array('method' => 'PUT', 'route' => array('update_question', Auth::user()->id)))}}
            {{ var_dump($moduleAnswersDB) }}
            @if($moduleTestDB)
                @foreach($moduleTestDB as $moduleTestDB)
                    <p>{{ $moduleTestDB->moduleName }}</p>
                    <p>{{ $moduleTestDB->question }}</p>
                    <p>{{ $moduleTestDB->correctAnswer }}</p>
                    @foreach($moduleAnswersDB as $madb)
                        <p>{{ $madb->answer }}</p>
                    @endforeach
                @endforeach
            @else
                <p>Question with ID ( {{ $val }} ) doesn't exist</p>
            @endif
        {{ Form::close() }}
    </div>
</div>

@endsection
