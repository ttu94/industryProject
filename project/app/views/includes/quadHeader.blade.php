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
        <ul>
            @if(Auth::check())
                <li style="float:right" class="topLink"><a href={{route("user.logout")}} >LOGOUT</a></li>
                <li style="float:right" class="topLink"><a href={{route("user.show", array("id" => Auth::user()->id)) }}>MY PROFILE</a></li>
                @if (Auth::user()->status == 1)
                    <li style="float:right" class="topLink"><a href={{route("admin.homepage", array("id" => Auth::user()->id))}}>ADMIN HOMEPAGE</a></li>
                @endif
            @else
                <li style="float:right" class="topLink"><a href="home" >LOGOUT</a></li>
                <li style="float:right" class="topLink"><a href="userProfilePage">MY PROFILE</a></li>
            @endif
        </ul>
    </div>
        
    <!--SECOND SECTION OF HEADER-->
    <nav class="navbar navbar-default navbar-static-top basicFontStyle" style="margin-bottom:0px">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar" style="width:45px">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href={{route("home")}}>
                <img class="navbar-brand" style="height:150px;width:400px" alt="Clem Jones Centre for Neurobiology and Stem Cell Research" src="{{ URL::to('/') }}/images/siteLogo.png"/>
            </a>
        </div>
        
        <div id="navbar" class="navbar-collapse collapse" style="padding:50px 70px 5px 20px">
            <ul class="nav navbar-nav navbar-right bottomLink" >
                <li><a style="color:black" onMouseOver="this.style.color='#B70014'" onMouseOut="this.style.color='black'" href={{{ route("about.us")}}}>ABOUT <span class="sr-only">(current)</span></a></li>
                <li><a style="color:black" onMouseOver="this.style.color='#B70014'" onMouseOut="this.style.color='black'" href={{{ route("faq")}}}>FAQ</a></li>
                <li><a style="color:black" onMouseOver="this.style.color='#B70014'" onMouseOut="this.style.color='black'" href={{{ route("abstract.module") }}}>MODULE ABSTRACTS</a></li>
                <li><a style="color:black" onMouseOver="this.style.color='#B70014'" onMouseOut="this.style.color='black'" href={{{ route("contact.us")}}}>CONTACT</a></li>
            </ul> 
        </div>
    </nav>
        
    <!--THIRD SECTION OF HEADER-->
    <div class="tripleHeader">
        <h2 class="pageTitle">@yield('pageTitle')</h2>
    </div>
    
    <!--FORTH SECTION OF HEADER-->
    <div class="fourthHeader">
        <div class="topMargin">
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
    </div>
</header>