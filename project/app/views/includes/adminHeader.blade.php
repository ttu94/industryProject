<header>
    <!-- Top section of header -->
    <!--Top header changes depending if user is logged in and/or an admin-->
    <div class="topHeader">
        @if (Auth::check())
            <ul>
                <li style="float:right" class="topLink"><a href={{route("user.logout")}} >LOGOUT</a></li>
                <li style="float:right" class="topLink"><a href={{route("user.show", array("id" => Auth::user()->id)) }}>MY PROFILE</a></li>
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
    <nav class="navbar navbar-default navbar-static-top basicFontStyle" style="margin-bottom:19px">
        <div class="navbar-header" style="">
            <a href={{route("home")}}>
                <img class="navbar-brand" style="height:150px;width:400px" alt="Clem Jones Centre for Neurobiology and Stem Cell Research" src="{{ URL::to('/') }}/images/siteLogo.png"/>
            </a>
        </div>
        <div id="navbar" class="navbarstyle" style="padding:45px 200px 45px 20px;border-color:#B70014;height:158px">
            <ul class="nav navbar-nav navbar-right" >
                <li> @yield('pageTitle')</li>
            </ul> 
        </div>
    </nav>
</header>