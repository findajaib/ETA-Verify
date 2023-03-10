      <aside class="main-sidebar sidebar-light-primary ">
          <!-- Brand Logo -->
          <a href="/" class="brand-link bg-lightblue">
              <img src="{{ asset('assets/img/logoju.png') }}" alt="JU Logo" class="brand-image img-circle elevation-3"
                  style="opacity: 0.8" />
              <span class="brand-text text-dark">ETA Verify</span>
          </a>

          <!-- Sidebar -->
          <div class="sidebar">
              <!-- Sidebar user panel (optional) -->
              <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                  <div class="image">
                      <img src="{{ asset('assets/img/user_default.jpg') }}" class="img-circle elevation-2"
                          alt="User Image" />
                  </div>
                  <div class="info">
                      <a href="#" class="d-block">{{ Auth::user()?->name }}</a>
                  </div>
              </div>

              <!-- Sidebar Menu -->
              <nav class="mt-2">
                  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                      data-accordion="false">
                      <li class="nav-item">
                          <a href="" class="nav-link">
                              <i class="nav-icon fas fa-tachometer-alt"></i>
                              <p>
                                  Dashboard
                              </p>
                          </a>
                      </li>


                      <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                  </ul>
              </nav>
              <!-- /.sidebar-menu -->
          </div>
          <!-- /.sidebar -->
      </aside>
