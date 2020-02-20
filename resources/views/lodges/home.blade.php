

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <meta name="description" content="" />
        <meta name="author" content="" />

        <title>Agent Dashboard</title>

        <!-- Font Icon -->
        <link
            rel="stylesheet"
            href="fonts/material-icon/css/material-design-iconic-font.min.css"
        />

        <!-- Custom fonts for this theme -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Bootstrap core CSS -->
        <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
            crossorigin="anonymous"
        />

        <!-- Custom fonts for this template -->
        <link
            href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700"
            rel="stylesheet"
        />
        <link
            href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i"
            rel="stylesheet"
        />

        <!-- Custom styles for this template -->
        <link rel="stylesheet" href="{{ asset('css/agent-dashboard.css') }}">
        <link rel="stylesheet" href="{{ asset('css/signup_style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>

    <body id="page-top">
        <nav
            class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top"
            id="sideNav"
        >
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-block d-lg-none">{{Auth::user()->username}}</span>
                <span class="d-none d-lg-block">
                    <img
                        class="img-fluid img-profile rounded-circle mx-auto mb-2"
                        src="uploads/avatar/{{Auth::user()->avatar}}"
                        alt="{{Auth::user()->full_name}}"
                    />
                </span>
            </a>
            <button
                class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger agent-link" href="#about"
                            >About</a
                        >
                    </li>
                    <li class="nav-item">
                        <a
                            class="nav-link js-scroll-trigger agent-link"
                            href="#add-apartment"
                            >Add Apartment</a
                        >
                    </li>
                    <li class="nav-item">
                        <a
                            class="nav-link js-scroll-trigger agent-link"
                            href="#my-apartments"
                            >My Apartments</a
                        >
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('logout') }}" class="nav-link agent-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                    </li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </ul>
            </div>
        </nav>

        <div class="container-fluid p-0">
            <!-- about -->
            <section
                class="resume-section p-3 p-lg-5 d-flex align-items-center"
                id="about"
            >
                <div class="w-100">
                    <h1 class="mb-0">
                    {{Auth::user()->full_name}}
                        <span class="text-primary"></span>
                    </h1>
                    <div class="subheading mb-5">
                        <p>State Code: {{Auth::user()->state_code}}</p>
                        <p>Call Up Number: {{Auth::user()->call_up}}</p>
                        <p>
                            <a href="mailto:name@email.com">{{Auth::user()->email}}</a>
                        </p>
                    </div>
                </div>
            </section>

            <hr class="m-0" />
            <!-- add apartment -->
            <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="add-apartment">
                <div class="w-100">
                    <h2 class="mb-5">Add New Apartment</h2>
                    <!-- Add Apartment form -->
                    <div class="container">
                        <div class="signup-content">
                            <div class="signup-form">
                                <form
                                    method="POST"
                                    class="register-form"
                                    id="register-form"
                                    action="{{ route('lodges.store') }}"
                                >
                                @csrf
                                    <!-- apartment-name -->
                                    <div class="form-group">
                                        <label for="name"
                                            ><i class="zmdi zmdi-home"></i
                                        ></label>
                                        <input
                                            type="text"
                                            name="lodge_name"
                                            id="apartment-name"
                                            placeholder="Apartment name"
                                        />
                                    </div>

                                    <!-- apartment-type -->
                                    <div class="form-group">
                                        <label for="name"
                                            ><i class="zmdi zmdi-home"></i
                                        ></label>
                                        <input
                                            type="text"
                                            name="lodge_type"
                                            id="apartment-type"
                                            placeholder="Apartment Type (selfcon, one room, flat etc)"
                                        />
                                    </div>

                                    <!-- description -->
                                    <div class="form-group">
                                        <label for="description"
                                            ><i class="zmdi zmdi-home"></i
                                        ></label>
                                        <input
                                            type="text"
                                            name="description"
                                            id="description"
                                            placeholder="Description"
                                        />
                                    </div>

                                    <!-- price -->
                                    <div class="form-group">
                                        <label for="price"
                                            ><i class="zmdi zmdi-home"></i
                                        ></label>
                                        <input
                                            type="text"
                                            name="price"
                                            id="price"
                                            placeholder="Price/ Year"
                                        />
                                    </div>
                                    
                                    <!-- state -->
                                    <div class="form-group">
                                        <label for="state"
                                            ><i class="zmdi zmdi-home"></i
                                        ></label>
                                        <input
                                            type="text"
                                            name="state"
                                            id="state"
                                            placeholder="State"
                                        />
                                    </div>

                                    <!-- local govt -->
                                    <div class="form-group">
                                        <label for="local_govt"
                                            ><i class="zmdi zmdi-home"></i
                                        ></label>
                                        <input
                                            type="text"
                                            name="local_govt"
                                            id="local_govt"
                                            placeholder="Local Government"
                                        />
                                    </div>

                                    <!-- Address -->
                                    <div class="form-group">
                                        <label for="address"
                                            ><i
                                                class="zmdi zmdi-account material-icons-name"
                                            ></i
                                        ></label>
                                        <input
                                            type="text"
                                            name="address"
                                            id="address"
                                            placeholder="Address"
                                        />
                                    </div>

                                    <!-- Address -->
                                    <div class="form-group">
                                        <label for="agent-id"
                                            ><i
                                                class="zmdi zmdi-account material-icons-name"
                                            ></i
                                        ></label>
                                        <input
                                            type="text"
                                            name="agent_id"
                                            id="agent-id"
                                            placeholder="Agent ID"
                                        />
                                    </div>


                                    

                                    <div class="form-group">
                                        <input
                                            type="checkbox"
                                            name="agree-term"
                                            id="agree-term"
                                            class="agree-term"
                                        />
                                        <label
                                            for="agree-term"
                                            class="label-agree-term"
                                            ><span><span></span></span>I agree
                                            all statements in
                                            <a href="#" class="term-service"
                                                >Terms of service</a
                                            ></label
                                        >
                                    </div>
                                    <div class="form-group">
                                        <input
                                            type="submit"
                                            name="signup"
                                            id="signup"
                                            class="form-submit"
                                            value="Add Apartment"
                                        />
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- </section> -->
                </div>
            </section>

            <hr class="m-0" />

            <!-- my apartment -->
            <section class="page-section portfolio" id="my-apartments">
              <div class="container">
                  <h2 class="mb-5">My Apartments</h2>
          
                <!-- Apartment Grid Items -->
                <div class="row">

                
                @foreach ($lodges as $lodge)
                  <!-- Apartment Item 1 -->
                  <div class="col-md-6 col-lg-4">
                    <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
                      <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white">
                          <i class="fa fa-plus" fa-lg aria-hidden="true"></i>
                        </div>
                      </div>
                      <img class="img-fluid" src="{{ $lodge->image }}<" alt="">
                    </div>
                  </div>
                @endforeach
          
                       
                   
                </div>
                <!-- /.row -->
                
                <div class="text-center">
                    No Lodges Yet

                </div>

                
          
              </div>
            </section>
          
            <!-- Apartment Modals -->

  <!-- Apartment Modal 1 -->
  <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
      <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">
              <i class="fa fa-times" aria-hidden="true"></i>
            </span>
          </button>
          <div class="modal-body text-center">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-lg-8">
                  <!-- Apartment Modal - Title -->
                  <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Log Cabin</h2>
                  <!-- Icon Divider -->
                  <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon">
                      <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                    <div class="divider-custom-line"></div>
                  </div>
                  <!-- Apartment Modal - Image -->
                  <img class="img-fluid rounded mb-5" src="https://images.unsplash.com/photo-1522708323590-d24dbb6b0267?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" alt="">
                  <!-- Apartment Modal - Text -->
                  <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                  <button class="btn btn-primary" href="#" data-dismiss="modal">
                    <i class="fa fa-times" aria-hidden="true"></i>
                    Close Window
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  
    <!-- Apartment Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-labelledby="portfolioModal2Label" aria-hidden="true">
      <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">
              <i class="fa fa-times" aria-hidden="true"></i>
            </span>
          </button>
          <div class="modal-body text-center">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-lg-8">
                  <!-- Apartment Modal - Title -->
                  <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Tasty Cake</h2>
                  <!-- Icon Divider -->
                  <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon">
                      <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                    <div class="divider-custom-line"></div>
                  </div>
                  <!-- Apartment Modal - Image -->
                  <img class="img-fluid rounded mb-5" src="https://media.gettyimages.com/photos/living-room-picture-id908753266?s=612x612" alt="">
                  <!-- Apartment Modal - Text -->
                  <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                  <button class="btn btn-primary" href="#" data-dismiss="modal">
                    <i class="fa fa-times" aria-hidden="true"></i>
                    Close Window
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  
    <!-- Apartment Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-labelledby="portfolioModal3Label" aria-hidden="true">
      <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">
              <i class="fa fa-times" aria-hidden="true"></i>
            </span>
          </button>
          <div class="modal-body text-center">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-lg-8">
                  <!-- Apartment Modal - Title -->
                  <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Circus Tent</h2>
                  <!-- Icon Divider -->
                  <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon">
                      <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                    <div class="divider-custom-line"></div>
                  </div>
                  <!-- Apartment Modal - Image -->
                  <img class="img-fluid rounded mb-5" src="http://media.graytvinc.com/images/wcjb_apartment-living-room.jpg" alt="">
                  <!-- Apartment Modal - Text -->
                  <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                  <button class="btn btn-primary" href="#" data-dismiss="modal">
                    <i class="fa fa-times" aria-hidden="true"></i>
                    Close Window
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  
    <!-- Apartment Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-labelledby="portfolioModal4Label" aria-hidden="true">
      <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">
              <i class="fa fa-times" aria-hidden="true"></i>
            </span>
          </button>
          <div class="modal-body text-center">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-lg-8">
                  <!-- Apartment Modal - Title -->
                  <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Controller</h2>
                  <!-- Icon Divider -->
                  <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon">
                      <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                    <div class="divider-custom-line"></div>
                  </div>
                  <!-- Apartment Modal - Image -->
                  <img class="img-fluid rounded mb-5" src="https://m.foolcdn.com/media/millionacres/images/image1_BuYM1tG.width-1200.jpg" alt="">
                  <!-- Apartment Modal - Text -->
                  <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                  <button class="btn btn-primary" href="#" data-dismiss="modal">
                    <i class="fa fa-times" aria-hidden="true"></i>
                    Close Window
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  
    <!-- Apartment Modal 5 -->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-labelledby="portfolioModal5Label" aria-hidden="true">
      <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">
              <i class="fa fa-times" aria-hidden="true"></i>
            </span>
          </button>
          <div class="modal-body text-center">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-lg-8">
                  <!-- Apartment Modal - Title -->
                  <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Locked Safe</h2>
                  <!-- Icon Divider -->
                  <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon">
                      <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                    <div class="divider-custom-line"></div>
                  </div>
                  <!-- Apartment Modal - Image -->
                  <img class="img-fluid rounded mb-5" src="https://images.unsplash.com/photo-1522708323590-d24dbb6b0267?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" alt="">
                  <!-- Apartment Modal - Text -->
                  <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                  <button class="btn btn-primary" href="#" data-dismiss="modal">
                    <i class="fa fa-times" aria-hidden="true"></i>
                    Close Window
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  
    <!-- Apartment Modal 6 -->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-labelledby="portfolioModal6Label" aria-hidden="true">
      <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">
              <i class="fa fa-times" aria-hidden="true"></i>
            </span>
          </button>
          <div class="modal-body text-center">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-lg-8">
                  <!-- Apartment Modal - Title -->
                  <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Submarine</h2>
                  <!-- Icon Divider -->
                  <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon">
                      <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                    <div class="divider-custom-line"></div>
                  </div>
                  <!-- Apartment Modal - Image -->
                  <img class="img-fluid rounded mb-5" src="https://media.gettyimages.com/photos/living-room-picture-id908753266?s=612x612" alt="">
                  <!-- Apartment Modal - Text -->
                  <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                  <button class="btn btn-primary" href="#" data-dismiss="modal">
                    <i class="fa fa-times" aria-hidden="true"></i>
                    Close Window
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
            <hr class="m-0" />
        </div>

<!-- Bootstrap core JavaScript -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <!-- Plugin JavaScript -->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for this template -->
        <script src="js/resume.min.js"></script>
    </body>
</html>

