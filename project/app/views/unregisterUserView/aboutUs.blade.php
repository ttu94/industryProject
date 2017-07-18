@extends('layouts.unregisteredMaster')

@section('title')
	About Us
@endsection

@section('pageTitle')
    <!--NAME OF THIRD HEADER GOES HERE-->
   <h2 style="color: white;">About Us</h2>
@endsection

@section('content')
<div class="container-fluid ">
    <br>
    <!--ABOUT SPINAL CORD INJURY-->
    <div class="col-md-6">
        <br><br>
        <img class="aboutUsImageOne"alt="About Spinal Cord Injury" src="http://o.aolcdn.com/images/dims?thumbnail=2000%2C1000&image_uri=http%3A%2F%2Fo.aolcdn.com%2Fhss%2Fstorage%2Fmidas%2Fcf8cb61cf3c7b9b0ef8b0895f54d43%2F203845365%2F160518-1715.jpg&client=cbc79c14efcebee57402&signature=fc6f13b18bd5da2b408cddf198a36f20c3c6560d" />
    </div>
    <br>
    <br>
    <div class="col-md-6">
        <br>
        <h3>About Spinal Cord Injury Rehabilitation</h3>
        <p class="basicFontStyle" style="text-align: justify">
            Sustaining a spinal-cord injury is a life-changing event. In Australia, more than one person sustains spinal cord injury every
            day and many of these individuals are under the age of 24. Currently 12,000 Australians live with spinal cord injury and aside from the personal trauma,
            the cost to our society is $2 billion a year. Without an effective cure for spinal cord injury, the emotional and financial costs to individuals, their families, 
            and to our community are life-long. We are developing new therapeutic approaches for spinal cord repair using cell purification, development biology, natural 
            product drug discovery, microfluidic engineering, enhanced 3D cell culturing, live cell imaging, 3D bioprinting, neurosurgery and physiotherapy.
            <br><br>
        </p>
    </div>
    <!--ABOUT THE CLINICAL TRIALS-->
    <div class=col-md-12>
        <br><br>
    </div>
    <div class="col-md-6">
        <h3>About The Clinical Trials</h3>
        <p class="basicFontStyle" style="text-align: justify">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra
            varius quam sit amet vulputate. Quisque mauris augue, molestie tincidunt
            condimentum vitae, gravida a libero. Aenean sit amet felis dolor, in sagittis
            nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor
            accumsan. Aliquam in felis sit amet augue.
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra
            varius quam sit amet vulputate. Quisque mauris augue, molestie tincidunt
            condimentum vitae, gravida a libero. Aenean sit amet felis dolor, in sagittis
            nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor
            accumsan. Aliquam in felis sit amet augue.
        </p>
    </div>
    <div class="col-md-6">
        <img class="aboutUsImageOne"alt="About Spinal Cord Injury" src="images/AboutUs/aboutSCI.jpeg"/>
    </div>
    
    <!--ABOUT THE EDUCATIONAL MODULES-->
    <div class="col-md-6">
        <br><br><br>
        <img class="aboutUsImageOne" alt="" src="images/AboutUs/GRIDD_Announcement.jpg"/>
    </div>
    <div class="col-md-6">
        <br><br>
        <h3>About The Educational Modules</h3>
        <p class="basicFontStyle" style="text-align: justify">
            Spinal Cord Injury Rehabilitation provides a range of in-depth and interactive educational modules on matters relating to the spinal cord with an equal number of 
            online quizzes to test your knowledge.
            <br><br>
            <strong>Topics includes: </strong><br>
            <div class="basicFontStyle" style="margin-left: 20px">
                • Demographics & Economics of Spinal Cord Injury (SCI)<br>
                • Spinal cord as a neutral tissue and injury to the nerves<br>
                • Structures<br>
                • Functions<br>
                • SCI Mechanisms<br>
                • Types of Injuries<br>
                • Different injuries and their effects on the cord and body<br>
                • Chromic effects of spinal cord injury<br>
                • Perpheral nerve regeneration<br>
                • CNS regeneration<br>
                • Repair therapeutic strategies
                <br><br>
            </div>
        </p>
    </div>
    <div class="col-md-12">
        <a href="abstractModule"><button class="btns4 darkgrey2" style="width:35%">Access Educational Module Abstracts</button></a>
        <br>
        <a href={{{ route("education_modules")}}}><button class="btns4 darkgrey2" style="width:35%">Access Full Educational Modules</button></a>
            
    </div>
</div>

<div class="redBar">
    <h3 class="meetDoctor" style="text-align:center; color:white"><br>Meet the SiCURE team!</h3>
</div>

<div class="container-fluid">
    <br>
    <div class="col-md-6 basicFontStyle words2" style="text-align: justify">
        <br>
        "With the support of the Motor Accident Insurance Commission, 
        the Perry Cross Spinal Research Foundation and the Clem Jones Foundation, 
        we are conducting pre-clinical research for a cell transplantation therapy 
        to repair the injured spinal cord which we hope will lead to a Phase I/IIa 
        clinical trial within a few years."

    </div>
    <div class="col-md-6 basicFontStyle" style="text-align:center">
        <br>
        <a target="_blank" href="https://cjcneurostemcell.org/"><img src="images/AboutUs/SiCURELogo.png" alt="SiCURE logo"height="200px" width="380px"/></a><br>
        <strong> <u>To learn more about the SiCURE team, click their logo above </u></strong>
        <br>
    </div>
    <br><br>
    <div class="col-md-12" style="text-align: center">
        <br>
        <img class="team" alt="SiCURE team photo"src="images/AboutUs/team_SiCURE.png" width="100%"/>
    </div>
    <!--<div class="col-md-6">-->
    <!--    <div class="panel panel-default doctorPanel">-->
    <!--        <br>-->
    <!--        <img class="doctorImage" alt="" src="images/alan-mackay-sim.jpg" />    -->
    <!--        <h3 style="text-align: center; color:#D60505">Professor Emeritus Alan Mackay-Sim</h3>-->
    <!--        <div class="panel-body basicFontStyle panelWords" style="text-align: justify">-->
    <!--            Alan Mackay-Sim is a neuroscientist and stem cell scientist.-->
    <!--            He graduated with a PhD from Macquarie University in 1980 and now is a -->
    <!--            world leader in spinal cord injury research using nasal olfactory cells.-->
    <!--            He led a team from Brisbane in a world-first clinical trial in which the patient’s-->
    <!--            own olfactory cells were transplanted into their injured spinal cord in the first-->
    <!--            stages of a therapy to treat human paraplegia.-->
    <!--            <br>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    <!--<div class="col-md-6">-->
    <!--    <div class="panel panel-default doctorPanel">-->
    <!--        <br>-->
    <!--        <img class="doctorImage" alt="" src="images/james-st-john.jpg" />-->
    <!--        <h3 style="text-align: center; color: #D60505">Dr. James St John</h3>-->
    <!--        <div class="panel-body basicFontStyle panelWords" style="text-align: justify">-->
    <!--            James St John is Head of the Clem Jones Centre for Neurobiology and Stem Cell Research within-->
    <!--            <a target="_blank" href="https://www.griffith.edu.au/institute-drug-discovery/about-centre" style="color: #D60505">GRIDD</a> -->
    <!--            and aims to-->
    <!--            develop therapies to treat acquired brain injury and spinal cord injury. His team is currently-->
    <!--            designing three-dimensional nerve bridges that will help regenerate the brain and spinal cord by combining advanced-->
    <!--            cell purification techniques alongside natural product drug discovery and engineering.-->
    <!--            <br>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    
    
</div>

@endsection
