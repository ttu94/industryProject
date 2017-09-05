<header>
    <!-- Top section of header -->
    <!--Top header changes depending if user is logged in and/or an admin-->
    <div class="topHeader">
        @if (Auth::check())
            <ul>
                <li style="float:right" class="topLink"><a href="user/logout" >LOGOUT</a></li>
                <li style="float:right" class="topLink"><a href={{route("user.show", array("id" => Auth::user()->id))}}>MY PROFILE</a></li>
                @if (Auth::user()->admin == 1)
                    <li style="float:right" class="topLink"><a href={{route("admin.homepage", array("id" => Auth::user()->id))}}>ADMIN HOMEPAGE</a></li>
                @endif
            </ul>
        @else
            <ul>
                <li style="float:right" class="topLink"><a href="login">LOGIN</a></li>
                <li style="float:right" class="topLink"><a href="register">REGISTER</a></li>
            </ul>
        @endif
    </div>
        
    <!--Section section of header-->
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
    
    <!--Triple section of header-->
    <div class="tripleHeader">
        <h2 class="pageTitle">@yield('pageTitle')</h2>
    </div>
    
</header>