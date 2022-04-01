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
                  <h1>All Patients</h1>
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
                            
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($patientlist as $item)
                              <tr>
                            
                            <td>{{$item['name']}}</td>
                            <td>{{$item['phone']}}</td>
                            <td>{{$item['email']}}</td>
                            <td>
                              <div class="employeeTableIcon d-flex">
                                <div
                                  class="employeeTableIconDiv Icon1 d-flex justify-content-center align-items-center mr-1"
                                  onclick="location.href='singlePatient.html'"
                                >
                                  <i class="ti-eye"></i>
                                </div>
                                <div
                                  class="employeeTableIconDiv Icon2 d-flex justify-content-center align-items-center mr-1"
                                >
                                  <i class="ti-trash"></i>
                                </div>
                                <div
                                  class="employeeTableIconDiv Icon3 d-flex justify-content-center align-items-center mr-1"
                                >
                                  <i class="ti-pencil-alt"></i>
                                </div>
                              </div>
                            </td>
                          </tr>
                          @endforeach
                          
                          
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
