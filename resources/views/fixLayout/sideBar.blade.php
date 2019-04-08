
  <!-- Side Navbar -->

  <nav class="side-navbar">
    <div class="side-navbar-wrapper">
      <!-- Sidebar Header    -->
      <div class="sidenav-header d-flex align-items-center justify-content-center">
        <!-- User Info-->
        <div class="sidenav-header-inner text-center"><img src="{{ asset('external/img/avatar-1.jpg') }}" alt="person" class="img-fluid rounded-circle">
          <h2 class="h5">{{ Auth::user()->name }}</h2><span>Web Developer</span>
        </div>
        <!-- Small Brand information, appears on minimized sidebar-->
          <div class="sidenav-header-logo">
            <a href="{{ url('home') }}" class="brand-small text-center"> 
                <strong>P</strong><strong class="text-primary">S</strong>
              </a>
          </div>
      </div>
      <!-- Sidebar Navigation Menus-->
      <div class="main-menu">
        <h5 class="sidenav-heading">Main</h5>
        <ul id="side-main-menu" class="side-menu list-unstyled">                  
          <li><a href="{{ url('home') }}"> <i class="fas fa-tachometer-alt"></i>Home</a></li>
          <li><a href="{{ url('NewProperty') }}"> <i class="fas fa-cloud-upload-alt"></i>New Property</a></li>
          <li><a href="{{ url('PropertyList') }}"> <i class="fas fa-th-list"></i>Property List</a></li>
          <li><a href="{{ url('agent') }}"> <i class="fas fa-user-tie"></i>Agents</a></li>
        </ul>
      </div>
    </div>
  </nav>
