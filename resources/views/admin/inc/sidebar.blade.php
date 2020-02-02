  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('admin.home')}}" class="brand-link">
      <img src="{{asset('admin')}}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
    <span class="brand-text font-weight-light text-uppercase">{{config('app.name', 'Laravel')}}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
       
        <ul class="nav nav-pills nav-sidebar flex-column nav-legacy nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="{{route('admin.home')}}" class="nav-link {{Request::is('admin') ? 'active' : ''}}">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Dashboard
                    </p>
                </a>
            </li>
            <li class="nav-item has-treeview {{Request::is('admin/categories') || Request::is('admin/categories/*') ? 'menu-open' : ''}}">
              <a href="#" class="nav-link {{Request::is('admin/categories') || Request::is('admin/categories/*') ? 'active' : ''}}">
                <i class="nav-icon fas fa-list"></i>
                <p>
                  Categories
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('admin.categories.create')}}" class="nav-link {{Request::is('admin/categories/create') ? 'active' : ''}}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Create Categories</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link {{Request::is('admin/categories') || Request::is('admin/categories/*/edit') ? 'active' : ''}}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Manage Categories</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item has-treeview {{Request::is('admin/products') || Request::is('admin/products/*') ? 'menu-open' : ''}}">
              <a href="#" class="nav-link {{Request::is('admin/products') || Request::is('admin/products/*') ? 'active' : ''}}">
                <i class="nav-icon fas fa-cubes"></i>
                <p>
                  Products
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" class="nav-link {{Request::is('admin/products/create') ? 'active' : ''}}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Create Product</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link {{Request::is('admin/products') || Request::is('admin/products/*/edit') ? 'active' : ''}}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Manage Products</p>
                  </a>
                </li>
              </ul>
            </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Simple Link
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
