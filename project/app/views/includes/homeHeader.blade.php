<header>
        <!-- Top section of header -->
      <div class="topHeader">
          <!--<div class="topMargin">-->
                <!--Search Bar -->
                <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                        <a href="search"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a>
                    </div>
                </form>
                <!--Top header changes depending if user is logged in or not-->
                @if (Auth::check())
                    <ul>
                        <li style="float:right" class="topLink"><a href="user/logout" >LOGOUT</a></li>
                        <li style="float:right" class="topLink"><a href={{route("user.show", array("id" => Auth::user()->id))}}>MY PROFILE</a></li>
                    </ul>
                @else
                    <ul>
                        <li style="float:right" class="topLink"><a href="login">LOGIN</a></li>
                        <li style="float:right" class="topLink"><a href="register">REGISTER</a></li>
                    </ul>
                @endif
            <!--</div>-->
        </div>
        
        <!--bottom section of header-->
        <div class="bottomHeader" style="border-color: #B70014; border-bottom-style: solid; border-width:3px">
                <!--<div class="topMargin">-->
                <!--Image as home page link-->
                <ul>
                 <div class="col-md-3">
                    <a href={{route("home")}}>
                        <img class="logo" alt="Clem Jones Centre for Neurobiology and Stem Cell Research" src="{{ URL::to('/') }}/images/websiteLogo.png" height="130px" width="130px"/>                
                    </a>
                    <br>
                    <a href={{route("home")}}>
                        <h1 class="headerTitle">Spinal Cord Injury <br><span class="rehab">Rehabilitation</span></h1>
                    </a>
                 </div>
                 <div class="col-md-2">
                    <br><br>
                 </div>
                 <div class="col-md-2">
                    <br><br>
                 </div>
                 <div class="col-md-1">
                    <li class="bottomLink"><a href={{{ route("about.us")}}}>ABOUT</a></li>
                 </div>
                 <div class="col-md-1">
                    <li style:"float:right" class="bottomLink"><a href={{{ route("faq")}}}>FAQ</a></li>
                 </div>
                 <div class="col-md-2">
                    <li style:"float:right" class="bottomLink"><a href={{{ route("abstract.module") }}}>MODULE ABSTRACTS</a></li>
                 </div>
                 <div class="col-md-1">
                    <li style:"float:right" class="bottomLink"><a href={{{ route("contact.us")}}}>CONTACT</a></li>
                 </div>
                </ul>
            <!--</div>-->
        </div>
        
        <!--<div class="bottomHeader">-->
            <!--Image as home page link-->
        <!--    <ul>-->
        <!--     <a href={{route('home')}}>-->
        <!--         <img class="logo" alt="Clem Jones Centre for Neurobiology and Stem Cell Research" src="images/clemjones_Logo.png" height="130px" width="100px"/>-->
        <!--     </a>-->
        <!--      <br>-->
        <!--      <h1 id="headerTitle">Spinal Cord Injury<br><span id="rehab">Rehabilitation</span></h1>-->
        <!--      <li style="float:right" class="bottomLink"><a href="contactUs">CONTACT</a></li>-->
        <!--      <li style="float:right" class="bottomLink"><a href="abstractModule">MODULE ABSTRACTS</a></li>-->
        <!--      <li style="float:right" class="bottomLink"><a href="faq">FAQ</a></li>-->
        <!--      <li style="float:right" class="bottomLink"><a href="aboutUs">ABOUT</a></li>-->
        <!--    </ul>-->
        <!--</div>-->
        
</header>