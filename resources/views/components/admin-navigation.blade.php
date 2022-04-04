<div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
      <div class="nano">
        <div class="nano-content">
          <ul>
            <div class="logo">
              <a href="/">
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
            <!--    log out code 
              <form id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit">Logout</button>
              </form> 
              --->
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
                <div class="header-icon">
                  <form id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="border-0 px-4 rounded bg-danger text-white" style="cursor: pointer;" type="submit">Logout</button>
              </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>