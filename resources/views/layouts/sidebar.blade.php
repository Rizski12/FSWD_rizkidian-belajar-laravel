<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <img src="{{ asset('dist/img/AdminLTELogo.png')  }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('assets/images/rizki1.jpg')  }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
          @if(Auth::user()->group_id == 1)
              <small class="text-muted">{{ 'Super Admin' }}</small>
          @elseif(Auth::user()->group_id == 2)
              <small class="text-muted">{{ 'Seller' }}</small>
          @elseif(Auth::user()->group_id == 3)
              <small class="text-muted">{{ 'Admin Products' }}</small>
          @else
              <small class="text-muted">{{ 'User' }}</small>
          @endif
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="{{ route('dashboard') }}" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                  <i class="fas fa-angle-right right"></i>
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('biodata') }}" class="nav-link">
                <i class="nav-icon fas fa-user"></i>
                <p>
                  Profile
                  <i class="fas fa-angle-right right"></i>
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('products') }}" class="nav-link">
                <i class="nav-icon fas fa-box"></i>
                <p>
                  Product
                  <i class="fas fa-angle-right right"></i>
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('crud.index') }}" class="nav-link">
                <i class="nav-icon fas fa-cube"></i>
                <p>
                  Crud Product
                  <i class="fas fa-angle-right right"></i>
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('users.index') }}" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                  Users
                  <i class="fas fa-angle-right right"></i>
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('logout') }}" onclick="event.preventDefault(); logoutConfirmation();" class="nav-link">
                <i class="nav-icon 	fas fa-sign-out-alt"></i>
                <p>
                  Logout
                  <i class="fas fa-angle-right right"></i>
                </p>
              </a>
            </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>