<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>UATS - Admin Dashboard Template</title>

  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" rel="stylesheet"/>
  <link href="https://cdn.materialdesignicons.com/3.0.39/css/materialdesignicons.min.css" rel="stylesheet" />

  <!-- PLUGINS CSS STYLE -->
  <link href="plugins/toaster/toastr.min.css" rel="stylesheet" />
  <link href="plugins/nprogress/nprogress.css" rel="stylesheet" />
  <link href="plugins/flag-icons/css/flag-icon.min.css" rel="stylesheet"/>
  <link href="plugins/jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" />
  <link href="plugins/ladda/ladda.min.css" rel="stylesheet" />
  <link href="plugins/select2/css/select2.min.css" rel="stylesheet" />
  <link href="plugins/daterangepicker/daterangepicker.css" rel="stylesheet" />

  <!-- SLEEK CSS -->
  <link id="sleek-css" rel="stylesheet" href="css/sleek.css" />



  <!-- FAVICON -->
  <!--<link href="img/favicon.png" rel="shortcut icon" />-->

  <!--
    HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
  -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <script src="plugins/nprogress/nprogress.js"></script>
</head>


  <body class="sidebar-fixed sidebar-dark header-light header-fixed" id="body">
    <script>
      NProgress.configure({ showSpinner: false });
      NProgress.start();
    </script>

    <div class="mobile-sticky-body-overlay"></div>

    <div class="wrapper">

              <!--
          ====================================
          ——— LEFT SIDEBAR WITH FOOTER
          =====================================
        -->
        <aside class="left-sidebar bg-sidebar">
          <div id="sidebar" class="sidebar sidebar-with-footer">
            <!-- Aplication Brand -->
            <div class="app-brand">
              <a href="/dashboard">
                <span class="brand-name">UATS Dashboard</span>
              </a>
            </div>
            <!-- begin sidebar scrollbar -->
            <div class="sidebar-scrollbar">

              <!-- sidebar menu -->
              <ul class="nav sidebar-inner" id="sidebar-menu">



                  <li >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#dashboard"
                      aria-expanded="false" aria-controls="dashboard">
                      <i class="mdi mdi-view-dashboard-outline"></i>
                      <span class="nav-text">Users</span> <b class="caret"></b>
                    </a>

                  </li>

                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#ui-elements"
                      aria-expanded="false" aria-controls="ui-elements">
                      <i class="mdi mdi-folder-multiple-outline"></i>
                      <span class="nav-text">Quotations</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="ui-elements"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">
                        <li  class="has-sub" >
                          <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#components"
                            aria-expanded="false" aria-controls="components">
                            <span class="nav-text">Components</span> <b class="caret"></b>
                          </a>
                          <ul  class="collapse"  id="components">
                            <div class="sub-menu">

                              <li >
                                <a href="alert.html">Alert</a>
                              </li>

                              <li >
                                <a href="badge.html">Badge</a>
                              </li>

                              <li >
                                <a href="breadcrumb.html">Breadcrumb</a>
                              </li>

                              <li >
                                <a href="button-default.html">Button Default</a>
                              </li>

                              <li >
                                <a href="button-dropdown.html">Button Dropdown</a>
                              </li>

                              <li >
                                <a href="button-group.html">Button Group</a>
                              </li>

                              <li >
                                <a href="button-social.html">Button Social</a>
                              </li>

                              <li >
                                <a href="button-loading.html">Button Loading</a>
                              </li>

                              <li >
                                <a href="card.html">Card</a>
                              </li>

                              <li >
                                <a href="carousel.html">Carousel</a>
                              </li>

                              <li >
                                <a href="collapse.html">Collapse</a>
                              </li>

                              <li >
                                <a href="list-group.html">List Group</a>
                              </li>

                              <li >
                                <a href="modal.html">Modal</a>
                              </li>

                              <li >
                                <a href="pagination.html">Pagination</a>
                              </li>

                              <li >
                                <a href="popover-tooltip.html">Popover & Tooltip</a>
                              </li>

                              <li >
                                <a href="progress-bar.html">Progress Bar</a>
                              </li>

                              <li >
                                <a href="spinner.html">Spinner</a>
                              </li>

                              <li >
                                <a href="switcher.html">Switcher</a>
                              </li>

                              <li >
                                <a href="table.html">Table</a>
                              </li>

                              <li >
                                <a href="tab.html">Tab</a>
                              </li>

                            </div>
                          </ul>
                        </li>
                        <li  class="has-sub" >
                          <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#icons"
                            aria-expanded="false" aria-controls="icons">
                            <span class="nav-text">Icons</span> <b class="caret"></b>
                          </a>
                          <ul  class="collapse"  id="icons">
                            <div class="sub-menu">

                              <li >
                                <a href="material-icon.html">Material Icon</a>
                              </li>

                              <li >
                                <a href="flag-icon.html">Flag Icon</a>
                              </li>

                            </div>
                          </ul>
                        </li>




                        <li  class="has-sub" >
                          <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#forms"
                            aria-expanded="false" aria-controls="forms">
                            <span class="nav-text">Forms</span> <b class="caret"></b>
                          </a>
                          <ul  class="collapse"  id="forms">
                            <div class="sub-menu">

                              <li >
                                <a href="basic-input.html">Basic Input</a>
                              </li>

                              <li >
                                <a href="input-group.html">Input Group</a>
                              </li>

                              <li >
                                <a href="checkbox-radio.html">Checkbox & Radio</a>
                              </li>

                              <li >
                                <a href="form-validation.html">Form Validation</a>
                              </li>

                              <li >
                                <a href="form-advance.html">Form Advance</a>
                              </li>

                            </div>
                          </ul>
                        </li>




                        <li  class="has-sub" >
                          <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#maps"
                            aria-expanded="false" aria-controls="maps">
                            <span class="nav-text">Maps</span> <b class="caret"></b>
                          </a>
                          <ul  class="collapse"  id="maps">
                            <div class="sub-menu">

                              <li >
                                <a href="google-map.html">Google Map</a>
                              </li>

                              <li >
                                <a href="vector-map.html">Vector Map</a>
                              </li>

                            </div>
                          </ul>
                        </li>




                        <li  class="has-sub" >
                          <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#widgets"
                            aria-expanded="false" aria-controls="widgets">
                            <span class="nav-text">Widgets</span> <b class="caret"></b>
                          </a>
                          <ul  class="collapse"  id="widgets">
                            <div class="sub-menu">

                              <li >
                                <a href="general-widget.html">General Widget</a>
                              </li>

                              <li >
                                <a href="chart-widget.html">Chart Widget</a>
                              </li>

                            </div>
                          </ul>
                        </li>



                      </div>
                    </ul>
                  </li>





                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#charts"
                      aria-expanded="false" aria-controls="charts">
                      <i class="mdi mdi-chart-pie"></i>
                      <span class="nav-text">Clients</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="charts"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">
                            <li >
                              <a class="sidenav-item-link" href="chartjs.html">
                                <span class="nav-text">ChartJS</span>

                              </a>
                            </li>
                      </div>
                    </ul>
                  </li>

                 <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#pages"
                      aria-expanded="false" aria-controls="pages">
                      <i class="mdi mdi-image-filter-none"></i>
                      <span class="nav-text">Pages</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="pages"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">
                            <li >
                              <a class="sidenav-item-link" href="user-profile.html">
                                <span class="nav-text">User Profile</span>

                              </a>
                            </li>

                        <li  class="has-sub" >
                          <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#authentication"
                            aria-expanded="false" aria-controls="authentication">
                            <span class="nav-text">Authentication</span> <b class="caret"></b>
                          </a>
                          <ul  class="collapse"  id="authentication">
                            <div class="sub-menu">

                              <li >
                                <a href="sign-in.html">Sign In</a>
                              </li>

                              <li >
                                <a href="sign-up.html">Sign Up</a>
                              </li>

                            </div>
                          </ul>
                        </li>

                       <li  class="has-sub" >
                          <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#others"
                            aria-expanded="false" aria-controls="others">
                            <span class="nav-text">Others</span> <b class="caret"></b>
                          </a>
                          <ul  class="collapse"  id="others">
                            <div class="sub-menu">

                              <li >
                                <a href="invoice.html">invoice</a>
                              </li>

                              <li >
                                <a href="error.html">Error</a>
                              </li>

                            </div>
                          </ul>
                        </li>
                      </div>
                    </ul>
                  </li>





                  <li class="has-sub">

                  <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#settings"
                      aria-expanded="false" aria-controls="settings">
                      <i class="mdi mdi-book-open-page-variant"></i>
                      <span class="nav-text">Settings</span> <b class="caret"></b>
                    </a>
                  </li>

                  <ul  class="collapse"  id="settings" data-parent="#sidebar-menu">
                      <div class="sub-menu">
                            <li >
                              <a class="sidenav-item-link" href="{{route('company-profile')}}">
                                <span class="nav-text">Company Profile</span>

                              </a>
                            </li>
                            <li >
                              <a class="sidenav-item-link" href="{{route('smtp')}}">
                                <span class="nav-text">SMTP</span>

                              </a>
                            </li>

              </ul>

            </div>

            <hr class="separator" />


        </aside>



      <div class="page-wrapper">
                  <!-- Header -->
          <header class="main-header " id="header">
            <nav class="navbar navbar-static-top navbar-expand-lg">
              <!-- Sidebar toggle button -->
              <button id="sidebar-toggler" class="sidebar-toggle">
                <span class="sr-only">Toggle navigation</span>
              </button>
              <!--search form-->
              <div class="search-form d-none d-lg-inline-block">

              </div>

              <div class="navbar-right ms-auto">
                <ul class="nav navbar-nav float-right">
                  <!-- Github Link Button -->


                  <!-- User Account -->
                  <li class="dropdown user-menu">
                    <button href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                      <img src="img/user/user.png" class="user-image" alt="User Image" />
                      <span class="d-none d-lg-inline-block">User name</span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                      <!-- User image -->
                      <li class="dropdown-header">
                        <img src="img/user/user.png" class="img-circle" alt="User Image" />
                        <div class="d-inline-block">
                          Username <small class="pt-1">useremai@email.com</small>
                        </div>
                      </li>

                      <li>
                        <a href="profile.html">
                          <i class="mdi mdi-account"></i> My Profile
                        </a>
                      </li>

                      <li>
                        <a href="#"> <i class="mdi mdi-settings"></i> Account Setting </a>
                      </li>

                      <li class="dropdown-footer">
                        <a href="signin.html"> <i class="mdi mdi-logout"></i> Log Out </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </nav>


          </header>


        <div class="content-wrapper">
          <div class="content">
                  <!-- Top Statistics -->

									<div class="row">
							<div class="col-12">
                  <!-- Recent Order Table -->
                  <div class="card card-table-border-none" id="recent-orders">
                    <div class="card-header justify-content-between">
                      <h2>Recent Orders</h2>
                      <div class="date-range-report ">
                        <span></span>
                      </div>
                    </div>
                    <div class="card-body pt-0 pb-5">
                      <table class="table card-table table-responsive table-responsive-large" style="width:100%">
                        <thead>
                          <tr>
                            <th>Order ID</th>
                            <th>Product Name</th>
                            <th class="d-none d-md-table-cell">Units</th>
                            <th class="d-none d-md-table-cell">Order Date</th>
                            <th class="d-none d-md-table-cell">Order Cost</th>
                            <th>Status</th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td >24541</td>
                            <td >
                              <a class="text-dark" href=""> Coach Swagger</a>
                            </td>
                            <td class="d-none d-md-table-cell">1 Unit</td>
                            <td class="d-none d-md-table-cell">Oct 20, 2018</td>
                            <td class="d-none d-md-table-cell">$230</td>
                            <td >
                              <span class="badge badge-success">Completed</span>
                            </td>
                            <td class="text-right">
                              <div class="dropdown show d-inline-block widget-dropdown">
                                <a class="dropdown-toggle icon-burger-mini" href="" role="button" id="dropdown-recent-order1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static"></a>
                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-recent-order1">
                                  <li class="dropdown-item">
                                    <a href="#">View</a>
                                  </li>
                                  <li class="dropdown-item">
                                    <a href="#">Remove</a>
                                  </li>
                                </ul>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td >24541</td>
                            <td >
                              <a class="text-dark" href=""> Toddler Shoes, Gucci Watch</a>
                            </td>
                            <td class="d-none d-md-table-cell">2 Units</td>
                            <td class="d-none d-md-table-cell">Nov 15, 2018</td>
                            <td class="d-none d-md-table-cell">$550</td>
                            <td >
                              <span class="badge badge-warning">Delayed</span>
                            </td>
                            <td class="text-right">
                              <div class="dropdown show d-inline-block widget-dropdown">
                                <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdown-recent-order2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static"></a>
                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-recent-order2">
                                  <li class="dropdown-item">
                                    <a href="#">View</a>
                                  </li>
                                  <li class="dropdown-item">
                                    <a href="#">Remove</a>
                                  </li>
                                </ul>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td >24541</td>
                            <td >
                              <a class="text-dark" href=""> Hat Black Suits</a>
                            </td>
                            <td class="d-none d-md-table-cell">1 Unit</td>
                            <td class="d-none d-md-table-cell">Nov 18, 2018</td>
                            <td class="d-none d-md-table-cell">$325</td>
                            <td >
                              <span class="badge badge-warning">On Hold</span>
                            </td>
                            <td class="text-right">
                              <div class="dropdown show d-inline-block widget-dropdown">
                                <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdown-recent-order3" data-toggle="dropdown" aria-haspopup="true"
                                  aria-expanded="false" data-display="static"></a>
                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-recent-order3">
                                  <li class="dropdown-item">
                                    <a href="#">View</a>
                                  </li>
                                  <li class="dropdown-item">
                                    <a href="#">Remove</a>
                                  </li>
                                </ul>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td >24541</td>
                            <td >
                              <a class="text-dark" href=""> Backpack Gents, Swimming Cap Slin</a>
                            </td>
                            <td class="d-none d-md-table-cell">5 Units</td>
                            <td class="d-none d-md-table-cell">Dec 13, 2018</td>
                            <td class="d-none d-md-table-cell">$200</td>
                            <td >
                              <span class="badge badge-success">Completed</span>
                            </td>
                            <td class="text-right">
                              <div class="dropdown show d-inline-block widget-dropdown">
                                <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdown-recent-order4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static"></a>
                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-recent-order4">
                                  <li class="dropdown-item">
                                    <a href="#">View</a>
                                  </li>
                                  <li class="dropdown-item">
                                    <a href="#">Remove</a>
                                  </li>
                                </ul>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td >24541</td>
                            <td >
                              <a class="text-dark" href=""> Speed 500 Ignite</a>
                            </td>
                            <td class="d-none d-md-table-cell">1 Unit</td>
                            <td class="d-none d-md-table-cell">Dec 23, 2018</td>
                            <td class="d-none d-md-table-cell">$150</td>
                            <td >
                              <span class="badge badge-danger">Cancelled</span>
                            </td>
                            <td class="text-right">
                              <div class="dropdown show d-inline-block widget-dropdown">
                                <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdown-recent-order5" data-toggle="dropdown" aria-haspopup="true"
                                  aria-expanded="false" data-display="static"></a>
                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-recent-order5">
                                  <li class="dropdown-item">
                                    <a href="#">View</a>
                                  </li>
                                  <li class="dropdown-item">
                                    <a href="#">Remove</a>
                                  </li>
                                </ul>
                              </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
</div>
						</div>



						<div class="row">
							<div class="col-xl-5">
                  <!-- New Customers -->
                  <div class="card card-table-border-none"  data-scroll-height="580">
                    <div class="card-header justify-content-between ">
                      <h2>New Customers</h2>
                      <div>
                          <button class="text-black-50 mr-2 font-size-20">
                            <i class="mdi mdi-cached"></i>
                          </button>
                          <div class="dropdown show d-inline-block widget-dropdown">
                              <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdown-customar"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                              </a>
                              <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-customar">
                                <li class="dropdown-item"><a  href="#">Action</a></li>
                                <li class="dropdown-item"><a  href="#">Another action</a></li>
                                <li class="dropdown-item"><a  href="#">Something else here</a></li>
                              </ul>
                            </div>
                      </div>
                    </div>
                    <div class="card-body pt-0">
                      <table class="table ">
                        <tbody>
                          <tr>
                            <td >
                              <div class="media">
                                <div class="media-image mr-3 rounded-circle">
                                  <a href="profile.html"><img class="rounded-circle w-45" src="img/user/u1.jpg" alt="customer image"></a>
                                </div>
                                <div class="media-body align-self-center">
                                  <a href="profile.html"><h6 class="mt-0 text-dark font-weight-medium">Selena Wagner</h6></a>
                                  <small>@selena.oi</small>
                                </div>
                              </div>
                            </td>
                            <td >2 Orders</td>
                            <td class="text-dark d-none d-md-block">$150</td>
                          </tr>
                          <tr>
                            <td >
                              <div class="media">
                                <div class="media-image mr-3 rounded-circle">
                                  <a href="profile.html"><img class="rounded-circle w-45" src="img/user/u2.jpg" alt="customer image"></a>
                                </div>
                                <div class="media-body align-self-center">
                                  <a href="profile.html"><h6 class="mt-0 text-dark font-weight-medium">Walter Reuter</h6></a>
                                  <small>@walter.me</small>
                                </div>
                              </div>
                            </td>
                            <td >5 Orders</td>
                            <td class="text-dark d-none d-md-block">$200</td>
                          </tr>
                          <tr>
                            <td >
                              <div class="media">
                                <div class="media-image mr-3 rounded-circle">
                                  <a href="profile.html"><img class="rounded-circle w-45" src="img/user/u3.jpg" alt="customer image"></a>
                                </div>
                                <div class="media-body align-self-center">
                                  <a href="profile.html"><h6 class="mt-0 text-dark font-weight-medium">Larissa Gebhardt</h6></a>
                                  <small>@larissa.gb</small>
                                </div>
                              </div>
                            </td>
                            <td >1 Order</td>
                            <td class="text-dark d-none d-md-block">$50</td>
                          </tr>
                          <tr>
                            <td >
                              <div class="media">
                                <div class="media-image mr-3 rounded-circle">
                                  <a href="profile.html"><img class="rounded-circle w-45" src="img/user/u4.jpg" alt="customer image"></a>
                                </div>
                                <div class="media-body align-self-center">
                                  <a href="profile.html"><h6 class="mt-0 text-dark font-weight-medium">Albrecht Straub</h6></a>
                                  <small>@albrech.as</small>
                                </div>
                              </div>
                            </td>
                            <td >2 Orders</td>
                            <td class="text-dark d-none d-md-block">$100</td>
                          </tr>
                          <tr>
                            <td >
                              <div class="media">
                                <div class="media-image mr-3 rounded-circle">
                                  <a href="profile.html"><img class="rounded-circle w-45" src="img/user/u5.jpg" alt="customer image"></a>
                                </div>
                                <div class="media-body align-self-center">
                                  <a href="profile.html"><h6 class="mt-0 text-dark font-weight-medium">Leopold Ebert</h6></a>
                                  <small>@leopold.et</small>
                                </div>
                              </div>
                            </td>
                            <td >1 Order</td>
                            <td class="text-dark d-none d-md-block">$60</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
</div>
							<div class="col-xl-7">
                  <!-- Top Products -->
                  <div class="card card-default" data-scroll-height="580">
                    <div class="card-header justify-content-between mb-4">
                      <h2>Top Products</h2>
                      <div>
                          <button class="text-black-50 mr-2 font-size-20"><i class="mdi mdi-cached"></i></button>
                          <div class="dropdown show d-inline-block widget-dropdown">
                              <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdown-product" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                              </a>
                              <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-product">
                                <li class="dropdown-item"><a  href="#">Update Data</a></li>
                                <li class="dropdown-item"><a  href="#">Detailed Log</a></li>
                                <li class="dropdown-item"><a  href="#">Statistics</a></li>
                                <li class="dropdown-item"><a  href="#">Clear Data</a></li>
                              </ul>
                            </div>
                      </div>

                    </div>
                    <div class="card-body py-0">
                      <div class="media d-flex mb-5">
                        <div class="media-image align-self-center mr-3 rounded">
                          <a href="#"><img src="img/products/p1.jpg" alt="customer image"></a>
                        </div>
                        <div class="media-body align-self-center">
                          <a href="#"><h6 class="mb-3 text-dark font-weight-medium"> Coach Swagger</h6></a>
                          <p class="float-md-right"><span class="text-dark mr-2">20</span>Sales</p>
                          <p class="d-none d-md-block">Statement belting with double-turnlock hardware adds “swagger” to a simple.</p>
                          <p class="mb-0">
                            <del>$300</del>
                            <span class="text-dark ml-3">$250</span>
                          </p>
                        </div>
                      </div>

                      <div class="media d-flex mb-5">
                        <div class="media-image align-self-center mr-3 rounded">
                          <a href="#"><img src="img/products/p2.jpg" alt="customer image"></a>
                        </div>
                        <div class="media-body align-self-center">
                          <a href="#"><h6 class="mb-3 text-dark font-weight-medium"> Coach Swagger</h6></a>
                          <p class="float-md-right"><span class="text-dark mr-2">20</span>Sales</p>
                          <p class="d-none d-md-block">Statement belting with double-turnlock hardware adds “swagger” to a simple.</p>
                          <p class="mb-0">
                            <del>$300</del>
                            <span class="text-dark ml-3">$250</span>
                          </p>
                        </div>
                      </div>

                      <div class="media d-flex mb-5">
                        <div class="media-image align-self-center mr-3 rounded">
                          <a href="#"><img src="img/products/p3.jpg" alt="customer image"></a>
                        </div>
                        <div class="media-body align-self-center">
                          <a href="#"><h6 class="mb-3 text-dark font-weight-medium"> Gucci Watch</h6></a>
                          <p class="float-md-right"><span class="text-dark mr-2">10</span>Sales</p>
                          <p class="d-none d-md-block">Statement belting with double-turnlock hardware adds “swagger” to a simple.</p>
                          <p class="mb-0">
                            <del>$300</del>
                            <span class="text-dark ml-3">$50</span>
                          </p>
                        </div>
                      </div>
                      </div>
                  </div>
</div>
						</div>
</div>




        </div>

                  <footer class="footer mt-auto">
            <div class="copyright bg-white">
              <p>

              </p>
            </div>

          </footer>

      </div>
    </div>


<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCn8TFXGg17HAUcNpkwtxxyT9Io9B_NcM" defer></script>
<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="plugins/toaster/toastr.min.js"></script>
<script src="plugins/slimscrollbar/jquery.slimscroll.min.js"></script>
<script src="plugins/charts/Chart.min.js"></script>
<script src="plugins/ladda/spin.min.js"></script>
<script src="plugins/ladda/ladda.min.js"></script>
<script src="plugins/jquery-mask-input/jquery.mask.min.js"></script>
<script src="plugins/select2/js/select2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill.js"></script>
<script src="plugins/daterangepicker/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<script src="js/sleek.js"></script>
<script src="js/chart.js"></script>
<script src="js/date-range.js"></script>
<script src="js/map.js"></script>
<script src="js/custom.js"></script>




  </body>
</html>
