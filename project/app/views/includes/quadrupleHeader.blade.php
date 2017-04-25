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
            <li style="float:right" class="topLink"><a href="/">LOGOUT</a></li>
            <li style="float:right" class="topLink"><a href="signIn">MY PROFILE</a></li>
            <li style="float:right" class="topLink"><a href="#">ACCOUNT DETAILS</a></li>
        </ul>
        </div>
        
        <div class="bottomHeader2">
            <ul>
              <li style="float:left;">
                  <a href="/project/public">
                      <img class="logo" alt="Clem Jones Centre for Neurobiology and Stem Cell Research" src="images/clemjones_Logo.png" />                
                  </a>
                  <h1 id="headerTitle">Spinal Cord Injury <br><span id="rehab">Rehabilitation</span></h1>
              </li>
              <li style="float:right" class="bottomLink2"><a href="#home">CONTACT</a></li>
              <li style="float:right" class="bottomLink2"><a>ABSTRACT MODULES</a></li>
              <li style="float:right" class="bottomLink2"><a href="#home">FAQ</a></li>
              <li style="float:right" class="bottomLink2"><a href="aboutUs">ABOUT</a></li>
            </ul>
            {{--
            <!--Image as home page link-->
            <a href="/project/public">
                <img class="logo" alt="Clem Jones Centre for Neurobiology and Stem Cell Research" src="images/clemjones_Logo.png" />                
            </a>
            
            <h1 id="headerTitle">Spinal Cord Injury <br><span id="rehab">Rehabilitation</span></h1>
            <ul>
              <li style="float:right" class="bottomLink2"><a href="contactUs">CONTACT</a></li>
              <li style="float:right" class="bottomLink2">
                <a>
                    EDUCATIONAL MODULES
                </a>
              </li>
              <li style="float:right" class="bottomLink2"><a href="#home">FAQ</a></li>
              <li style="float:right" class="bottomLink2"><a href="aboutUs">ABOUT</a></li>
            </ul> --}}
        </div>
        
        <div class="tripleHeader"> {{-- this is the yellow bar on the screen --}}
            <h2 class="pageTitle">@yield('pageTitle')</h2>
        </div>
</header>