<div class="container-scroller">
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        {{-- <a class="sidebar-brand brand-logo" href="index.html"><img src="assets/images/logo.svg" alt="logo" /></a> --}}
        <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
      </div>
      <ul class="nav">
        
        <li class="nav-item nav-category">
          <span class="nav-link">Navigation</span>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="{{url('/users')}}">
            <span class="menu-icon">
              <i class="mdi mdi-account"></i>
            </span>
            <span class="menu-title">Users</span>
          </a>
        </li>
        
        <li class="nav-item menu-items">
          <a class="nav-link" href="{{url('/foodmenu')}}">
            <span class="menu-icon">
              <i class="mdi mdi-food"></i>
            </span>
            <span class="menu-title">FoodMenu</span>
          </a>
        </li>
      
        <li class="nav-item menu-items">
          <a class="nav-link" href="{{url('/viewreservation')}}">
            <span class="menu-icon">
              <i class="mdi mdi-calendr-check"></i>
            </span>
            <span class="menu-title">Reservations</span>
          </a>
        </li>




        <li class="nav-item menu-items">
          <a class="nav-link" href="{{url('/orders')}}">
            <span class="menu-icon">
              <i class="mdi mdi-receipt"></i>
            </span>
            <span class="menu-title">Orders</span>
          </a>
        </li>
        
      </ul>
    </nav>
</div>
      