<section class="banner" role="banner">
  <header id="header">
    <div class="header-content clearfix"> 
<a href="/"><img src="images/jobkart1.png" alt="Logo" height="60" class="logo"></a>
  
    <nav class="navigation" role="navigation">
        <ul class="primary-nav">
          <li><a href="/#intro">About</a></li>
          <li><a href="/#services">Browse Jobs</a></li>
          <li><a href="/#works">Companies</a></li>
          <li><a href="/#teams">Our Team</a></li>
          <li><a href="/#testimonials">Testimonials</a></li>
          <li><a href="/#contact">Contact</a></li>
          @if(Auth::guard('web')->check())
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">{{ Auth::user()->name }} <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                              Logout and go
                                          </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </li>
          @elseif(Auth::guard('jobseeker')->check())
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">{{ Auth::guard('jobseeker')->user()->name }} <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li>
                    <a href="{{ route('jobseeker.dashboard') }}">
                                              My Dashboard
                                          </a>
                  </li>
                  <li>
                    <a href="{{ route('jobseeker.logout') }}" onclick="event.preventDefault();document.getElementById('logout-form-jobseeker').submit();">
                                              Logout
                                          </a>
                        <form id="logout-form-jobseeker" action="{{ route('jobseeker.logout') }}" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </li>
          @elseif(Auth::guard('jobprovider')->check())
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">{{ Auth::guard('jobprovider')->user()->name }} <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li>
                    <a href="{{ route('jobprovider.dashboard') }}">
                                              My Dashboard
                                          </a>
                  </li>
                  <li>
                    <a href="{{ route('jobprovider.logout') }}" onclick="event.preventDefault();document.getElementById('logout-form-jobprovider').submit();">
                                              Logout
                                          </a>
                        <form id="logout-form-jobprovider" action="{{ route('jobprovider.logout') }}" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </li>
          @else
            <li><a href="{{ route('logincustom') }}">Login</a></li>
            <li><a href="{{ route('registercustom') }}">Register</a></li>
          @endif
        </ul>
      </nav>
      <a href="#" class="nav-toggle">Menu<span></span></a> </div>
  </header>