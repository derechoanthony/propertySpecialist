<header class="header">
        <nav class="navbar">
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
                <div class="navbar-header">
                    <a id="toggle-btn" href="#" class="menu-btn">
                            <i class="fas fa-bars"> </i></a><a href="{{ url('home') }}" class="navbar-brand">
                        <div class="brand-text d-none d-md-inline-block">
                            <span>Property </span>
                            <strong class="text-primary">Specialist</strong>
                        </div>
                    </a>
                </div>
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                <!-- Notifications dropdown-->
                    
                <!-- Log out-->
                <li class="nav-item">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </header>