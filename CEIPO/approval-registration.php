<?php 
session_start();
if(empty( $_SESSION['ownerId'] )){
header('Location: ../index.php'); // Redirect to the login page if ownerId is not set
    exit; 
}
?>

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

<style>
        /* Custom CSS */
        .stepper-container {
            text-align: center;
        }

        .stepper-content {
            display: none;
        }

        .stepper-content.active {
            display: block;
        }

        .stepper-content {
            border: 1px solid gray;
            padding: 1rem;
        }

        .progress {
            margin-top: 1rem;
        }

        .progress-bar {
            width: 0%;
            height: 20px;
            background-color: #007bff;
        }
    </style>

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
    
    
              <li class="menu-item open active">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                  <i class="menu-icon tf-icons bx bxs-buildings"></i>
                  <div data-i18n="Layouts">Business Application</div>
                </a>
    
                <ul class="menu-sub list-inline active">
                  <li class="list-inline-block menu-item active">
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
                            <img src="plugins/assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                          </div>
                        </div>
                        <div class="flex-grow-1">
                        <span class="fw-semibold d-block"><?php echo $_SESSION['lname'].', '.$_SESSION['fname'] ?></span>
                          <small class="text-muted"><?php echo $_SESSION['userTypeDesc'] ?></small>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <div class="dropdown-divider"></div>
                  </li>
                  <li>
                    <a class="dropdown-item" href="../logout.php">
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
                  <h3 class="card-title">Approval of Registration</h3>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table id="approval_tbl" class="table table-bordered table-hover">
                      <thead>
                        <tr>
                          <th>Company Name</th>
                          <th>Owner</th>
                          <th>Category</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                    </table>
          </div>
        </div>
      </section>
    </div>

             <!-- modal view  -->
             <div class="modal fade" id="view" tabindex="-1" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="modalCenterTitle">Business Applicant</h5>
                            <button
                              type="button"
                              class="btn-close"
                              data-bs-dismiss="modal"
                              aria-label="Close"
                            ></button>
                          </div>
                          <div class="modal-body">
                                <div class="stepper-container">
                                    <!-- Step 1 -->
                                    <div class="stepper-content active" id="step1">
                                        <h3>DETAILS</h3>
                                        <div class="row">
                                                <div class="col mb-3">
                                                  <label for="nameWithTitle" class="form-label">Business Name</label>
                                                  <input
                                                    type="text"
                                                    id="business_name"
                                                    class="form-control"
                                                    placeholder="Enter Name"
                                                    readonly
                                                  />
                                                </div>
                                                <div class="col mb-3">
                                                  <label for="nameWithTitle" class="form-label">Business Branch</label>
                                                  <input
                                                    type="text"
                                                    id="branch"
                                                    class="form-control"
                                                    placeholder="Enter Name"
                                                    readonly
                                                  />
                                                </div>

                                                <div class="col mb-3">
                                                  <label for="nameWithTitle" class="form-label">Cardinal Location</label>
                                                  <input
                                                    type="text"
                                                    id="cardinal_location"
                                                    class="form-control"
                                                    placeholder="Enter Name"
                                                    readonly
                                                  />
                                                </div>
                                              </div>

                                              <div class="row">
                                                <div class="col mb-3">
                                                  <label for="nameWithTitle" class="form-label">Business Category</label>
                                                  <input
                                                    type="text"
                                                    id="category"
                                                    class="form-control"
                                                    placeholder="Enter Name"
                                                    readonly
                                                  />
                                                </div>
                                                <div class="col mb-3">
                                                  <label for="nameWithTitle" class="form-label">Business Sub-Category</label>
                                                  <input
                                                    type="text"
                                                    id="sub_category"
                                                    class="form-control"
                                                    placeholder="Enter Name"
                                                    readonly
                                                  />
                                                </div>                            
                                              </div>


                                              <div class="row">
                                                <div class="col mb-3">
                                                  <label for="nameWithTitle" class="form-label">Business Owner</label>
                                                  <input
                                                    type="text"
                                                    id="owner"
                                                    class="form-control"
                                                    placeholder="Enter Name"
                                                    readonly
                                                  />
                                                </div>
                                                <div class="col mb-3">
                                                  <label for="nameWithTitle" class="form-label">Established</label>
                                                  <input
                                                    type="text"
                                                    id="date"
                                                    class="form-control"
                                                    placeholder="Enter Name"
                                                    readonly
                                                  />
                                                </div>  

                                                <div class="col mb-3">
                                                  <label for="nameWithTitle" class="form-label">Opening-Closing Hours</label>
                                                  <input
                                                    type="text"
                                                    id="hours_operated"
                                                    class="form-control"
                                                    placeholder="Enter Name"
                                                    readonly
                                                  />
                                                </div>    
                                                
                                              </div>

                                              <div class="row">
                                                <div class="col mb-3">
                                                  <label for="nameWithTitle" class="form-label">Address</label>
                                                  <input
                                                    type="text"
                                                    id="address"
                                                    class="form-control"
                                                    placeholder="Enter Name"
                                                    readonly
                                                  />
                                                </div>
                                                <div class="col mb-3">
                                                  <label for="nameWithTitle" class="form-label">Barangay</label>
                                                  <input
                                                    type="text"
                                                    id="barangay"
                                                    class="form-control"
                                                    placeholder="Enter Name"
                                                    readonly
                                                  />
                                                </div>  

                                                <div class="col mb-3">
                                                  <label for="nameWithTitle" class="form-label">Zone</label>
                                                  <input
                                                    type="text"
                                                    id="zone"
                                                    class="form-control"
                                                    placeholder="Enter Name"
                                                    readonly
                                                  />
                                                </div>    
                                              </div>
                                      </div>

                  <!-- Step 2 -->
                  <div class="stepper-content" id="step2">
                      <h3>Brgy Clearance</h3>
                      <img id="busBrgyClearanceImage" src="" alt="Barangay Clearance" style="max-width: 100%; max-height: 100%; width: auto; height: auto;">
                      <p class="no-image-text" style="display: none;">No requirements found</p>
                      <!-- Other content for Step 2 here -->
                  </div>

                  <!-- Step 3 -->
                  <div class="stepper-content" id="step3">
                      <h3>DTI Permit</h3>
                      <img id="busDtiPermitImage" src="" alt="DTI Permit" style="max-width: 100%; max-height: 100%; width: auto; height: auto;">
                      <p class="no-image-text" style="display: none;">No requirements found</p>
                      <!-- Other content for Step 3 here -->
                  </div>

                  <!-- Step 4 -->
                  <div class="stepper-content" id="step4">
                      <h3>Sanitary Permit</h3>
                      <img id="busSanitaryPermitImage" src="" alt="Sanitary Permit" style="max-width: 100%; max-height: 100%; width: auto; height: auto;">
                      <p class="no-image-text" style="display: none;">No requirements found</p>
                      <!-- Other content for Step 4 here -->
                  </div>

                  <!-- Step 5 -->
                  <div class="stepper-content" id="step5">
                      <h3> Cedula </h3>
                      <img id="busCedulaImage" src="" alt="Cedula" style="max-width: 100%; max-height: 100%; width: auto; height: auto;">
                      <p class="no-image-text" style="display: none;">No requirements found</p>
                      <!-- Other content for Step 5 here -->
                  </div>

                  <!-- Step 6 -->
                  <div class="stepper-content" id="step6">
                      <h3>Mayors Permit</h3>
                      <img id="busMayorPermitImage" src="" alt="Mayor's Permit" style="max-width: 100%; max-height: 100%; width: auto; height: auto;">
                      <p class="no-image-text" style="display: none;">No requirements found</p>
                      <!-- Other content for Step 6 here -->
                  </div>


                  <!-- Step 7-->
                  <div class="stepper-content" id="step7">
                      <h3>Status</h3>
                              <div class="row">
                                <div class="col mb-3">
                                  <label for="nameWithTitle" class="form-label">Status</label>
                                  <select id="status" class="form-select">
                                    <option value="" disabled selected>Select</option>
                                    <option value="1">PASSED</option>
                                    <option value="3">REMARKS</option>
                                    <option value="2" style="display: none;">Pending</option>
                                  </select>
                                </div>
                            </div>

                            
                            <div class="row" id="remarksRow">
                                <div class="col mb-3">
                                  <label for="nameWithTitle" class="form-label">Enter a Remarks</label>
                                  <input
                                    type="text"
                                    id="remarks"
                                    class="form-control"
                                    placeholder="Enter Name"
                                  />
                                   </div>
                                </div>

  
                  </div>          
                    </div>                                                                 
                  <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>          
           
                      </div>
                          <div class="modal-footer">
                          <input type="hidden" id="hiddendata">
                          <button type="button" class="btn btn-primary" id="prevStep">Previous</button>
                            <button type="button" class="btn btn-primary" id="nextStep">Next</button>                            
                           
                            <button type="button" class="btn btn-success" data-dismiss="modal" id="saveChangesButton"  style="display: none;"
                        onclick="update()">Save changes</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>




                 
                  
               </div>
           </div>

             <!-- blockchain modal  -->
             <div class="modal fade" id="blockchain" tabindex="-1" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="modalCenterTitle">Business Applicant</h5>
                            <button
                              type="button"
                              class="btn-close"
                              data-bs-dismiss="modal"
                              aria-label="Close"
                            ></button>
                          </div>
                          <div class="modal-body">
                                <div class="stepper-container">
                                
                                        <div class="row">
                                                <div class="col mb-3">
                                                  <label for="nameWithTitle" class="form-label">Business Name</label>
                                                  <input
                                                    type="text"
                                                    id="bc_businessname"
                                                    class="form-control"
                                                    placeholder="Enter Name"
                                                    readonly
                                                  />
                                                </div>
                                                <div class="col mb-3">
                                                  <label for="nameWithTitle" class="form-label">Business Branch</label>
                                                  <input
                                                    type="text"
                                                    id="bc_branch"
                                                    class="form-control"
                                                    placeholder="Enter Name"
                                                    readonly
                                                  />
                                                </div>
                                               
                                                <div class="col mb-3">
                                                  <label for="nameWithTitle" class="form-label">Owner</label>
                                                  <input
                                                    type="text"
                                                    id="bc_owner"
                                                    class="form-control"
                                                    placeholder="Enter Name"
                                                    readonly
                                                  />
                                                </div>


                                                <div class="row">
                                                <div class="col mb-3">
                                                  <label for="nameWithTitle" class="form-label">BRGY CLEARANCE</label>
                                                  <input
                                                    type="text"
                                                    id="bc_clearance"
                                                    class="form-control"
                                                    placeholder="Enter Name"
                                                    readonly
                                                  />
                                                </div>
                                                <div class="col mb-3">
                                                  <label for="nameWithTitle" class="form-label">DTI PERMIT</label>
                                                  <input
                                                    type="text"
                                                    id="bc_dti"
                                                    class="form-control"
                                                    placeholder="Enter Name"
                                                    readonly
                                                  />
                                                </div>

                                                <div class="col mb-3">
                                                  <label for="nameWithTitle" class="form-label">Sanitary</label>
                                                  <input
                                                    type="text"
                                                    id="bc_sanitary"
                                                    class="form-control"
                                                    placeholder="Enter Name"
                                                    readonly
                                                  />
                                                </div>
                                               
                                                
            
                                              </div>



                                              <div class="row">
                                                <div class="col mb-3">
                                                  <label for="nameWithTitle" class="form-label">Cedula</label>
                                                  <input
                                                    type="text"
                                                    id="bc_cedula"
                                                    class="form-control"
                                                    placeholder="Enter Name"
                                                    readonly
                                                  />
                                                </div>
                                                <div class="col mb-3">
                                                  <label for="nameWithTitle" class="form-label">Mayors Permit</label>
                                                  <input
                                                    type="text"
                                                    id="bc_permit"
                                                    class="form-control"
                                                    placeholder="Enter Name"
                                                    readonly
                                                  />
                                                </div>
                                               
                                                
                                              </div>
                      </div>
                          <div class="modal-footer">
                          <input type="text" id="hiddendata1">
                                           
                           
                            <button type="button" class="btn btn-success" data-dismiss="modal"
                        onclick="Save()">Save changes</button>
                          </div>
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
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script>
$(document).ready(function () {
    


        $('#approval_tbl').DataTable({
                'serverside': true,
                'processing': true,
                'paging': true,
                "columnDefs": [
                    { "className": "dt-center", "targets": "_all" },
                ],
                'ajax': {
                    'url': 'Registration_approval_tbl.php',
                    'type': 'post',

                },
            });
    
                      
                            var currentStep = 1;
                            // Function to show the current step
                            function showStep(step) {
                                // Get the progress bar
                                var progressBar = $(".progress-bar");

                                // Set the progress bar value to the current step
                                progressBar.css("width", ((step - 1) / 6) * 100 + "%");

                                // Hide all stepper content
                                $(".stepper-content").removeClass("active");

                                // Show the current stepper content
                                $("#step" + step).addClass("active");

                                // Disable or enable Previous and Next buttons based on the current step
                                if (step === 1) {
                                    $("#prevStep").prop("disabled", true);
                                } else {
                                    $("#prevStep").prop("disabled", false);
                                }

                                if (step === 7) {
                                    $("#nextStep").hide();
                                    $("#saveChangesButton").show();
                                } else {
                                    $("#nextStep").show();
                                    $("#saveChangesButton").hide();
                                }
                            }
                            // Next button click event
                            $("#nextStep").click(function () {
                                if (currentStep < 7) {
                                    currentStep++;
                                    showStep(currentStep);
                                }
                            });
                            // Previous button click event
                            $("#prevStep").click(function () {
                                if (currentStep > 1) {
                                    currentStep--;
                                    showStep(currentStep);
                                }
                            });
                            // Show the initial step
                            showStep(currentStep);

                            $('#view').on('show.bs.modal', function () {
                                    currentStep = 1; // Reset the step to 1 when the modal is shown
                                    showStep(currentStep);
                            });


                            });

      
//Viewing
function approval_status(views) {
    $('#hiddendata').val(views);
    $.post("approval_update.php", { views: views }, function (data, status) {
        var userid = JSON.parse(data);

        // Update form fields with data
        $('#business_name').val(userid.BusinessName);
        $('#branch').val(userid.BusinessBranch);
        $('#cardinal_location').val(userid.location);
        $('#category').val(userid.category);
        $('#sub_category').val(userid.subCategory);
        $('#owner').val(userid.owner_name);
        $('#date').val(userid.BusinessEstablish);
        $('#hours_operated').val(userid.BusinessOpenHour + ' - ' + userid.BusinessCloseHour);
        $('#address').val(userid.BusinessAddress);
        $('#barangay').val(userid.barangay);
        $('#zone').val(userid.zone);

        $('#status option[value="' + userid.BusinessStatus + '"]').prop('selected', true);
        $('#remarks').val(userid.BusinessRemarks);
       

        var imagePath = '../img/requirements/';
        if (userid.BusinessStatus === "1" || userid.BusinessStatus === "2" ) {
    // Hide the remarks input field
    $('#remarksRow').hide();
    $('#remarks').val("");
    $('#storeButton').prop('disabled', false);
    console.log('Enabling button');

}
 else {
    // Show the remarks input field
    $('#remarksRow').show();
    $('#storeButton').prop('disabled', true);

}

// Add an event listener to the #status element
$('#status').on('change', function () {
    // Check if the selected value is 3 and hide or show the #remarks field accordingly
    if ($(this).val() === '3') {
        $('#remarksRow').show();

    } else {
        $('#remarksRow').hide();
        $('#remarks').val("");
     
    }
});
        // Function to handle displaying images or "No requirements found" text
        function displayImageOrText(imageId, imageName) {
            var $imageElement = $('#' + imageId);

            if (imageName && imageName.trim() !== '') {
                $imageElement.attr('src', imagePath + imageName);
                $imageElement.show();
                $imageElement.siblings('.no-image-text').hide();
            } else {
                $imageElement.hide();
                $imageElement.siblings('.no-image-text').show();
            }
        }

        // Populate and handle images for each step
        displayImageOrText('busBrgyClearanceImage', userid.bus_brgyclearance);
        displayImageOrText('busDtiPermitImage', userid.bus_dtipermit);
        displayImageOrText('busSanitaryPermitImage', userid.bus_sanitarypermit);
        displayImageOrText('busCedulaImage', userid.bus_cedula);
        displayImageOrText('busMayorPermitImage', userid.bus_mayorpermit);

        // Show Step 1 initially
        currentStep = 1;
        showStep(currentStep);
    });

    $('#view').modal("show");
}

// Viewing
          function update() {
  
            var status = $('#status').val()
            var remarks = $('#remarks').val();
            var hiddendata = $('#hiddendata').val();

            $.post("approval_update.php", {
                status: status, hiddendata: hiddendata,remarks:remarks
            }, function (data, status) {
                var jsons = JSON.parse(data);
                status = jsons.status;
                if (status == 'success') {
                    var update = $('#approval_tbl').DataTable().ajax.reload();
                    
                    alert("Saved")
                }
            });
            $('#view').modal("hide");
};



//blockchain-crud

function Store(id){
  $('#hiddendata1').val(id);
  $.post("blockchain_approved.php", { id: id }, function (data,
                status) {
                var userids = JSON.parse(data);
                $('#bc_businessname').val(userids.BusinessName);
                $('#bc_branch').val(userids.BusinessBranch);
                $('#bc_owner').val(userids.owner_name);
                $('#bc_clearance').val(userids.bus_brgyclearance);
                $('#bc_dti').val(userids.bus_dtipermit);
                $('#bc_sanitary').val(userids.bus_sanitarypermit);
                $('#bc_cedula').val(userids.bus_cedula);
                $('#bc_permit').val(userids.bus_mayorpermit);
              });
  $('#blockchain').modal("show");
}


function Save() {
  var hiddendata1 = $('#hiddendata1').val();
  $.post("blockchain_approved.php", {
    hiddendata1: hiddendata1
  }, function (data, status) {
    var jsons = JSON.parse(data);
    status = jsons.status;
    if (status == 'success') {
      var update = $('#approval_tbl').DataTable().ajax.reload();
      alert("Store in blockchain");
    }
  });
  $('#blockchain').modal("hide");
}

        
 </script>




</body>
</html>