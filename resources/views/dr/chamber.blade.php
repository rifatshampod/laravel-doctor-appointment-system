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
                  <h1>All Chamber</h1>
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
                            <th>Address</th>
                            <th>Time</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($chamberlist as $item)
                              <tr>
                            <td>{{$item['name']}}</td>
                            <td>{{$item['phone']}}</td>
                            <td>{{$item['address']}}</td>
                            <td>{{$item['time']}}</td>
                            <td>
                              <div class="employeeTableIcon">
                                
                                <div
                                  class="employeeTableIconDiv Icon3 d-flex justify-content-center align-items-center mr-1"
                                data-toggle="modal" data-target="#modalEdit">
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
      <!-- Modal Edit -->
<div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <form action="">
          <div class="row justify-content-center">
            <div class="col-lg-12">
              <h5 class="text-center">Edit Chamber</h5>
            </div>
            <div class="col-lg-6">
            <div class="form-group">
            <input type="text" name="name" class="form-control input-default" placeholder="Name" required>
            </div>
            </div>
            <div class="col-lg-6">
            <div class="form-group">
            <input type="number" name="name" class="form-control input-default" placeholder="Phone" required>
            </div>
            </div>
            <div class="col-lg-6">
            <div class="form-group">
            <input type="text" name="name" class="form-control input-default" placeholder="Address" required>
            </div>
            </div>
            <div class="col-lg-6">
            <div class="form-group">
            <input type="text" name="name" class="form-control input-default" placeholder="Time" required>
            </div>
            </div>
          </div>
            <div class="d-flex justify-content-center">
              <button type="submit" class="border-0 px-4 py-2 rounded bg-primary text-white" style="cursor: pointer;">Submit</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
    </div>
    <x-script-component/>
  </body>
</html>
