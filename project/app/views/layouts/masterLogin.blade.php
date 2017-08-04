<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="{{ URL::to('/') }}/images/Logo1.jpg">
        <title>@yield('title')</title>
        
        <!--stylesheets-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        {{ HTML::style('css/styles.css', array(), true) }}
        
        <!--sortable table css and js-->
        {{ HTML::style('css/sortable-theme-bootstrap.css') }}
        {{ HTML::script('js/sortable.min.js') }}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display|Raleway" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <!--Scripts for drop down FAQ -->
        <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script>
        $(document).ready(function() {
       
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
       	 
       	//  $('input[name="usertype"]').change(function () {
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
       	
       	
       	//script allows for the coverflow to be sorted via the user's preference
        var main = document.getElementById( 'modulant-coverflow' );
        
        [].map.call( main.children, function ( elem ) {
            return +elem.id.split( '_' )[1];
        }).sort( function ( a, b ) { 
            return a - b; 
        }).forEach( function ( id ) {
            var elem = main.querySelector( '#dv_' + id );
            if ( elem ) { main.appendChild( elem ); }
        });
       });
       
    </script>
    
       <!--CoverFlow js-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.9.0/jquery-ui.js"></script>
        <script src="{{ URL::asset('js/jquery.coverflow.js') }}"></script>
        <script src="{{ URL::asset('js/jquery.scrollSpeed.js') }}"></script>
        <script>
      	$(function() {
      		$('#modulant-coverflow').coverflow();
      		$('#modulant-coverflow').coverflow('option', 'enableWheel', false);
      		
      		$('#goto button').click(function() {
      			var x = $(this).attr('value') - 1;
      			$('#modulant-coverflow').coverflow('index', x);
      		})
      		
      	});
      </script>
    </head>
    <body>
    	<div id="container">
       		<div id="header">@include('includes.quadHeader')</div>
       		<div id="body">@yield('content')</div>
       		<div id="footer">@include('includes.footer')</div>
    	</div>
    </body>
</html>


    <!--Scripts for print button -->