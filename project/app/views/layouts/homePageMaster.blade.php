<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="shortcut icon" href="images/clemJones.jpg">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('title')</title>
	
	<!--stylesheets-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!--<link href='https://fonts.googleapis.com/css?family=Raleway:800' rel='stylesheet' type='text/css'>-->
    <!--<link href='https://fonts.googleapis.com/css?family=Raleway:100' rel='stylesheet' type='text/css'>-->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display|Raleway" rel="stylesheet"> 
    <!--Scripts for homeppage Carousel-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>

  </style>
</head>
<body>
	<div id="container">
   		<div id="header">@include('includes.homeHeader')</div>
   		<div id="body">@yield('content')</div>
   		<div id="footer">@include('includes.footer')</div>
	</div>
</body>
</html>
