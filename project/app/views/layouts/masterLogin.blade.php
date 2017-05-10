<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="shortcut icon" href="images/clemJones.jpg">
	<title>@yield('title')</title>
	
	<!--stylesheets-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!--<link href="css/style.css" rel="stylesheet">-->
    {{ HTML::style('css/styles.css', array(), true) }}
    {{ HTML::style('coverflow/css/style.css', array(), true) }}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="shortcut icon" href="{{ URL::to('/') }}/images/clemJones.jpg">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display|Raleway" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <!--CoverFlow js-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.js"></script>
	<script type="text/javascript" src="reflection.js"></script> <!--Optional-->
	<script src="jquery.interpolate.min.js"></script>
    <script src="jquery.coverflow.js"></script>
    
   // <script>
   //    $(function() {
			// 	// Alphabet
			// 	$('.coverflow').coverflow();
			// 	$('#first').click(function() {
			// 		$('.coverflow').coverflow('index', 0);
			// 	});
			// 	$('#last').click(function() {
			// 		$('.coverflow').coverflow('index', -1);
			// 	});
			// 	$('#goto6').click(function() {
			// 		$('.coverflow').coverflow('index', 6-1);	// zero-based index!
			// 	});
				
			// 	$('#keyboard').click(function() {
			// 		$('.coverflow').coverflow('option', 'enableKeyboard', $(this).is(':checked'));
			// 	});
				
			// 	$('#wheel').click(function() {
			// 		$('.coverflow').coverflow('option', 'enableWheel', $(this).is(':checked'));
			// 	});
				
			// 	$('#click').click(function() {
			// 		$('.coverflow').coverflow('option', 'enableClick', $(this).is(':checked'));
			// 	});
			// 	/* CD covers */
			// 	if ($.fn.reflect) {
			// 		$('.photos .cover').reflect();
			// 	}
			// 	$('.photos').coverflow({
			// 		easing:			'easeOutElastic',
			// 		duration:		1000,
			// 		index:			3,
			// 		width:			320,
			// 		height:			240,
			// 		visible:		'density',
			// 		selectedCss:	{	opacity: 1	},
			// 		outerCss:		{	opacity: .1	},
					
			// 		confirm:		function() {
			// 			console.log('Confirm');
			// 		},
			// 		before:			function() {
			// 			$('#photos-name').stop(true).fadeOut('fast');
			// 		},
			// 		select:			function(event, cover) {
			// 			var img = $(cover).children().andSelf().filter('img').last();
			// 			$('#photos-name').text(img.data('name') || 'unknown').stop(true).fadeIn('fast');
			// 		},
			// 	});	
			// 	$('#leakdetect').click(function() {
			// 		$('#leakbucket').empty();
			// 		for (var i = 0; i < 100; ++i) {
			// 			$('<div><div>test</div></div>').appendTo('#leakbucket').coverflow();
			// 		}
			// 	});
			// });
   // </script>
</head>
<body>
	<div id="container">
   		<div id="header">@include('includes.quadHeader')</div>
   		<div id="body">@yield('content')</div>
   		<div id="footer">@include('includes.footer')</div>
	</div>
</body>
</html>
