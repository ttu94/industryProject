@extends('layouts.masterLogin')

@section('title')
{{-- comment: this will take name from Database and use as title --}}
	John Smith
@endsection

@section('content')
<div class="profileHeader" style="border-color:black; border:0px; position:relative;">
   {{-- <table border="1" style="height:100%" id="menuBar">
        <tr>
            <td style="height:100%;">
                <a href="">
                    <div style="height:100%;width:100%;">
                        EDIT ACCOUNT DETAILS
                    </div>
                </a>
            </td>
            <td>
                <a href="">
                    <div style="height:100%;width:100%;">
                        RESULTS
                    </div>
                </a>
            </td>
            <td>
                <a href="">
                    <div style="height:100%;width:100%;">
                        EDUCATIONAL MODULES
                    </div>
                </a>
            </td>
        </tr>
    </table>
    --}}
    <ul id="menuBar">
        <li class="menuLink"><a href="">EDIT ACCOUNT DETAILS</a></li>
        <li class="menuLink"><a href="">RESULTS</a></li>
        <li class="menuLink"><a href="">EDUCATIONAL MODULES</a></li>
    </ul>
    
</div>


@endsection