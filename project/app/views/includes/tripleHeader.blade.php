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
                <li style="float:right" class="topLink"><a href="user/logout" >LOGOUT</a></li>
                <li style="float:right" class="topLink"><a href={{route("user.show", array("id" => Auth::user()->id))}}>MY PROFILE</a></li>
            </ul>
        @else
            <ul>
                <li style="float:right" class="topLink"><a href="login">LOGIN</a></li>
                <li style="float:right" class="topLink"><a href="register">REGISTER</a></li>
            </ul>
        @endif
    </div>
        
    <!--bottom section of header-->
    <nav class="navbar navbar-default navbar-static-top basicFontStyle" style="margin-bottom:0px">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar" style="width:45px">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href={{route("home")}}>
                <img class="navbar-brand" style="height:130px" alt="Clem Jones Centre for Neurobiology and Stem Cell Research" src="{{ URL::to('/') }}/images/websiteLogo.png" height="130px" width="130px"/>
            </a>
            <a class="navbar-brand "href={{route("home")}}>
                <h1 class="headerTitle">Spinal Cord Injury <br><span class="rehab">Rehabilitation</span></h1>
            </a>
        </div>
        
        <div id="navbar" class="navbar-collapse collapse" style="padding:40px 70px 5px 20px">
            <ul class="nav navbar-nav navbar-right bottomLink" >
                <li><a style="color:black" onMouseOver="this.style.color='#B70014'" onMouseOut="this.style.color='black'" href={{{ route("about.us")}}}>ABOUT <span class="sr-only">(current)</span></a></li>
                <li><a style="color:black" onMouseOver="this.style.color='#B70014'" onMouseOut="this.style.color='black'" href={{{ route("faq")}}}>FAQ</a></li>
                <li><a style="color:black" onMouseOver="this.style.color='#B70014'" onMouseOut="this.style.color='black'" href={{{ route("abstract.module") }}}>MODULE ABSTRACTS</a></li>
                <li><a style="color:black" onMouseOver="this.style.color='#B70014'" onMouseOut="this.style.color='black'" href={{{ route("contact.us")}}}>CONTACT</a></li>
            </ul> 
        </div>
    </nav>
        
    <div class="tripleHeader">
        <h2 class="pageTitle">@yield('pageTitle')</h2>
    </div>
    @if(Auth::check())
        <!--FORTH SECTION OF HEADER-->
        <div class="fourthHeader">
            <ul>
                <div class="col-md-1 col-xs-1">
                    <br>
                </div>
                <div class="col-md-3 col-xs-3">
                    <li class="fourthLink"><a href={{ route("education_modules", array("id" => Auth::user()->id)) }}>EDUCATIONAL MODULES</a></li>
                </div>
                <div class="col-md-4 col-xs-4">
                    <li class="fourthLink"><a href={{ route("overall_results", array("id" => Auth::user()->id)) }}>SEE RESULTS</a></li>
                </div>
                <div class="col-md-3 col-xs-3">
                    <li class="fourthLink"><a href={{ route("account_details", array("id" => Auth::user()->id)) }}>ACCOUNT DETAILS</a></li>
                </div>
                <div class="col-md-1 col-xs-1">
                    <br>
                </div>
            </ul>
        </div>
    @endif
</header>