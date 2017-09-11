<!doctype html>
<html lang="en">
    <head>
    	<meta charset="UTF-8">
      	<meta name="keywords" content="HTML,CSS,Bootstrap,JavaScript, jQuery, SQL">
        <meta name="author" content="Caila Ancheta, Kenny Nguyen, Thuan Tu, Rahma Shafiq, Courtney Hall">
    	<link rel="shortcut icon" href="{{ URL::to('/') }}/images/favicon.png">
    	<!--stylesheets-->
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        {{ HTML::style('css/stylesss.css', array(), true) }}
        <!--raleway font-->
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display|Raleway" rel="stylesheet">
   </head>

    <body style="basicFontStyle">
    <?php
        function moduleFullName($moduleNumber){
            switch($moduleNumber){
                case "Module 1": 
                    return "Facts and Figures for SCI"; 
                    break;
                case "Module 2": 
                    return "Spinal cord as a neutral tissue and injury to the nerves";
                    break;
                case "Module 3": 
                    return "Structures";
                    break;
                case "Module 4": 
                    return "Functions";
                    break;
                case "Module 5": 
                    return "SCI mechanisms";
                    break;
                case "Module 6": 
                    return "Types of injuries";
                    break;
                case "Module 7": 
                    return "Different injuries and their effects on the cord and body";
                    break;
                case "Module 8": 
                    return "Chromic effects of spinal cord injury";
                    break;
                case "Module 9": 
                    return "Peripheral nerve regeneration";
                    break;
                case "Module 10": 
                    return "CNS regeneration";
                    break;
                case "Module 11": 
                    return "Repair therapeutic strategies";
                    break;
            }
        }
    ?>
        <!--Certificate for module completion-->
        <div class="certificate" style="width:1000px;height:800px;text-align:center;margin:auto;">
            <img src="{{URL::to('/')}}/images/abc.png" style="top: 0; left: 0; right:0; margin:auto; position:absolute; width:1000px; height:670px; z-index:1"/>
            <br><br><br>
            <div style="color:#040B6B; position:relative; z-index:2">
                <span style="font-size:45px;font-weight:bold;basicFontStyle ">SPINAL INJURY PROJECT</span>
                <br><br>
                <span style="font-size:30px">Congratulations!</span><br/><br/>
                <span style="font-size:20px"><i>This is to certify that</i></span><br/><br/>
                <span style="font-size:55px"><b>{{$user->firstName}} {{$user->lastName}}</b></span><br/><br/>
                <span style="font-size:20px"><i>has completed</i></span><br/><br/>
                <span style="font-size:20px;font-weight:bold">{{$quizNo}}: {{moduleFullName($quizNo)}}</span><br/><br/>
                <span style="font-size:20px"><span id="spanDate"></span></span><br>
            </div>
        </div>       
        
        <!--Script for date-->
        <script type="text/javascript">
            var months = ['January','February','March','April','May','June','July',
            'August','September','October','November','December'];       
            var tomorrow = new Date();
            tomorrow.setTime(tomorrow.getTime() + (1000*3600*24));       
            document.getElementById("spanDate").innerHTML = months[tomorrow.getMonth()] + " " + tomorrow.getDate()+ ", " + tomorrow.getFullYear();
        </script>
    </body>
    
</html>
