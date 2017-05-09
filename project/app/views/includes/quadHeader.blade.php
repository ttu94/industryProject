<header>
        <!-- Top section of header -->
      <div class="topHeader">
            <!--Search Bar -->
        <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
                <a href="search"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a>
            </div>
        </form>
            <ul>
                @if(Auth::check())
                    <li style="float:right" class="topLink"><a href="user/logout" >LOGOUT</a></li>
                    <!--FAKE USER PAGE BUTTOn-->
                    <li style="float:right" class="topLink"><a href={{route("user.show", array("id" => Auth::user()->id))}}>MY PROFILE</a></li>
                @else
                    <!--FAKE Logout BUTTOn-->
                    <li style="float:right" class="topLink"><a href="home" >LOGOUT</a></li>
                    <!--FAKE USER PAGE BUTTOn-->
                    <li style="float:right" class="topLink"><a href="userProfilePage">MY PROFILE</a></li>
                @endif
            </ul>

        </div>
        
        <!--SECOND SECTION OF HEADER-->
        <div class="bottomHeader">
            <!--Image as home page link-->
            <ul>
             <a href={{route("home")}}>
                    <img class="logo" alt="Clem Jones Centre for Neurobiology and Stem Cell Research" src="{{ URL::to('/') }}/images/clemjones_Logo.png" height="130px" width="100px"/>                
             </a>
              <h1 id="headerTitle">Spinal Cord Injury <br><span id="rehab">Rehabilitation</span></h1>
              <li style="float:right" class="bottomLink"><a href="contactUs">CONTACT</a></li>
              <li style="float:right" class="bottomLink"><a href="abstractModule">ABSTRACT MODULES</a>
              </li>
              <li style="float:right" class="bottomLink"><a href="faq">FAQ</a></li>
              <li style="float:right" class="bottomLink"><a href="aboutUs">ABOUT</a></li>
            </ul>
        </div>
        
        <!--THIRD SECTION OF HEADER-->
        <div class="tripleHeader">
            <h2 class="pageTitle">@yield('pageTitle')</h2>
        </div>
        
        <!--FORTH SECTION OF HEADER-->
        <div class="quadLink">
            <ul>
                <li class="eduMod" style="width:33%"><a href={{route("education.modules")}}>EDUCATIONAL MODULES</a></li>
                <li class="eduMod" style="width:33%"><a href="#">SEE RESULTS</a></li>
                <li class="eduMod" style="width:33%"><a href="accountDetails">ACCOUNT DETAILS</a></li>
            </ul>
        </div>
        
</header>