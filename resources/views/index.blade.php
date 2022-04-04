<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Doctor Appointment</title>
    <link rel="icon" href="assets/image/fav.png" type="image/icon" />

    <!-- bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <!-- fontawesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/dycalendar.css" />
    <!-- Jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-----Bootstrap Bundle-->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </head>

  <body>
    <!-- Nav start -->
    <nav>
      <!--
      <div class="topHeader">
        <div class="container">
          <div class="d-flex justify-content-between align-items-center py-3">
            <div class="d-flex flex-wrap align-items-center">
              <div class="mx-2">
                <small class="fw-lighter cursor"
                  ><i class="far fa-envelope cl-pm me-2"></i
                  >info@gmail.com</small
                >
              </div>
              <div
                class="topHeadPhone d-flex align-items-center mx-2 bg-cl-green"
              >
                <small class="fw-lighter cursor"
                  ><i class="fas fa-phone-alt cl-pm me-2"></i
                  >+091-321654987</small
                >
              </div>
            </div>
            <div class="topSocial d-flex">
              <div
                class="topSocialIcon d-flex justify-content-center align-items-center cursor me-3"
              >
                <i class="fab fa-facebook-f cl-pm"></i>
              </div>
              <div
                class="topSocialIcon d-flex justify-content-center align-items-center cursor me-3"
              >
                <i class="fab fa-twitter cl-pm"></i>
              </div>
              <div
                class="topSocialIcon d-flex justify-content-center align-items-center cursor"
              >
                <i class="fab fa-instagram cl-pm"></i>
              </div>
            </div>
          </div>
        </div>
      </div>  -->
      <!-- Bottom Header-->
      <div class="bottomHeader" id="navbar">
        <div class="container">
          <nav class="navbar navbar-expand-xl navbar-light">
            <div class="container-fluid px-0 py-2">
              <div class="logo-img cursor">
                <img
                  src="assets/image/logo.png"
                  alt=""
                  onclick="window.location.href='index.html'"
                />
              </div>
              <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav"
                aria-controls="navbarNav"
                aria-expanded="false"
                aria-label="Toggle navigation"
              >
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                  <li class="nav-item navSignIn mx-1 px-3 mb-2">
                    <a class="nav-link text-white" href="#appointment"
                      >Appointment</a
                    >
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </nav>
    <!-- Nav end  -->
    <section class="hero">
      <div class="container">
        <div class="heroContent">
          <div>
            <h2 class="text-white mb-3">
              Book appointment to your nearest chamber
            </h2>
          </div>
          <div class="mb-3">
            <div class="row">
              <div class="col-lg-6">
                <div class="row my-4">
                  @foreach ($chamberlist as $item)
                      <div class="col-lg-6">
                    <div>
                      <h3 class="text-white">{{$item['name']}}</h3>
                    </div>
                    <div>
                      <small class="fs18 text-white">{{$item['address']}}</small>
                    </div>
                    <div>
                      <small class="fs18 text-white cursor" onclick="location.href='tel:{{$item['phone']}}'">{{$item['phone']}}</small>
                    </div>
                    <div>
                      <small class="fs18 text-white">{{$item['time']}}</small>
                    </div>
                  </div>
                  @endforeach
                  
                  
                </div>
              </div>
            </div>
          </div>
          <div>
            <p class="text-white mb-5">
              Call at any Time <br />
              <span class="fs20 fw-bold cursor">0960691144</span>
            </p>
          </div>
          <div class="heroButton d-flex">
            <div class="mb-3">
              <button class="bg-cl-deep-red text-white" onclick="location.href='#appointment'">
                Make a Appointment
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>   
    <section class="appointment py-5" id="appointment">
      <div class="container">
          @if (session('message'))
                <div class="alert alert-info">{{ session('message') }}</div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger">
                    <p><strong>Opps Something went wrong</strong></p>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        <div class="row justify-content-center">
          <div class="col-lg-6 mb-5">
            <section>
              <div class="box">
                <div class="container">
                  <div id="dycalendar"></div>
                </div>
              </div>
            </section>
          </div>
          <div class="col-lg-6 mb-5">
            <div>
              <h4 class="fw-bold mb-4">Select Chamber & Time Slot</h4>
              <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button
                    class="nav-link tabButton me-3 tabButtonText1"
                    id="pills-home-tab"
                    data-bs-toggle="pill"
                    data-bs-target="#pills-home"
                    type="button"
                    role="tab"
                    aria-controls="pills-home"
                    aria-selected="true" onclick="tabFunction()"
                  >
                    BSMMU
                  </button>
                </li>
                <li class="nav-item" role="presentation">
                  <button
                    class="nav-link tabButton tabButtonText2"
                    id="pills-profile-tab"
                    data-bs-toggle="pill"
                    data-bs-target="#pills-profile"
                    type="button"
                    role="tab"
                    aria-controls="pills-profile"
                    aria-selected="false"
                  >
                    Al Manar Hospital
                  </button>
                </li>
              </ul>
              <div class="tab-content" id="pills-tabContent">
                <div
                  class="tab-pane fade show active"
                  id="pills-home"
                  role="tabpanel"
                  aria-labelledby="pills-home-tab"
                >
                  <div class="hideTabPane">
                    <!--
                    <p class="cl-mat-black">
                      <i class="fa fa-check cl-light-green"></i> Available for
                      Appointment
                    </p>  -->
                    <div class="row">
                      <div class="col-lg-3">
                        <div class="appointTime bg-cl-light-pink rounded-3">
                          <p
                            class="d-flex justify-content-center align-items-center py-3 cl-mat-black cursor"
                          >
                            08:00 am
                          </p>
                        </div>
                      </div>
                      <div class="col-lg-3">
                        <div class="appointTime bg-cl-light-pink rounded-3">
                          <p
                            class="d-flex justify-content-center align-items-center py-3 cl-mat-black cursor"
                          >
                            08:15 am
                          </p>
                        </div>
                      </div>
                      <div class="col-lg-3">
                        <div class="appointTime bg-cl-light-pink rounded-3">
                          <p
                            class="d-flex justify-content-center align-items-center py-3 cl-mat-black cursor"
                          >
                            08:30 am
                          </p>
                        </div>
                      </div>
                      <div class="col-lg-3">
                        <div class="appointTime bg-cl-light-pink rounded-3">
                          <p
                            class="d-flex justify-content-center align-items-center py-3 cl-mat-black cursor"
                          >
                            08:45 am
                          </p>
                        </div>
                      </div>
                      <div class="col-lg-3">
                        <div class="appointTime bg-cl-light-pink rounded-3">
                          <p
                            class="d-flex justify-content-center align-items-center py-3 cl-mat-black cursor"
                          >
                            09:00 am
                          </p>
                        </div>
                      </div>
                      <div class="col-lg-3">
                        <div class="appointTime bg-cl-light-pink rounded-3">
                          <p
                            class="d-flex justify-content-center align-items-center py-3 cl-mat-black cursor"
                          >
                            09:15 am
                          </p>
                        </div>
                      </div>
                      <div class="col-lg-3">
                        <div class="appointTime bg-cl-light-pink rounded-3">
                          <p
                            class="d-flex justify-content-center align-items-center py-3 cl-mat-black cursor"
                          >
                            09:30 am
                          </p>
                        </div>
                      </div>
                      <div class="col-lg-3">
                        <div class="appointTime bg-cl-light-pink rounded-3">
                          <p
                            class="d-flex justify-content-center align-items-center py-3 cl-mat-black cursor"
                          >
                            09:45 am
                          </p>
                        </div>
                      </div>
                      <div class="col-lg-3">
                        <div class="appointTime bg-cl-light-pink rounded-3">
                          <p
                            class="d-flex justify-content-center align-items-center py-3 cl-mat-black cursor"
                          >
                            10:00 am
                          </p>
                        </div>
                      </div>
                      <div class="col-lg-3">
                        <div class="appointTime bg-cl-light-pink rounded-3">
                          <p
                            class="d-flex justify-content-center align-items-center py-3 cl-mat-black cursor"
                          >
                            10:15 am
                          </p>
                        </div>
                      </div>

                      <div class="col-lg-3">
                        <div class="appointTime bg-cl-light-pink rounded-3">
                          <p
                            class="d-flex justify-content-center align-items-center py-3 cl-mat-black cursor"
                          >
                            10:30 am
                          </p>
                        </div>
                      </div>
                      <div class="col-lg-3">
                        <div class="appointTime bg-cl-light-pink rounded-3">
                          <p
                            class="d-flex justify-content-center align-items-center py-3 cl-mat-black cursor"
                          >
                            10:45 am
                          </p>
                        </div>
                      </div>
                      <div class="col-lg-3">
                        <div class="appointTime bg-cl-light-pink rounded-3">
                          <p
                            class="d-flex justify-content-center align-items-center py-3 cl-mat-black cursor"
                          >
                            11:00 am
                          </p>
                        </div>
                      </div>
                      <div class="col-lg-3">
                        <div class="appointTime bg-cl-light-pink rounded-3">
                          <p
                            class="d-flex justify-content-center align-items-center py-3 cl-mat-black cursor"
                          >
                            11:15 am
                          </p>
                        </div>
                      </div>

                      <div class="col-lg-3">
                        <div class="appointTime bg-cl-light-pink rounded-3">
                          <p
                            class="d-flex justify-content-center align-items-center py-3 cl-mat-black cursor"
                          >
                            11:30 am
                          </p>
                        </div>
                      </div>
                      <div class="col-lg-3">
                        <div class="appointTime bg-cl-light-pink rounded-3">
                          <p
                            class="d-flex justify-content-center align-items-center py-3 cl-mat-black cursor"
                          >
                            11:45 am
                          </p>
                        </div>
                      </div>
                      <div class="col-lg-3">
                        <div class="appointTime bg-cl-light-pink rounded-3">
                          <p
                            class="d-flex justify-content-center align-items-center py-3 cl-mat-black cursor"
                          >
                            12:00 pm
                          </p>
                        </div>
                      </div>
                      <div class="col-lg-3">
                        <div class="appointTime bg-cl-light-pink rounded-3">
                          <p
                            class="d-flex justify-content-center align-items-center py-3 cl-mat-black cursor"
                          >
                            12:15 pm
                          </p>
                        </div>
                      </div>

                      <div class="col-lg-3">
                        <div class="appointTime bg-cl-light-pink rounded-3">
                          <p
                            class="d-flex justify-content-center align-items-center py-3 cl-mat-black cursor"
                          >
                            12:30 pm
                          </p>
                        </div>
                      </div>
                      <div class="col-lg-3">
                        <div class="appointTime bg-cl-light-pink rounded-3">
                          <p
                            class="d-flex justify-content-center align-items-center py-3 cl-mat-black cursor"
                          >
                            12:45 pm
                          </p>
                        </div>
                      </div>
                      <div class="col-lg-3">
                        <div class="appointTime bg-cl-light-pink rounded-3">
                          <p
                            class="d-flex justify-content-center align-items-center py-3 cl-mat-black cursor"
                          >
                            01:00 pm
                          </p>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
                <div
                  class="tab-pane fade"
                  id="pills-profile"
                  role="tabpanel"
                  aria-labelledby="pills-profile-tab"
                >
                  <div>
                    {{-- <p class="cl-mat-black">
                      <i class="fa fa-check cl-light-green"></i> Available for
                      Appointment
                    </p> --}}
                    <div class="row">
                      <div class="col-lg-3">
                        <div class="appointTime bg-cl-light-pink rounded-3">
                          <p
                            class="d-flex justify-content-center align-items-center py-3 cl-mat-black cursor"
                          >
                            07:00 pm
                          </p>
                        </div>
                      </div>
                      <div class="col-lg-3">
                        <div class="appointTime bg-cl-light-pink rounded-3">
                          <p
                            class="d-flex justify-content-center align-items-center py-3 cl-mat-black cursor"
                          >
                            07:15 pm
                          </p>
                        </div>
                      </div>
                      <div class="col-lg-3">
                        <div class="appointTime bg-cl-light-pink rounded-3">
                          <p
                            class="d-flex justify-content-center align-items-center py-3 cl-mat-black cursor"
                          >
                            07:30 pm
                          </p>
                        </div>
                      </div>
                      <div class="col-lg-3">
                        <div class="appointTime bg-cl-light-pink rounded-3">
                          <p
                            class="d-flex justify-content-center align-items-center py-3 cl-mat-black cursor"
                          >
                            07:45 pm
                          </p>
                        </div>
                      </div>
                      <div class="col-lg-3">
                        <div class="appointTime bg-cl-light-pink rounded-3">
                          <p
                            class="d-flex justify-content-center align-items-center py-3 cl-mat-black cursor"
                          >
                            08:00 pm
                          </p>
                        </div>
                      </div>
                      <div class="col-lg-3">
                        <div class="appointTime bg-cl-light-pink rounded-3">
                          <p
                            class="d-flex justify-content-center align-items-center py-3 cl-mat-black cursor"
                          >
                            08:15 pm
                          </p>
                        </div>
                      </div>
                      <div class="col-lg-3">
                        <div class="appointTime bg-cl-light-pink rounded-3">
                          <p
                            class="d-flex justify-content-center align-items-center py-3 cl-mat-black cursor"
                          >
                            08:30 pm
                          </p>
                        </div>
                      </div>
                      <div class="col-lg-3">
                        <div class="appointTime bg-cl-light-pink rounded-3">
                          <p
                            class="d-flex justify-content-center align-items-center py-3 cl-mat-black cursor"
                          >
                            08:45 pm
                          </p>
                        </div>
                      </div>
                      <div class="col-lg-3">
                        <div class="appointTime bg-cl-light-pink rounded-3">
                          <p
                            class="d-flex justify-content-center align-items-center py-3 cl-mat-black cursor"
                          >
                            09:00 pm
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-8">
            <div>
              <h2 class="fw-bold text-center mb-4">Enter Your Details</h2>
              <form action="addAppointment" method="POST">
                @csrf
                <div class="row justify-content-center">
                  <div class="col-lg-6">
                    <div class="mb-2">
                      <label class="mb-2 fw-bold">Name</label>
                      <input
                        type="text" name="name"
                        class="form-control w-100 bg-cl-ash2"
                        placeholder="Enter Your Name"
                        required
                      />
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="mb-2">
                      <label class="mb-2 fw-bold">Phone</label>
                      <input
                        type="number" name="phone"
                        class="form-control w-100 bg-cl-ash2"
                        placeholder="Enter Your Phone Number"
                        required
                      />
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="mb-2">
                      <label class="mb-2 fw-bold">Email</label>
                      <input
                        type="email" name="email"
                        class="form-control w-100 bg-cl-ash2"
                        placeholder="Enter Your Email"
                      />
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="mb-2">
                      <label class="mb-2 fw-bold">Chamber</label>
                      <input
                        type="text" name="chamber" id="chamber"
                        class="form-control w-100 bg-cl-ash2"
                        placeholder="Select chamber from above"
                        required readonly
                        
                      />
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="mb-2">
                      <label class="mb-2 fw-bold">Date</label>
                      <input
                        type="date" name="date" id="date"
                        class="form-control w-100 bg-cl-ash2"
                        placeholder="Add date from above"
                        required
                      />
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="mb-2">
                      <label class="mb-2 fw-bold">Time</label>
                      <input
                        type="text" name="time"
                        id="time"
                        class="form-control w-100 bg-cl-ash2 d-flex justify-content-center align-items-center"
                        placeholder="Add time from above" required readonly
                      />
                    </div>
                  </div>
                  <div class="col-lg-12 mb-3">
                    <div class="">
                      <label class="mb-2 fw-bold">Symptoms(optional)</label>
                      <textarea name="symptoms"
                        class="form-control w-100 bg-cl-ash2"
                        rows="8"
                      ></textarea>
                    </div>
                  </div>
                  <div class="col-lg-3">
                  <div class="formButton d-flex">
                  <div class="mb-3">
                  <button class="bg-cl-pm text-white">
                  Make a Appointment
                 </button>
                 </div>
          </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!----------Copy Right------------------->
    <footer class="CopyRight py-3">
      <div class="container d-flex justify-content-between align-items-center">
        <div class="copyRightContentLeft w-50">
          <small
            >Powered by <span class="cl-pm fw-bold cursor">NoboIT</span></small
          >
        </div>
        <div class="copyRightContentRight">
          <div class="footerIcon d-flex">
            <div
              class="footerSocialIcon d-flex justify-content-center align-items-center cursor me-3"
            >
              <i class="fab fa-facebook-f cl-pm"></i>
            </div>
            <div
              class="footerSocialIcon d-flex justify-content-center align-items-center cursor me-3"
            >
              <i class="fab fa-linkedin cl-pm"></i>
            </div>
            <div
              class="footerSocialIcon d-flex justify-content-center align-items-center cursor me-3"
            >
              <i class="fab fa-twitter cl-pm"></i>
            </div>
            <div
              class="footerSocialIcon d-flex justify-content-center align-items-center cursor"
            >
              <i class="fab fa-youtube cl-pm"></i>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <script src="js/main.js"></script>
    <script src="js/dycalendar.js"></script>
    <script>
      dycalendar.draw({
        target: "#dycalendar",
        type: "month",
        dayformat: "full",
        monthformat: "full",
        highlighttargetdate: true,
        prevnextbutton: "show",
      });
    </script>
  </body>
</html>
