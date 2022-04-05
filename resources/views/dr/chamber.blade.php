<!DOCTYPE html>
<html lang="en">
  <x-admin-asset/>

  <body>
    <x-admin-navigation/>

    <div class="content-wrap">
      <div class="main">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
              @if (Session::get('status'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  {{Session::get('status')}}
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
            @endif
            </div>
            
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
                                
                                <button
                                value="{{$item['id']}}"
                                  class="employeeTableIconDiv editBtn Icon3 d-flex justify-content-center align-items-center mr-1"
                                >
                                  <i class="ti-pencil-alt"></i>
                              </button>
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
      <div class="modal fade" id="modalEdit" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-body">
              <form action="update-chamber" method="POST">
                @csrf
                @method('PUT')

                <input type="hidden" name="chamber_id" id="chamber_id" />
                <div class="row justify-content-center">
                  <div class="col-lg-12">
                    <h5 class="text-center">Edit Chamber</h5>
                  </div>
                  <div class="col-lg-6">
                  <div class="form-group">
                  <input type="text" name="name" id="name" class="form-control input-default" placeholder="Name" required>
                  </div>
                  </div>
                  <div class="col-lg-6">
                  <div class="form-group">
                  <input type="number" name="phone" id="phone" class="form-control input-default" placeholder="Phone" required>
                  </div>
                  </div>
                  <div class="col-lg-6">
                  <div class="form-group">
                  <input type="text" name="address" id="address" class="form-control input-default" placeholder="Address" required>
                  </div>
                  </div>
                  <div class="col-lg-6">
                  <div class="form-group">
                  <input type="text" name="time" id="time" class="form-control input-default" placeholder="Time" required>
                  </div>
                  </div>
                </div>
                  <div class="d-flex justify-content-center">
                    <button type="button" class="border-0 px-4 mx-2 py-2 rounded bg-danger text-white" style="cursor: pointer;">Cancel</button>
                    <button type="submit" class="border-0 px-4 mx-2 py-2 rounded bg-primary text-white" style="cursor: pointer;">Submit</button>
                  </div>
              </form>
            </div>
          </div>
        </div>
      </div>
  </div>
    
    

    <x-script-component/>
    
    <script>
      $(document).ready(function(){
        $(document).on('click', '.editBtn', function(){
          
          var chamber_id = $(this).val();
          console.log(chamber_id);
          jQuery.noConflict(); 
          $('#modalEdit').modal('show');

          $.ajax({
            url: '/edit-chamber' + chamber_id,
            type: "GET",
            success:function(response){
              console.log(response);
              $('#name').val(response.chamber.name);
              $('#phone').val(response.chamber.phone);
              $('#address').val(response.chamber.address);
              $('#time').val(response.chamber.time);
              $('#chamber_id').val(chamber_id);
            }
          });
        });
      });
    </script>
    
  </body>
</html>
