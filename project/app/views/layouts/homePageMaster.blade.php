<!doctype html>
<html lang="en">
    <head>
    	<meta charset="UTF-8">
      	<meta name="viewport" content="width=device-width">
      	<meta name="keywords" content="HTML,CSS,Bootstrap,JavaScript, jQuery, SQL">
        <meta name="author" content="Caila Ancheta, Kenny Nguyen, Thuan Tu, Rahma Shafiq, Courtney Hall">
    	<link rel="shortcut icon" href="{{ URL::to('/') }}/images/favicon.png">
    	<title>@yield('title')</title>
    	
    	<!--stylesheets-->
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        {{ HTML::style('css/stylesss.css', array(), true) }}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <!--raleway font-->
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display|Raleway" rel="stylesheet"> 
        
        <!--Scripts for homeppage Carousel-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
    	<div id="container">
       		<div id="header">@include('includes.homeHeader')</div>
       		<div id="body">@yield('content')</div>
       		<div id="footer">@include('includes.footer')</div>
    	</div>
    </body>
</html>
