<header>
    <!-- Top section of header -->
    <div class="topHeader">
        <!--Search Bar -->
        <!--<form class="navbar-form navbar-left" role="search">-->
        <!--    <div class="form-group">-->
        <!--        <input type="text" class="form-control" placeholder="Search">-->
        <!--        <a href="search"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a>-->
        <!--    </div>-->
        <!--</form>-->
        <!--Top header changes depending if user is logged in or not-->
        @if (Auth::check())
            <ul>
                <li style="float:right" class="topLink"><a href={{route("user.logout")}} >LOGOUT</a></li>
                <li style="float:right" class="topLink"><a href={{route("admin.homepage", array("id" => Auth::user()->id))}}>ADMIN HOMEPAGE</a></li>
            </ul>
        @else
            <ul>
                <li style="float:right" class="topLink"><a href="login">LOGIN</a></li>
                <li style="float:right" class="topLink"><a href="register">REGISTER</a></li>
            </ul>
        @endif
    </div>
        
    <!--bottom section of header-->
    <div class="bottomHeader">
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
                @yield('pageTitle')
            </div>
            
            <div class="col-md-1">
                <!--<li class="bottomLink"><a href={{{ route("about.us")}}}>ABOUT</a></li>-->
                
            </div>
            
            <div class="col-md-1">
                <!--<li style:"float:right" class="bottomLink"><a href={{{ route("faq")}}}>FAQ</a></li>-->
            </div>
            
            <div class="col-md-2">
                <!--<li style:"float:right" class="bottomLink"><a href={{{ route("abstract.module") }}}>MODULE ABSTRACTS</a></li>-->
            </div>
            
            <div class="col-md-1">
                <!--<li style:"float:right" class="bottomLink"><a href={{{ route("contact.us")}}}>CONTACT</a></li>-->
            </div>
        </ul>
    </div>
    
    
</header>