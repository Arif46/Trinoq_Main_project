<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light"><a href="{{ url('/logout') }}">Logout</a></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
       
        <div class="info">
          <a href="{{url('/dashboard') }}" class="d-block">Dashboard</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
       
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Portfolio Web
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/PortfolioAdd') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Portfolio Web Add</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/Portfoliolist') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View  Web Portfolio</p>
                </a>
              </li>
              
            </ul>
          </li>
            <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Portfolio Mobile
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/MobilepageAdd') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Portfolio Mobile Add</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/MobileList') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View  Mobile Portfolio</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Portfolio UI
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/UipageAdd') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Portfolio UI Add</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/AllUiList') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All portfolio UI View</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Client Information
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/clientpageAdd') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Client information add</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/Allclient') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ALL Client information</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Testimonials
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/Testimonialpageadd') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Testimonials Add</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/AllTestimonial') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Testimonials</p>
                </a>
              </li>
             
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Trinoq Team
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/TeampageAdd') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Trinoq Member Add</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/AllMember') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Trinoq Member</p>
                </a>
              </li>
            
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Tables
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/tables/simple.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Simple Tables</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/data.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>DataTables</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/jsgrid.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>jsGrid</p>
                </a>
              </li>
            </ul>
          </li>
       
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>