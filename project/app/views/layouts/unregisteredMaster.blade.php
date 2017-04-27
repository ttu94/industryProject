<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="shortcut icon" href="images/clemJones.jpg">
	<title>@yield('title')</title>
	
	<!--stylesheets-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="css/styles.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/favicon.png">
    <link href='https://fonts.googleapis.com/css?family=Raleway:800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:100' rel='stylesheet' type='text/css'>
    
    <!--Scripts for homeppage Carousel AND modal on contact us page-->
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
    
    });
</script>
</head>
<body>
	<div id="container">
   		<div id="header">@include('includes.tripleHeader')</div>
   		<div id="body">@yield('content')</div>
   		<div id="footer">@include('includes.footer')</div>
	</div>
</body>
</html>
