<header>
        <!-- Top section of header -->
      <div class="topHeader">
            <!--Search Bar -->
        <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
                <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
            </div>
        </form>
        <ul>
            <li style="float:right" class="topLink"><a href="register">REGISTER</a></li>
            <li style="float:right" class="topLink"><a href="login">LOGIN</a></li>
        </ul>
        </div>
        
        <div class="bottomHeader">
            <!--Image as home page link-->
            <ul>
             <a href="/project/public">
                    <img class="logo" alt="Clem Jones Centre for Neurobiology and Stem Cell Research" src="images/clemjones_Logo.png" height="130px" width="100px"/>                
             </a>
              <h1 id="headerTitle">Spinal Cord Injury <br><span id="rehab">Rehabilitation</span></h1>
              <li style="float:right" class="bottomLink"><a href="contactUs">CONTACT</a></li>
              <li style="float:right" class="bottomLink"><a href="abstractModule">ABSTRACT MODULES</a>
              </li>
              <li style="float:right" class="bottomLink"><a href="faq">FAQ</a></li>
              <li style="float:right" class="bottomLink"><a href="aboutUs">ABOUT</a></li>
            </ul>
        </div>
        
        <div class="tripleHeader">
            <h2 class="pageTitle">@yield('pageTitle')</h2>
        </div>
</header>