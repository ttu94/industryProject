@extends('layouts.masterLogin')

@section('title')
    {{-- USER NAME WILL NEED TO BE TAKEN OUT OF DB --}}
	Welcome 
    @if(Auth::check()) {{$user->firstName}}! 
	@endif
	
@endsection

@section('pageTitle')
    <!--NAME OF THIRD HEADER GOES HERE-->
    <!--THIS ALSO NEEDS TO BE TAKEN FROM DB-->
    @if(Auth::check())
   <h2>Welcome,
   {{$user->firstName}}!
   </h2>
   @endif
@endsection

@section('content')
<div class="container-fluid basicFontStyle">
    <br>
    <div class="col-md-4" style="height:500px;background-color: #E6E6E6">
        <br>
        <div class="summaryOfTests" style="margin-top: 100px;vertical-align: middle">

            <p class="basicFontStyle" style="text-align:center"><strong>Summary of tests done</strong></p>
            <br>
            <p class="basicFontStyle" style="text-align:center">Last test completed:</p>
            
            <!--VALUE NEEDS TO BE DRAWN FROM DATABASE-->
            <h1 class="basicFontStyle" style="text-align:center"><strong>24/12/17</strong></h1>
            <br>
            <p class="basicFontStyle" style="text-align:center">Modules completed</p>
  
            <!--VALUE NEEDS TO BE DRAWN FROM DATABASE-->
            <h1 style=text-align:center>3/11</h1>
        </div>
    </div>
        
    <div class="col-md-8" style="height:500px">
        <!--not sure what this will be of yet-->
        <img alt="Dr. Thuan Tu" src="http://www.austinclemens.com/Playfair/playfair_docs/assets/p1ex.png" style="width:100%;height:300px;" /> 
        <br>
        <br>
        <p class="basicFontStyle" style="margin-left:20px;margin-right:20px;text-align: justify">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra
            varius quam sit amet vulputate. Quisque mauris augue, molestie tincidunt
            condimentum vitae, gravida a libero. Aenean sit amet felis dolor, in sagittis
            nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor
            accumsan. Aliquam in felis sit amet augue.
        </p>
    </div>
    
    <div class="col-md-12">
        <br>
        
        <!--COVERFLOW GOES IN HERE -->
        <!-- this is a test coverflow -->
        <div id="modulant">
    			<div id="modulant-coverflow">
    				<img class="cover" src="https://d1avok0lzls2w.cloudfront.net/img_uploads/changing-urls-0(2).jpg"/>
    				<img class="cover" src="https://d1avok0lzls2w.cloudfront.net/img_uploads/changing-urls-0(2).jpg"/>
    				<img class="cover" src="https://d1avok0lzls2w.cloudfront.net/img_uploads/changing-urls-0(2).jpg"/>
    				<img class="cover" src="https://d1avok0lzls2w.cloudfront.net/img_uploads/changing-urls-0(2).jpg"/>
    				<img class="cover" src="https://d1avok0lzls2w.cloudfront.net/img_uploads/changing-urls-0(2).jpg"/>
    				<img class="cover" src="https://d1avok0lzls2w.cloudfront.net/img_uploads/changing-urls-0(2).jpg"/>
    				<img class="cover" src="https://d1avok0lzls2w.cloudfront.net/img_uploads/changing-urls-0(2).jpg"/>
    				<img class="cover" src="https://d1avok0lzls2w.cloudfront.net/img_uploads/changing-urls-0(2).jpg"/>
    			</div>
			
        </div>
    </div>
    
</div>
@endsection