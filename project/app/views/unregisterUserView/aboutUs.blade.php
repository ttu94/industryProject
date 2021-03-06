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
    <!--START ABOUT SPINAL CORD INJURY-->
    <div class="col-md-12 about_area">
        <div class="col-md-6">
            <br>
            <img class="aboutUsImageOne" alt="About Spinal Cord Injury" src="images/Home/GRIDD-3.jpg"/>
        </div>
        <div class="col-md-6">
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
    </div>
    <!--END SPINAL CORD INJURY-->
    
    <div class="col-md-12"><br></div> 
    
    <!--START ABOUT THE CLINICAL TRIALS-->
    <div class="col-md-12 about_area">
        <div class="col-md-6">
            <h3>About The Clinical Trials</h3>
            <p class="basicFontStyle" style="text-align: justify">
                Developing a therapy and making it available for widespread use is a very long, arduous and expensive process. 
                The treatment modality has to pass through numerous filters and tests before it can be implemented in clinical practice. 
                These tests are known as clinical trials. <br>
                
                Before a treatment can even be considered for a clinical trials, it has to be proven safe, harmless and effective on animals.
                This step is the pre-clinical trials.<br>
                
                If and when a drug or a therapy or a technique is deemed safe and potentially effective on animals, it has to go through 4 phases of clinical trials.
                Phase-I tests for safety of the intervention on a small group (20-100) of people. Phase-II trials test for how effective the treatment is, and if it
                works as intended or not, on a few hundred people. Phase-III trials further determine the effectiveness and safety of the intervention on several hundred to a 
                few thousand patients, and monitors for any adverse effects. Once the intervention or the treatment has been approved through these phases, it can then be marketed 
                and Phase-IV trials are conducted as ‘post-marketing trials’ on a large scale to study the long term effects.
                <br>
                
                Understandably, the whole process may take decades, relentless efforts from the highly motivated scientists and clinicians working together and hundreds of millions of dollars.
            </p>
        </div>
        <div class="col-md-6">
            <br>
            <img class="aboutUsImageOne" alt="About The Clinical Trials" src="images/AboutUs/aboutSCI.jpeg"/>
        </div>
    </div>
    <!--END THE CLINICAL TRIALS-->
    
    <div class="col-md-12"><br></div>
    
    <!--START ABOUT THE EDUCATIONAL MODULES-->
    <div class="col-md-12 about_area">
        <div class="col-md-6">
            <br>
            <img class="aboutUsImageOne" alt="About the Educational Modules" src="images/AboutUs/GRIDD_Announcement.jpg"/>
        </div>
        <div class="col-md-6">
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
            <br>
            <a href="abstractModule"><button class="btns4 darkgrey" style="width:35%">Access Educational Module Abstracts</button></a>
            <br>
            <a href={{{ route("education_modules")}}}><button class="btns4 darkgrey" style="width:35%">Access Full Educational Modules</button></a>
        </div>
    </div> <!--END ABOUT THE EDUCATIONAL MODULES-->
</div>

<div class="redBar">
    <h3 class="meetDoctor" style="text-align:center"><br>Meet the Spinal Injury Project (SIP) team!</h3>
</div>

<div class="container-fluid" style="margin-bottom:60px">
    <br>
    <div class="col-md-12 about_area">
        <div class="col-md-6 basicFontStyle words2" style="text-align: justify">
            "With the support of the Motor Accident Insurance Commission, 
            the Perry Cross Spinal Research Foundation and the Clem Jones Foundation, 
            we are conducting pre-clinical research for a cell transplantation therapy 
            to repair the injured spinal cord which we hope will lead to a Phase I/IIa 
            clinical trial within a few years."
        </div>
        <div class="col-md-6 basicFontStyle" style="text-align:center">
            <br>
            <a target="_blank" href="https://cjcneurostemcell.org/"><img src="images/siteLogo.png" alt="SIP logo" height="120px" width=""/></a><br>
            <br><strong> <u>To learn more about the SIP team, click their logo above </u></strong>
            <br>
        </div>
        <br><br>
        <div class="col-md-12" style="text-align: center">
            <br>
            <img class="team" alt="SiCURE team photo"src="images/AboutUs/team_SiCURE.png" width="100%"/>
        </div>
    </div>
</div>

@endsection
