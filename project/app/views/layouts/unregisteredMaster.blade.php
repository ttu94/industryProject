<!doctype html>
<html lang="en">
 <head>
 	<meta charset="UTF-8">
  <meta name="keywords" content="HTML,CSS,Bootstrap,JavaScript, jQuery, SQL">
  <meta name="author" content="Caila Ancheta, Kenny Nguyen, Thuan Tu, Rahma Shafiq, Courtney Hall">
 	<link rel="shortcut icon" href="{{ URL::to('/') }}/images/favicon.png">
 	<title>@yield('title')</title>
 	
  <!--stylesheets-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  {{ HTML::style('css/stylesss.css', array(), true) }}
  
  <!--raleway font-->
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display|Raleway" rel="stylesheet"> 
  
  <!--rate us stars on contact page -->
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
  
  <!--Scripts for homeppage Carousel AND modal on contact us page-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <!--Scripts for drop down FAQ -->
  <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script>
   $(document).ready(function() {
  
   //Drop down box when faq question is pressed
  	$('.faq_question').click(function() {
  
  		if ($(this).parent().is('.open')){
  			$(this).closest('.faq').find('.faq_answer_container').animate({'height':'0'},500);
  			$(this).closest('.faq').removeClass('open');
  
  			}else{
  				var newHeight =$(this).closest('.faq').find('.faq_answer').height() +'px';
  				$(this).closest('.faq').find('.faq_answer_container').animate({'height':newHeight},500);
  				$(this).closest('.faq').addClass('open');
  			}
  
  	});
  	
  	// console.log($('input[name="usertype"]').value);
  	//this allows the checked radio button to be enable as soon as the page refreshes
  	if($("#utypeP").is(':checked')) {
     // console.log("ahi 1");
       $('.boxthird').hide();
       $('.boxtwo').hide();
       $('.box').show();
    } else if($("#utypeO").is(':checked')) {
     // console.log("ahi 12");
       $('.boxthird').show();
       $('.boxtwo').show();
       $('.box').hide();
    } else {
     // console.log("ahi 13");
       $('.boxthird').hide();
       $('.boxtwo').show();
       $('.box').hide();
    }  
    if($("#treat").is(':checked')) {
     $('.treated').show();
    } else {
  	  $('.treated').hide();
  	 }
    //used to debug the hide and show div box
   // $('input[name="usertype"]').change(function () {
   //  if($("#utypeP").is(':checked')) {
   //   console.log("hi 1");
   //  } else if($("#utypeO").is(':checked')) {
   //   console.log("hi 12");
   //  } else {
   //   console.log("hi 13");
   //  }  
   // });
  	
  	// this hides and shows the patient's extra detail div box & boxtwo, using the name='usertype'
  	$('input[name="usertype"]').click(function(){
       var inputValue = $(this).attr("value");
       if(inputValue == "patient"){
        $('.boxthird').hide();
        $('.boxtwo').hide();
        $('.box').show();
       } else if(inputValue == "other") {
        $('.boxthird').show();
        $('.boxtwo').show();
        $('.box').hide();
       } else {
        $('.boxthird').hide();
        $('.boxtwo').show();
        $('.box').hide();
       }
  	});
  	
  	//this will hide and show the treatment text box using the name='treatment'
  	$('input[name="treatment"]').click(function() {
  	    var inputValue = $(this).attr("value");
  	    if(inputValue == "yes"){
  	     $('.treated').show();
  	    } else {
  	     $('.treated').hide();
  	    }
  	});
   
  });
     
  </script>
  
  <!--Script for password meter-->
  <!--<script type="text/javascript" src="js/strongPass.js"></script>-->
  <script async src="//jsfiddle.net/n8Dza/896/embed/"></script>
 </head>
 <body>
     <div id="container">
       <div id="header">@include('includes.tripleHeader')</div>
       <div id="body">@yield('content')</div>
       <div id="footer">@include('includes.footer')</div>
     </div>
 </body>
</html>
