      <nav class="main-header navbar navbar-expand navbar-lightblue navbar-light">
          <!-- Left navbar links -->
          <ul class="navbar-nav">
              <li class="nav-item">
                  <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
              </li>
              <li class="nav-item d-none d-sm-inline-block">
                  <a href="index3.html" class="nav-link">Home</a>
              </li>

          </ul>

          <!-- Right navbar links -->
          <ul class="navbar-nav ml-auto">
              <!-- Messages Dropdown Menu -->

              <li class="nav-item dropdown"> <a class="nav-link" data-toggle="dropdown" href="#">
                      <i class="fas fa-language"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">

                      <form class="" id="language" action="/change/Locale/">
                          <div class="input-group input-group-sm">
                              <select name="lang" id="lang" class="form-control ">

                                  <option value="en" selected="">English</option>
                                  <option value="am">አማርኛ</option>
                                  <option value="or">Afaan Oromo</option>
                              </select>

                          </div>
                      </form>
                  </div>

              </li>
              <li class="nav-item dropdown">
                  <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="true">
                      <i class="fas fa-th-large"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right ">
                      <span class="dropdown-item dropdown-header">Setting</span>
                      <div class="dropdown-divider"></div>
                      <a href="/home" class="dropdown-item">
                          <i class="fas fa-user mr-2"></i>Profile
                      </a>
                      <div class="dropdown-divider"></div>
                  </div>

              </li>
              <li class="nav-item">
                  <form action="" id="logout_form" method="POST">
                      @csrf
                      <a href="#" class="nav-link"
                          onclick="event.preventDefault();document.getElementById('logout_form').submit();">
                          <i class="fa fa-sign-out-alt" aria-hidden="true"></i>Logout
                      </a>
                  </form>
              </li>


          </ul>
      </nav>
      <!-- /.navbar -->
