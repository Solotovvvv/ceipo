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
          <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
          </a>
        </div>
        <div class="menu-inner-shadow"></div>
        <ul class="menu-inner py-1">
          <li class="menu-header text-uppercase">
          </li>

          <li class="menu-item active">
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
          <li class="menu-item">
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
                            <img src="plugins/assets/img/avatars/buds-with-text.png" alt
                              class="w-px-40 h-auto rounded-circle" />
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

        <div class="container">
          <div class="row">
            <div class="col-sm-4 col-12 mb-4">
              <div class="card">
                <div class="card-body">
                  <div class="card-title d-flex align-items-center">
                    <div class="ms-2 d-flex flex-column">
                      <span class="fw-semibold d-block mb-1">Business Applicant Status</span>
                      <h1 class="card-title mb-2">150</h1>
                      <small class="text-success fw-bolder">+72.80%</small>
                    </div>
                    <i class="bx bx-loader-alt ms-auto" style="font-size: 90px; color: #355E3B;"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-4 col-12 mb-4">
              <div class="card">
                <div class="card-body">
                  <div class="card-title d-flex align-items-center">
                    <div class="ms-2 d-flex flex-column">
                      <span class="fw-semibold d-block mb-1">Reports</span>
                      <h1 class="card-title mb-2">$12,628</h1>
                      <small class="text-success fw-bolder">+72.80%</small>
                    </div>
                    <i class="bx bx-bar-chart-alt-2 ms-auto" style="font-size: 90px; color: #355E3B;"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-4 col-12 mb-4">
              <div class="card">
                <div class="card-body">
                  <div class="card-title d-flex align-items-center">
                    <div class="ms-2 d-flex flex-column">
                      <span class="fw-semibold d-block mb-1">Registrations</span>
                      <h1 class="card-title mb-2">$12,628</h1>
                      <small class="text-success fw-bolder">+72.80%</small>
                    </div>
                    <i class="bx bx-user-plus ms-auto" style="font-size: 90px; color: #355E3B;"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 col-lg-6 col-xl-6">
              <div class="card card-primary">
                <div class="card-body text-center">
                  <h2 class="card-title" style="font-size: 30px; font-weight: bold;">Bar Chart</h2>
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                      <i class="fas fa-times"></i>
                    </button>
                  </div>
                  <div class="card-body">
                    <div class="chart">
                      <canvas id="barChart" style="height: 250px; max-width: 100%;"></canvas>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-lg-6 col-xl-6">
              <div class="card card-primary">
                <div class="card-body text-center">
                  <h2 class="card-title" style="font-size: 30px; font-weight: bold;">Pie Chart</h2>
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                      <i class="fas fa-times"></i>
                    </button>
                  </div>
                  <div class="card-body">
                    <div class="chart">
                      <canvas id="pieChart" style="height: 291px; max-width: 100%;"></canvas>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>






        <script src="plugins/assets/vendor/libs/jquery/jquery.js"></script>
        <script src="plugins/assets/vendor/js/bootstrap.js"></script>
        <script src="plugins/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
        <script src="plugins/assets/vendor/js/menu.js"></script>
        <script src="plugins/assets/js/main.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>

        <script>
          var ctx = document.getElementById('barChart').getContext('2d');
          var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
              labels: ['Label 1', 'Label 2', 'Label 3', 'Label 4'],
              datasets: [{
                label: 'Data',
                data: [10, 20, 15, 25],
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
              }]
            },
            options: {
              scales: {
                y: {
                  beginAtZero: true
                }
              }
            }
          });
          var ctx = document.getElementById('pieChart').getContext('2d');
          var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
              labels: ['Label 1', 'Label 2', 'Label 3'],
              datasets: [{
                data: [30, 40, 30],
                backgroundColor: ['rgba(255, 99, 132, 0.7)', 'rgba(54, 162, 235, 0.7)', 'rgba(255, 206, 86, 0.7)'],
              }],
            },
            options: {
              responsive: true,
              maintainAspectRatio: false,
            },
          });
        </script>


</body>

</html>