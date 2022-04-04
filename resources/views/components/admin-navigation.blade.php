<div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
      <div class="nano">
        <div class="nano-content">
          <ul>
            <div class="logo">
              <a href="index.html">
                <!-- <img src="assets/images/logo.png" alt="" /> --><span
                  >DOCTIME</span
                ></a
              >
            </div>
            <li class="label">Main</li>
            <li>
              <a href="appointment"
                ><i class="ti-calendar"></i>Upcoming Appointment</a
              >
            </li>
            <li>
              <a href="all-appointment"
                ><i class="ti-calendar"></i>All Appointments</a
              >
            </li>
            <li>
              <a href="patients"><i class="ti-face-sad"></i>Patients</a>
            </li>
            <li>
              <a href="user"><i class="ti-user"></i> User</a>
            </li>
            <li>
              <a href="chamber"><i class="ti-user"></i> Chamber</a>
            </li>

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
          </ul>
        </div>
      </div>
    </div>
    <!-- /# sidebar -->

    <div class="header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="float-left">
              <div class="hamburger sidebar-toggle">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
              </div>
            </div>
            <div class="float-right">
              <div class="dropdown dib">
                <div class="header-icon" data-toggle="dropdown">
                  <div></div>
                  <span class="user-avatar">
                    John
                    <i class="ti-angle-down f-s-10"></i>
                  </span>
                  <div
                    class="drop-down dropdown-profile dropdown-menu dropdown-menu-right"
                  >
                    <div class="dropdown-content-body">
                      <ul>
                        <li>
                          <a href="#">
                            <i class="ti-user"></i>
                            <span>Profile</span>
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <i class="ti-power-off"></i>
                            <span>Logout</span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>