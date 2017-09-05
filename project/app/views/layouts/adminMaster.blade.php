<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <!--<meta name="viewport" content="width=device-width,initial-scale=1">-->
        <meta name="viewport" content="500">
        <meta name="keywords" content="HTML,CSS,Bootstrap,JavaScript, jQuery, SQL">
        <meta name="author" content="Caila Ancheta, Kenny Nguyen, Thuan Tu">
        <link rel="shortcut icon" href="{{ URL::to('/') }}/images/favicon.png">
        <title>@yield('title')</title>
        <!--stylesheets-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        {{ HTML::style('css/styless.css', array(), true) }}
        {{ HTML::style('css/sortable-theme-bootstrap.css') }}
        {{ HTML::script('js/sortable.min.js') }}
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
