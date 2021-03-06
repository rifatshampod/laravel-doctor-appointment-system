<!DOCTYPE html>
<html lang="en">
  <x-admin-asset/>

  <body>
    <x-admin-navigation/>

    <div class="content-wrap">
      <div class="main">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-lg-8 p-r-0 title-margin-right">
              <div class="page-header">
                <div class="page-title">
                  <h1>Single Patient</h1>
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
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <div class="card">
                  <div>
                    <div class="row mb-4">
                      <div class="col-lg-4">
                        <div>
                          <h5>Name</h5>
                          <p>{{$patient->name}}</p>
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div>
                          <h5>Email</h5>
                          <p>{{$patient->email}}</p>
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div>
                          <h5>Phone</h5>
                          <p>{{$patient->phone}}</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="bootstrap-data-table-panel">
                      <div class="mb-4">
                          <h5>Appointment History</h5>
                      </div>
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
                            <th>Symptoms</th>
                            <th>Status</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($appointments as $item)
                              <tr>
                            <td>{{$item['id']}}</td>
                            <td>{{$item['date']}}</td>
                            <td>{{$item['time']}}</td>
                            <td>{{$item['symptoms']}}</td>
                            <td>
                                @if($item['status']==0)
                              <div
                                class="tableStatus bg-cl-light-yellow d-flex justify-content-center align-items-center"
                              >

                                <span class="fw-bold ">Pending</span>
                              </div>
                              @endif

                              @if($item['status']==1)
                              <div
                                class="tableStatus bg-cl-light-green d-flex justify-content-center align-items-center"
                              >
                                <span class="fw-bold">Approved</span>
                              </div>
                              @endif

                              @if($item['status']==2)
                              <div
                                class="tableStatus bg-cl-light-red d-flex justify-content-center align-items-center"
                              >
                                <span class="fw-bold">Reject</span>
                              </div>
                              @endif
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
    <x-script-component/>
  </body>
</html>
