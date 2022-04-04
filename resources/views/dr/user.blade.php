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
                  <h1>User</h1>
                </div>
              </div>
            </div>
            <!-- /# column -->
            <div class="col-lg-4 p-l-0 title-margin-left">
              <div class="page-header">
                <div class="page-title">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                    <li class="breadcrumb-item active">User</li>
                  </ol>
                </div>
              </div>
            </div>
            <!-- /# column -->
          </div>
          <!-- /# row -->
          <section id="main-content">
            <div class="row">
              <div class="col-lg-6">
              <div class="card">
                <form method="POST" action="createuser">
                  @csrf
                    <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control input-default" placeholder="Name" required>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control input-default" placeholder="Email" required>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control input-default @error('password') is-invalid @enderror" placeholder="password" required>
                        </div>
                    </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-3">
                            <button type="submit" class="btn btn-primary btn-block m-b-10">Submit</button>
                        </div>
                    </div>
                </form>
              </div>
              </div>
              <div class="col-lg-6">
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
                            <th>Name</th>
                            <th>Email</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($userlist as $item)
                              <tr>
                            <td>{{$item['id']}}</td>
                            <td>{{$item['name']}}</td>
                            <td>{{$item['email']}}</td>
                            <td>
                                <div class="employeeTableIcon d-flex">
                                    <div class="employeeTableIconDiv Icon1 d-flex justify-content-center align-items-center mr-1" onclick="location.href='profile.html'" onclick="location.href='profile.html'">
                                        <i class="ti-eye"></i>
                                    </div>
                                    <div class="employeeTableIconDiv Icon2 d-flex justify-content-center align-items-center mr-1" data-toggle="modal" data-target="#deleteModal">
                                        <i class="ti-trash"></i>
                                    </div>
                                    <div class="employeeTableIconDiv Icon3 d-flex justify-content-center align-items-center mr-1" >
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
            <!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="py-5">
        <div class=" d-flex justify-content-center mb-3">
          <h5 class="modal-title" id="exampleModalLongTitle">Are you sure you want to delete?</h5>
        </div>
        <div class="d-flex justify-content-center">
        <button type="button" class="btn btn-secondary px-5 mx-2" data-dismiss="modal">No</button>
        <button type="button" class="btn btn-danger px-5 mx-2">Yes</button>
      </div>
      </div>
    </div>
  </div>
</div>
      
    </div>

    <x-script-component/>
  </body>
</html>