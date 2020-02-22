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
            <li class="nav-item">
              <a href="{{route('admin.categories.index')}}" class="nav-link {{Request::is('admin/categories') || Request::is('admin/categories/*') ? 'active' : ''}}">
                <i class="nav-icon fas fa-list"></i>
                <p>
                  Categories
                </p>
              </a>
            </li>
            <li class="nav-item has-treeview {{Request::is('admin/products') || Request::is('admin/products/*') ? 'menu-open' : ''}}">
                <a href="" class="nav-link {{Request::is('admin/products') || Request::is('admin/products/*') ? 'active' : ''}}">
                <i class="nav-icon fas fa-cubes"></i>
                <p>
                  Products
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route("admin.products.create")}}" class="nav-link {{Request::is('admin/products/create') ? 'active' : ''}}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Create Product</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route("admin.products.index")}}" class="nav-link {{Request::is('admin/products') || Request::is('admin/products/*/edit') ? 'active' : ''}}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Manage Products</p>
                  </a>
                </li>
              </ul>
            </li>

            {{-- Pages Section --}}
            <li class="nav-item has-treeview {{Request::is('admin/pages') || Request::is('admin/pages/*') ? 'menu-open' : ''}}">
              <a href="#" class="nav-link {{Request::is('admin/pages') || Request::is('admin/pages/*') ? 'active' : ''}}">
                <i class="nav-icon fas fa-file-alt"></i>
                <p>
                    Pages
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('admin.about-us.index')}}" class="nav-link {{Request::is('admin/pages/about-us') ? 'active' : ''}}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>About Us</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link {{Request::is('admin/demo') || Request::is('admin/demo /*/edit') ? 'active' : ''}}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Contact Us</p>
                  </a>
                </li>
              </ul>
            </li>
            {{-- End Pages Section --}}

            {{-- Blog Section --}}
            <li class="nav-item has-treeview {{Request::is('admin/posts') || Request::is('admin/posts/*') ? 'menu-open' : ''}}">
              <a href="#" class="nav-link {{Request::is('admin/posts') || Request::is('admin/posts/*') ? 'active' : ''}}">
                <i class="nav-icon fas fa-comments"></i>
                <p>
                    Posts
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('admin.posts.create')}}" class="nav-link {{Request::is('admin/posts/create') ? 'active' : ''}}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Create Post</p>
                  </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.posts.index')}}" class="nav-link {{Request::is('admin/posts') || Request::is('admin/posts/*/edit') ? 'active' : ''}}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Manage Posts</p>
                  </a>
                </li>
              </ul>
            </li>
            {{-- Eng Blog Section --}}

            {{-- Settings Section --}}
            <li class="nav-item has-treeview {{Request::is('admin/company') || Request::is('admin/our-customers') || Request::is('admin/our-customers/*') ? 'menu-open' : ''}}">
              <a href="#" class="nav-link {{Request::is('admin/company') || Request::is('admin/our-customers') || Request::is('admin/our-customers/*') ? 'menu-open' : ''}} ? 'active' : ''}}">
                <i class="nav-icon fas fa-cogs"></i>
                <p>
                    Settings
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('admin.company.details')}}" class="nav-link {{Request::is('admin/company') ? 'active' : ''}}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Company</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('admin.our-customers.index')}}" class="nav-link {{Request::is('admin/our-customers') || Request::is('admin/our-customers/*/edit') ? 'active' : ''}}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Our Customers</p>
                  </a>
                </li>
              </ul>
            </li>
            {{-- Settings Section --}}

            {{-- Slider Section --}}
            <li class="nav-item has-treeview {{Request::is('admin/sliders/*') ? 'menu-open' : ''}}">
                <a href="#" class="nav-link {{Request::is('admin/sliders/*') ? 'active' : ''}}">
                  <i class="nav-icon fas fa-image"></i>
                  <p>
                      Sliders
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                      <a href="{{route('admin.slider.home.index')}}" class="nav-link {{Request::is('admin/sliders/home') ? 'active' : ''}}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Home Slider</p>
                    </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{route('admin.posts.index')}}" class="nav-link {{Request::is('admin/posts') || Request::is('admin/posts/*/edit') ? 'active' : ''}}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Manage Posts</p>
                    </a>
                  </li>
                </ul>
              </li>
            {{-- End Carousel --}}

            {{-- Feature Section --}}
            <li class="nav-item">
              <a href="{{route('admin.feature-section.index')}}" class="nav-link {{Request::is('admin/feature-section') ? 'active' : ''}}">
                <i class="nav-icon fas fa-award"></i>
                <p>
                  Featured
                </p>
              </a>
            </li>
            {{-- End Feature Section --}}

            {{-- Offer Section --}}
            <li class="nav-item">
              <a href="{{route('admin.offer-section.index')}}" class="nav-link {{Request::is('admin/offer-section') ? 'active' : ''}}">
                <i class="nav-icon fas fa-gift"></i>
                <p>
                  Offers
                </p>
              </a>
            </li>
            {{-- End Offer Section --}}

            {{-- Quote Section --}}

            {{-- End Quote Section --}}
            <li class="nav-item">
              <a href="{{route('admin.categories.index')}}" class="nav-link {{Request::is('admin/carousel') || Request::is('admin/carasouls/*') ? 'active' : ''}}">
                <i class="nav-icon fas fa-quote-right"></i>
                <p>
                  Testimonial
                </p>
              </a>
            </li>
            {{-- User Section --}}
            <li class="nav-item has-treeview {{Request::is('admin/demo') || Request::is('admin/demo/*') ? 'menu-open' : ''}}">
              <a href="#" class="nav-link {{Request::is('admin/settings') || Request::is('admin/settings/*') ? 'active' : ''}}">
                <i class="nav-icon fas fa-users"></i>
                <p>
                    Users
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" class="nav-link {{Request::is('admin/demo/create') ? 'active' : ''}}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Create User</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link {{Request::is('admin/demo') || Request::is('admin/demo /*/edit') ? 'active' : ''}}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Manage Users</p>
                  </a>
                </li>
              </ul>
            </li>
            {{-- User Section End --}}
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
