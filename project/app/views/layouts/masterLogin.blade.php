<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="shortcut icon" href="images/clemJones.jpg">
	<title>@yield('title')</title>
	
	<!--stylesheets-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!--<link href="css/styles.css" rel="stylesheet">-->
    {{ HTML::style('css/styles.css', array(), true) }}
    <!--<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">-->
    {{ HTML::style('font-awesome/css/font-awesome.min.css', array(), true) }}
    <link rel="shortcut icon" href="images/favicon.png">
    <!--<link href='https://fonts.googleapis.com/css?family=Raleway:800' rel='stylesheet' type='text/css'>-->
    <!--<link href='https://fonts.googleapis.com/css?family=Raleway:100' rel='stylesheet' type='text/css'>-->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display|Raleway" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script>
        $(function() {
            $('.coverflow').coverflow();
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
