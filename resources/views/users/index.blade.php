@extends('layouts.app', ['activePage' => 'user-management', 'titlePage' => 'User Mangement'])
@section('content')
      <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
    <div class="container-fluid">
      <div class="navbar-wrapper">
        <a class="navbar-brand" href="#"></a>
      </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">

      <span class="sr-only">Toggle navigation</span>
      <span class="navbar-toggler-icon icon-bar"></span>
      <span class="navbar-toggler-icon icon-bar"></span>
      <span class="navbar-toggler-icon icon-bar"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end">
        <form class="navbar-form">
          <span class="bmd-form-group"><div class="input-group no-border">
          <input type="text" value="" class="form-control" placeholder="Search...">
          <button type="submit" class="btn btn-white btn-round btn-just-icon">
            <i class="material-icons">search</i>
            <div class="ripple-container"></div>
          </button>
          </div></span>
        </form>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('home') }}">
              <i class="material-icons">dashboard</i>
              <p class="d-lg-none d-md-block">
                Stats
              </p>
            </a>
          </li>
          <!-- NOTIFICATIONS  -->
          <li class="nav-item dropdown">
            <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="material-icons">notifications</i>
              <span class="notification">5</span>
              <p class="d-lg-none d-md-block">
                Some Actions
              </p>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="#">Mike John responded to your email</a>
              <a class="dropdown-item" href="#">You have 5 new tasks</a>
              <a class="dropdown-item" href="#">You're now friend with Andrew</a>
              <a class="dropdown-item" href="#">Another Notification</a>
              <a class="dropdown-item" href="#">Another One</a>
            </div>
          </li>
          <!-- ENDNOTIFICATIONS  -->
          <li class="nav-item dropdown">
            <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="material-icons">person</i>
              <p class="d-lg-none d-md-block">
                Account
              </p>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
              <a class="dropdown-item" href="{{ route('profile.edit') }}">Profile</a>
              <a class="dropdown-item" href="#">Settings</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Log out</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
    </nav>

        <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Users</h4>
                  <p class="card-category"> Here you can manage users</p>
                </div>
                <div class="card-body">
                                  <div class="row">
                    <div class="col-12 text-right">
                      <a href="#" class="btn btn-sm btn-primary">Add user</a>
                    </div>
                  </div>
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <tr><th>
                            Name
                        </th>
                        <th>
                          Email
                        </th>
                        <th>
                          Creation date
                        </th>
                        <th class="text-right">
                          Actions
                        </th>
                      </tr></thead>
                      <tbody>
                                                <tr>
                            <td>
                              Admin Admin
                            </td>
                            <td>
                              admin@material.com
                            </td>
                            <td>
                              2020-02-24
                            </td>
                            <td class="td-actions text-right">
                                                            <a rel="tooltip" class="btn btn-success btn-link" href="#" data-original-title="" title="">
                                  <i class="material-icons">edit</i>
                                  <div class="ripple-container"></div>
                                </a>
                                                        </td>
                          </tr>
                                            </tbody>
                    </table>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>


          <!--   Core JS Files   -->
            <script src="{{ asset('material') }}/js/core/jquery.min.js"></script>
            <script src="{{ asset('material') }}/js/core/popper.min.js"></script>
            <script src="{{ asset('material') }}/js/core/bootstrap-material-design.min.js"></script>
            <script src="{{ asset('material') }}/js/plugins/perfect-scrollbar.jquery.min.js"></script>
            <!-- Plugin for the momentJs  -->
            <script src="{{ asset('material') }}/js/plugins/moment.min.js"></script>
            <!--  Plugin for Sweet Alert -->
            <script src="{{ asset('material') }}/js/plugins/sweetalert2.js"></script>
            <!-- Forms Validations Plugin -->
            <script src="{{ asset('material') }}/js/plugins/jquery.validate.min.js"></script>
            <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
            <script src="{{ asset('material') }}/js/plugins/jquery.bootstrap-wizard.js"></script>
            <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
            <script src="{{ asset('material') }}/js/plugins/bootstrap-selectpicker.js"></script>
            <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
            <script src="{{ asset('material') }}/js/plugins/bootstrap-datetimepicker.min.js"></script>
            <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
            <script src="{{ asset('material') }}/js/plugins/jquery.dataTables.min.js"></script>
            <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
            <script src="{{ asset('material') }}/js/plugins/bootstrap-tagsinput.js"></script>
            <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
            <script src="{{ asset('material') }}/js/plugins/jasny-bootstrap.min.js"></script>
            <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
            <script src="{{ asset('material') }}/js/plugins/fullcalendar.min.js"></script>
            <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
            <script src="{{ asset('material') }}/js/plugins/jquery-jvectormap.js"></script>
            <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
            <script src="{{ asset('material') }}/js/plugins/nouislider.min.js"></script>
            <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
            <!-- Library for adding dinamically elements -->
            <script src="{{ asset('material') }}/js/plugins/arrive.min.js"></script>
            <!--  Google Maps Plugin    -->
            <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE'"></script>
            <!-- Chartist JS -->
            <script src="{{ asset('material') }}/js/plugins/chartist.min.js"></script>
            <!--  Notifications Plugin    -->
            <script src="{{ asset('material') }}/js/plugins/bootstrap-notify.js"></script>
            <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
            <script src="{{ asset('material') }}/js/material-dashboard.js?v=2.1.1" type="text/javascript"></script>
            <!-- Material Dashboard DEMO methods, don't include it in your project! -->
            <script src="{{ asset('material') }}/demo/demo.js"></script>
            <script src="{{ asset('material') }}/js/settings.js"></script>
            <script>
              // Facebook Pixel Code Don't Delete
                ! function(f, b, e, v, n, t, s) {
                  if (f.fbq) return;
                  n = f.fbq = function() {
                    n.callMethod ?
                      n.callMethod.apply(n, arguments) : n.queue.push(arguments)
                  };
                  if (!f._fbq) f._fbq = n;
                  n.push = n;
                  n.loaded = !0;
                  n.version = '2.0';
                  n.queue = [];
                  t = b.createElement(e);
                  t.async = !0;
                  t.src = v;
                  s = b.getElementsByTagName(e)[0];
                  s.parentNode.insertBefore(t, s)
                }(window,
                  document, 'script', '//connect.facebook.net/en_US/fbevents.js');
                try {
                  fbq('init', '111649226022273');
                  fbq('track', "PageView");
                } catch (err) {
                  console.log('Facebook Track Error:', err);
                }
            </script>
            <noscript>
              <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=111649226022273&ev=PageView&noscript=1" />
            </noscript>
            @stack('js')
@endsection
