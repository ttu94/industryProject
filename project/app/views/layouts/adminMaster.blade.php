<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="images/Logo1.jpg">
    <title>@yield('title')</title>
    <!--stylesheets-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    {{ HTML::style('css/styless.css', array(), true) }}
    <link rel="shortcut icon" href="images/favicon.png">
    
    <!--raleway font-->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display|Raleway" rel="stylesheet"> 
</head>

<body>
    <div id="container">
      <div id="header">@include('includes.adminHeader')</div>
      <div id="body">@yield('content')</div>
      <div id="footer">@include('includes.footer')</div>
    </div>
</body>

</html>
