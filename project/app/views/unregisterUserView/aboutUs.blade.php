@extends('layouts.unregisteredMaster')

@section('title')
	About Us
@endsection

@section('pageTitle')
    <!--NAME OF THIRD HEADER GOES HERE-->
   <h2>About Us</h2>
@endsection

@section('content')
<div class="container-fluid ">
    <br>
    <!--ABOUT SPINAL CORD INJURY-->
    <div class="col-md-6">
        <!--<br>-->
        <br><br>
        <img class="aboutUsImageOne"alt="About Spinal Cord Injury" src="http://o.aolcdn.com/images/dims?thumbnail=2000%2C1000&image_uri=http%3A%2F%2Fo.aolcdn.com%2Fhss%2Fstorage%2Fmidas%2Fcf8cb61cf3c7b9b0ef8b0895f54d43%2F203845365%2F160518-1715.jpg&client=cbc79c14efcebee57402&signature=fc6f13b18bd5da2b408cddf198a36f20c3c6560d" />
    </div>
    <div class="col-md-6">
        <br>
        <h3 style="color: #595145">About Spinal Cord Injury Rehabilitation</h3>
        <p class="basicFontStyle" style="text-align: justify">
            The aim of Spinal Cord Injury Rehabilitation is to educate the general public about the spinal cord and the injuries that are associated. An additional goal of ours is to 
            find people who have been affected by a spinal cord injury and help them through a world-first clinical trial in which the patient's brain and spinal cord are helped
            regenerated through a three-dimensional nerve bridge.
            <br><br>
            People who have been affected by a spinal cord injury are strongly encouraged to register, understand the educational modules and complete the quizzes in order to become eligible for 
            clincal trials that will be conducted by The Clem Jones Centre for Neurobiology and Stem Cell Research
            in a few short years with the support of the Perry Cross Spinal Research Foundation.
            <br><br>
        </p>
    </div>
    <div class="col-md-12">
        <br>
        <a target="_blank" href="https://cjcneurostemcell.org/"><button class="btns4 greybrown2" style="width:65%"> Click here to learn more about the Clem Jones Centre for Neurobiology and Stem Cell Research</button></a> <br>
        <br>
    </div>
    <br>
    <!--ABOUT THE CLINICAL TRIALS-->
    <div class="col-md-6">
        <h3 style="color: #595145">About The Clinical Trials</h3>
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
        <img class="aboutUsImageOne"alt="About Spinal Cord Injury" src="https://app.secure.griffith.edu.au/news/wp-content/uploads/2017/05/GRIDD-QLD-Gov-Funding-Announcement-225-1024x683.jpg"/>
    </div>
    
    <!--ABOUT THE EDUCATIONAL MODULES-->
    <div class="col-md-6">
        <br><br><br>
        <img class="aboutUsImageOne"alt="" src="http://www.futuremorph.org/wp-content/uploads/2012/05/MP900448479.jpg"/>
    </div>
    <div class="col-md-6">
        <br><br>
        <h3 style="color: #595145">About The Educational Modules</h3>
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
        <a href="abstractModule"><button class="btns4 greenbluelight2" style="width:35%">Access Educational Module Abstracts</button></a>
        <br>
        <a href={{{ route("education_modules")}}}><button class="btns4 greenbluedark2" style="width:35%">Access Full Educational Modules</button></a>
            
    </div>
</div>

<div class="yellowBar">
    <h3 class="meetDoctor" style="text-align:center"><br>Meet the Doctors who are part of the clinical trial.</h3>
</div>

<div class="container-fluid">
    <br>
    <div class="col-md-6">
        <div class="panel panel-default doctorPanel">
            <br>
            <img class="doctorImage" alt="" src="images/alan-mackay-sim.jpg" />    
            <h3 style="text-align: center">Professor Emeritus Alan Mackay-Sim</h3>
            <div class="panel-body basicFontStyle panelWords" style="text-align: justify">
                Alan Mackay-Sim is a neuroscientist and stem cell scientist.
                He graduated with a PhD from Macquarie University in 1980 and now is a 
                world leader in spinal cord injury research using nasal olfactory cells.
                He led a team from Brisbane in a world-first clinical trial in which the patient’s
                own olfactory cells were transplanted into their injured spinal cord in the first
                stages of a therapy to treat human paraplegia.
                <br>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="panel panel-default doctorPanel">
            <br>
            <img class="doctorImage" alt="" src="images/james-st-john.jpg" />
            <h3 style="text-align: center">Dr. James St John</h3>
            <div class="panel-body basicFontStyle panelWords" style="text-align: justify">
                James St John is Head of the Clem Jones Centre for Neurobiology and Stem Cell Research within
                <a target="_blank" href="https://www.griffith.edu.au/institute-drug-discovery/about-centre" style="color: #88ABA5">GRIDD</a> 
                and aims to
                develop therapies to treat acquired brain injury and spinal cord injury. His team is currently
                designing three-dimensional nerve bridges that will help regenerate the brain and spinal cord by combining advanced
                cell purification techniques alongside natural product drug discovery and engineering.
                <br>
            </div>
        </div>
    </div>
    
</div>

@endsection
