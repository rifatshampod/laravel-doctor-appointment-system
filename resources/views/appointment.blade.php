<!DOCTYPE html>
<html lang="en">
  <x-admin-asset/>

  <body>
    <x-admin-navigation/>

    <div class="content-wrap">
      <div class="main">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-8 p-r-0 title-margin-right">
              <div class="page-header">
                <div class="page-title">
                  <h1>All Appointment</h1>
                </div>
              </div>
            </div>
            <!-- /# column -->
            <!-- <div class="col-lg-4 p-l-0 title-margin-left">
              <div class="page-header">
                <div class="page-title">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                      <a href="index.html">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">All Delivery</li>
                  </ol>
                </div>
              </div>
            </div> -->
            <!-- /# column -->
          </div>
          <!-- /# row -->
          <section id="main-content">
            <div class="row">
              <div class="col-lg-12">
                <div class="card">
                  <div class="bootstrap-data-table-panel">
                    <div class="table-responsive">
                      <table
                        id="bootstrap-data-table-export"
                        class="table table-striped table-bordered"
                      >
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Client Name</th>
                            <th>Phone</th>
                            <th>Status</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td>04-05-2022</td>
                            <td>9.00 am</td>
                            <td>Bipu</td>
                            <td>01758871249</td>
                            <td>
                              <div
                                class="tableStatus bg-cl-light-yellow d-flex justify-content-center align-items-center"
                              >
                                <span class="fw-bold">Pending</span>
                              </div>
                            </td>
                            <td>
                              <div class="employeeTableIcon d-flex">
                                <div
                                  class="employeeTableIconDiv Icon1 d-flex justify-content-center align-items-center mr-1"
                                  onclick="location.href='profile.html'"
                                  onclick="location.href='profile.html'"
                                >
                                  <i class="ti-plus"></i>
                                </div>
                                <div
                                  class="employeeTableIconDiv Icon2 d-flex justify-content-center align-items-center mr-1"
                                >
                                  <i class="ti-trash"></i>
                                </div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>1</td>
                            <td>04-05-2022</td>
                            <td>9.00 am</td>
                            <td>Bipu</td>
                            <td>01758871249</td>
                            <td>
                              <div
                                class="tableStatus bg-cl-light-green d-flex justify-content-center align-items-center"
                              >
                                <span class="fw-bold">Approved</span>
                              </div>
                            </td>
                            <td>
                              <div class="employeeTableIcon d-flex">
                                <div
                                  class="employeeTableIconDiv Icon1 d-flex justify-content-center align-items-center mr-1"
                                  onclick="location.href='profile.html'"
                                  onclick="location.href='profile.html'"
                                >
                                  <i class="ti-plus"></i>
                                </div>
                                <div
                                  class="employeeTableIconDiv Icon2 d-flex justify-content-center align-items-center mr-1"
                                >
                                  <i class="ti-trash"></i>
                                </div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>1</td>
                            <td>04-05-2022</td>
                            <td>9.00 am</td>
                            <td>Bipu</td>
                            <td>01758871249</td>
                            <td>
                              <div
                                class="tableStatus bg-cl-light-red d-flex justify-content-center align-items-center"
                              >
                                <span class="fw-bold">Reject</span>
                              </div>
                            </td>
                            <td>
                              <div class="employeeTableIcon d-flex">
                                <div
                                  class="employeeTableIconDiv Icon1 d-flex justify-content-center align-items-center mr-1"
                                  onclick="location.href='profile.html'"
                                  onclick="location.href='profile.html'"
                                >
                                  <i class="ti-plus"></i>
                                </div>
                                <div
                                  class="employeeTableIconDiv Icon2 d-flex justify-content-center align-items-center mr-1"
                                >
                                  <i class="ti-trash"></i>
                                </div>
                              </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <!-- /# card -->
              </div>
              <!-- /# column -->
            </div>
            <!-- /# row -->
          </section>
        </div>
      </div>
    </div>
    <!-- jquery vendor -->
    <script src="assets/js/lib/jquery.min.js"></script>
    <script src="assets/js/lib/jquery.nanoscroller.min.js"></script>
    <!-- nano scroller -->
    <script src="assets/js/lib/menubar/sidebar.js"></script>
    <script src="assets/js/lib/preloader/pace.min.js"></script>
    <!-- sidebar -->
    <script src="assets/js/lib/bootstrap.min.js"></script>
    <script src="assets/js/scripts.js"></script>
    <!-- bootstrap -->
    <!-- bootstrap -->

    <script src="assets/js/lib/bootstrap.min.js"></script>
    <!-- scripit init-->
    <script src="assets/js/lib/data-table/datatables.min.js"></script>
    <script src="assets/js/lib/data-table/datatables-init.js"></script>
  </body>
</html>
