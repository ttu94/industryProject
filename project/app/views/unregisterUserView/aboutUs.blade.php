@extends('layouts.unregisteredMaster')

@section('title')
	About Us
@endsection

@section('pageTitle')
    <!--NAME OF THIRD HEADER GOES HERE-->
   <h2>About Us</h2>
@endsection

@section('content')
<div class="container-fluid">
    <br>
        <!--LEFT SIDE OF SCREEN-->
        <div class="col-md-6">
            <div>
                <br>
                <img class="aboutUsImageOne"alt="About Spinal Cord Injury" src="https://metrouk2.files.wordpress.com/2017/02/the_legend_of_zelda_-_breath_of_the_wild_screenshot___7__.jpg?quality=80&strip=all&strip=all" />
                <!--Next Block *******-->
                <div class="blocks">
                        <h3 style="color: #595145">About The Clincal Trials</h3>
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
                <!--NEXT BLOCK******-->
                
                <img class="aboutUsImageOne"alt="About Spinal Cord Injury" src="http://i2.kym-cdn.com/photos/images/original/001/136/185/604.jpg"/>
            </div>
        </div>
        <!--RIGHT SIDE OF SCREEn-->
        <div class="col-md-6">
            
            <div>
                <!--div height set same as image to the side-->
                <div class="blocks">
                        <h3 style="color: #595145">About Spinal Cord Rehabilitation</h3>
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
                            <br><br>
                            <a target="_blank" href="https://cjcneurostemcell.org/"><button class="btns4 greybrown2">The Clem Jones Centre for Neurobiology and Stem Cell Research</button></a> <br>
                        </p>
                </div>
                <!--NEXT BLOCK DOWN-->
                <img class="aboutUsImageOne"alt="" src="http://res.cloudinary.com/lmn/image/upload/e_sharpen:100/f_auto,fl_lossy,q_auto/v1/gameskinnyc/l/e/g/legend-zelda-breath-wild-featured-4e212.jpg"/>
                <!--NEXT BLOCK DOWN-->
                <div class="blocks">
                        <h3 style="color: #595145">About The Educational Modules</h3>
                        <p class="basicFontStyle" style="text-align: justify">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra
                            varius quam sit amet vulputate. Quisque mauris augue, molestie tincidunt
                            condimentum vitae, gravida a libero. Aenean sit amet felis dolor, in sagittis
                            nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor
                            accumsan. Aliquam in felis sit amet augue.
                            <br><br>
                            <a href="abstractModule"><button class="btns4 greenbluelight2">Access Educational Module Abstracts</button></a>
                            <br>
                            <a href="educationalModules"><button class="btns4 greenbluedark2">Access Full Educational Modules</button></a>
                        </p>
                </div>
            </div>
        </div>
</div>

      <div class="yellowBar">
                    <h3 class="meetDoctor" style="text-align:center"><br>Meet the Doctors who are part of the clinical trial.</h3>
                </div>
<div class="container-fluid">
        <!--Panels which contain the medical staff-->
            
            <div class="col-md-12">
                
          
                <br>
                <br>
            </div>
            
            <br>
            <div class="row">
                <div class="col-md-4">
                    <div class="panel panel-default doctorPanel">
                        <img class="doctorImage" alt="Dr. Thuan Tu" src="images/titan.png" />    
                        <h3 style="text-align: center">Dr. Thuan Tu</h3>
                        <div class="panel-body basicFontStyle" style="text-align: justify">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra
                            varius quam sit amet vulputate. Quisque mauris augue, molestie tincidunt
                            condimentum vitae, gravida a libero. Aenean sit amet felis dolor, in sagittis
                            nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor
                            accumsan. Aliquam in felis sit amet augue.<br>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-default doctorPanel">
                        <img class="doctorImage" alt="Dr. Thuan Tu" src="images/userImage.jpg" />
                        <h3 style="text-align: center">Dr. James St John</h3>
                        <div class="panel-body basicFontStyle" style="text-align: justify">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra
                            varius quam sit amet vulputate. Quisque mauris augue, molestie tincidunt
                            condimentum vitae, gravida a libero. Aenean sit amet felis dolor, in sagittis
                            nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor
                            accumsan. Aliquam in felis sit amet augue. <br>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-default doctorPanel">
                        <img class="doctorImage" alt="Dr. Thuan Tu" src="images/emma.png" />
                        <h3 style="text-align: center">Dr. Emma Watson</h3>
                        <div class="panel-body basicFontStyle" style="text-align: justify">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra
                            varius quam sit amet vulputate. Quisque mauris augue, molestie tincidunt
                            condimentum vitae, gravida a libero. Aenean sit amet felis dolor, in sagittis
                            nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor
                            accumsan. Aliquam in felis sit amet augue.<br>
                        </div>
                    </div>
                </div>
            </div>
          
        

</div>

@endsection
