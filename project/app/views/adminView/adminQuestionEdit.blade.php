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

         <form action="{{ action('UserController@UpdateQuestion') }}" method="POST">
             @if($moduleTestDB)
                 <p>hi</p>
            @else
                <p>np</p>
            @endif
            {{ $val }}
                @if($moduleTestDB)
                    @foreach($moduleTestDB as $moduleTestDB)
                        <option value="{{ $moduleTestDB->id }}">{{ $moduleTestDB->question }}</option>
                    @endforeach
                @else
                    <p>Question with ID ( {{ $val }} ) doesn't exist</p>
                @endif
                
                
            </select>
        </form>
        {{$user->firstName}}
        <!--<a href=""> ADD Question</a>-->
    </div>
</div>

@endsection
