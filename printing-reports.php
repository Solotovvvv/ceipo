<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
  data-assets-path="plugins/assets/" data-template="vertical-menu-template-free">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Business Dashboard</title>
  <meta name="description" content="">
  <link
  href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
  rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="plugins/assets/vendor/fonts/boxicons.css">
  <link rel="stylesheet" href="plugins/assets/vendor/css/core.css" class="template-customizer-core-css">
  <link rel="stylesheet" href="plugins/assets/vendor/css/theme-default.css" class="template-customizer-theme-css">
  <link rel="stylesheet" href="plugins/assets/css/demo.css">
  <link rel="stylesheet" href="plugins/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css">
  <link rel="icon" type="image/x-icon" href="plugins/assets/img/favicon/favicon.ico">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <script src="plugins/assets/vendor/js/helpers.js"></script>
    <script src="plugins/assets/js/config.js"></script>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
            <div class="app-brand demo">
              <a href="index.html" class="app-brand-link">
                <span class="app-brand-logo demo">
                  <img src="plugins/assets/img/avatars/buds-logo.png" alt="" class="brand-image" width="50" height="50">
                </span>
                <span class="text-uppercase text-white app-brand-text demo menu-text fw-bolder ms-2">CEIPO</span>
              </a>
                <a href="javascript:void(0);"
                    class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                    <i class="bx bx-chevron-left bx-sm align-middle"></i>
                </a>
            </div>
            <div class="menu-inner-shadow"></div>
            <ul class="menu-inner py-1">
              <li class="menu-header text-uppercase">
              </li>
    
              <li class="menu-item">
                <a href="index.php" class="menu-link">
                  <i class="menu-icon tf-icons bx bxs-dashboard"></i>
                  <div data-i18n="Analytics">Dashboard</div>
                </a>
              </li>
    
    
              <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                  <i class="menu-icon tf-icons bx bxs-buildings"></i>
                  <div data-i18n="Layouts">Business Application</div>
                </a>
    
                <ul class="menu-sub list-inline">
                  <li class="list-inline-block menu-item">
                    <a href="approval-registration.php" class="menu-link">
                      <div data-i18n="Without navbar">Approval of Registration</div>
                    </a>
                  </li>
                  <li class="list-inline-block menu-item">
                    <a href="business-applicant-status.php" class="menu-link">
                      <div data-i18n="Without menu">Business Applicant Status</div>
                    </a>
                  </li>
                </ul>
              </li>
    
    
              <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                  <i class="menu-icon tf-icons bx bxs-category"></i>
                  <div data-i18n="Layouts">Business Categories</div>
                </a>
    
                <ul class="menu-sub">
                  <li class="menu-item">
                    <a href="top-business.php" class="menu-link">
                      <div data-i18n="Without menu">Top 10 Business Category</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="business-category.php" class="menu-link">
                      <div data-i18n="Without navbar">Buisness Category </div>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="menu-item">
                <a href="viewing-business.php" class="menu-link">
                  <i class="menu-icon tf-icons bx bxs-search"></i>
                  Searching Business
                </a>
              </li>
    
              <li class="menu-item">
                <a href="business-profile.php" class="menu-link">
                  <i class="menu-icon tf-icons bx bxs-user"></i>
                  <div data-i18n="Analytics">Profile of Business</div>
                </a>
              </li>
              <li class="menu-item active">
                <a href="printing-reports.php" class="menu-link">
                  <i class="menu-icon tf-icons bx bxs-report"></i>
                  <div data-i18n="Analytics">Reports</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="posting-activities.php" class="menu-link">
                  <i class="menu-icon tf-icons bx bxs-edit"></i>
                  <div data-i18n="Analytics">Posting Activities/Events</div>
                </a>
              </li>
            </ul>
        </aside>
      <div class="layout-page">
        <nav
          class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
          id="layout-navbar">
          <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
              <i class="bx bx-menu bx-sm"></i>
            </a>
          </div>
          <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
            <ul class="navbar-nav flex-row align-items-center ms-auto">
              <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                  <div class="avatar avatar-online">
                    <img src="plugins/assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                  </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li>
                    <a class="dropdown-item" href="#">
                      <div class="d-flex">
                        <div class="flex-shrink-0 me-3">
                          <div class="avatar avatar-online">
                            <img src="plugins/assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                          </div>
                        </div>
                        <div class="flex-grow-1">
                          <span class="fw-semibold d-block">John Doe</span>
                          <small class="text-muted">Admin</small>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <div class="dropdown-divider"></div>
                  </li>
                  <li>
                    <a class="dropdown-item" href="auth-login-basic.php">
                      <i class="bx bx-power-off me-2"></i>
                      <span class="align-middle">Log Out</span>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
    <hr>

      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Reports</h3>
                  <div class="d-grid gap- d-sm-flex justify-content-md-end">
                    <button class="btn btn-success me-sm-2" type="button"><i class="bx bx-printer"></i> Print</button>
                  </div>
                  <hr>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table id="Ajax1" class="table table-bordered table-hover">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Rendering engine</th>
                          <th>Browser</th>
                          <th>Platform(s)</th>
                          <th>Engine version</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th>#</th>
                          <td>Trident</td>
                          <td>Internet
                            Explorer 4.0
                          </td>
                          <td>Win 95+</td>
                          <td> 4</td>
                        </tr>
                        <tr>
                          <th>#</th>
                          <td>Trident</td>
                          <td>Internet
                            Explorer 5.0
                          </td>
                          <td>Win 95+</td>
                          <td>5</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    

  <script src="plugins/assets/vendor/libs/jquery/jquery.js"></script>
  <script src="plugins/assets/vendor/js/bootstrap.js"></script>
  <script src="plugins/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
  <script src="plugins/assets/vendor/js/menu.js"></script>
  <script src="plugins/assets/js/main.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready(function () {
        $('#Ajax1').DataTable();
      });
    </script>

</body>
</html>