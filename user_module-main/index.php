<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BuDS User Panel</title>
    <link rel="icon" href="dist/img/ucc-logo.png">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bs-stepper@1.7.0/dist/css/bs-stepper.min.css">
    <link rel="stylesheet" href="plugins/general/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
    <style>
        #active {
            background: #494E53;
        }

        #add-question {
            width: 8rem;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">

    <div class="wrapper">
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="../logout.php">Logout</a>
                </li>
            </ul>
        </nav>

        <aside class="main-sidebar sidebar-dark-success elevation-4">
            <a href="https://ucc-caloocan.edu.ph/" class="brand-link" target="_blank">
                <img src="dist/img/buds-logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                <span class="brand-text font-weight-light">USER NAME</span>
            </a>
            <div class="sidebar">
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item">
                            <a href="index.php" class="nav-link" id="active">
                                <i class="nav-icon fa-regular fa-file"></i>
                                <p>Resume</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="nav-icon fa-solid fa-location-dot"></i>
                                <p>Near Business</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="nav-icon fa-solid fa-magnifying-glass"></i>
                                <p>Search Business</p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>

        <div class="container mt-5">
            <div class="card p-3 bg-light">
                <div class="card">
                    <div class="p-4 bg-white shadow-sm">
                        <div id="stepper1" class="bs-stepper">
                            <div class="bs-stepper-header" role="tablist">
                                <div class="step" data-target="#test-l-1">
                                    <button type="button" class="step-trigger" role="tab" id="stepper1trigger1"
                                        aria-controls="test-l-1">
                                        <span class="bs-stepper-circle">1</span>
                                        <span class="bs-stepper-label">Basic Information</span>
                                    </button>
                                </div>
                                <div class="bs-stepper-line"></div>
                                <div class="step" data-target="#test-l-2">
                                    <button type="button" class="step-trigger" role="tab" id="stepper1trigger2"
                                        aria-controls="test-l-2">
                                        <span class="bs-stepper-circle">2</span>
                                        <span class="bs-stepper-label">Education</span>
                                    </button>
                                </div>
                                <div class="bs-stepper-line"></div>
                                <div class="step" data-target="#test-l-3">
                                    <button type="button" class="step-trigger" role="tab" id="stepper1trigger3"
                                        aria-controls="test-l-3">
                                        <span class="bs-stepper-circle">3</span>
                                        <span class="bs-stepper-label">Experience</span>
                                    </button>
                                </div>
                                <div class="bs-stepper-line"></div>
                                <div class="step" data-target="#test-l-4">
                                    <button type="button" class="step-trigger" role="tab" id="stepper1trigger4"
                                        aria-controls="test-l-4">
                                        <span class="bs-stepper-circle">4</span>
                                        <span class="bs-stepper-label">Skills & Certificates</span>
                                    </button>
                                </div>
                            </div>
                            <div class="bs-stepper-content">
                                <form id="stepperForm"  method="POST" action="submit_resume.php">
                                    <div id="test-l-1" role="tabpanel" class="bs-stepper-pane"
                                        aria-labelledby="stepper1trigger1">

                                        <div>
                                            <h3>Basic Information</h1>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label>First Name</label>
                                                    <input type="text" class="form-control" id="fname" name="fname">
                                                  </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <label>Middle Name</label>
                                                    <input type="text" class="form-control" id="mname" name="mname">
                                                  </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <label>Surname</label>
                                                    <input type="text" class="form-control" id="sname" name="sname">
                                                  </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label>Position</label>
                                                    <input type="text" class="form-control" id="position" name="position">
                                                  </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <label>Email Address</label>
                                                    <input type="text" class="form-control" id="email" name="contacts[]">
                                                  </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <label>Contact Number</label>
                                                    <input type="text" class="form-control" id="contactnumber" name="contacts[]">
                                                  </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="exampleFormControlTextarea1">Home Address</label>
                                                    <input type="text" class="form-control" id="address" name="address">
                                                  </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <label>Linked In</label>
                                                    <input type="text" class="form-control" id="linkedin" name="contacts[]">
                                                  </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label>Objective</label>
                                                    <textarea class="form-control"rows="2" id="summary" name="summary"></textarea>
                                                  </div>
                                            </div>
                                        </div>

                                        
                                        <button  type= "button" class="btn btn-primary" onclick="stepper1.next()">Next</button>
                                    </div>

                                    <div id="test-l-2" role="tabpanel" class="bs-stepper-pane"
                                        aria-labelledby="stepper1trigger2">
                                        <div>
                                            <h3>Education</h1>
                                        </div>
                                            <div class="form-group">
                                                <label>Primary School</label>
                                                <input type="text" class="form-control" id="primary_school" name="schools[]">
                                              </div>
                                        
                                        <div class="row">
                                            <div class="col-8">
                                                <div class="form-group">
                                                    <label>Address</label>
                                                    <input type="text" class="form-control" id="school_address" name="school_address[]">
                                                  </div>
                                            </div>
                                            <div class="col-2">
                                                <div class="form-group">
                                                    <label>From Year</label>
                                                    <input type="text" class="form-control" id="school_sy" name="school_sy[]">
                                                  </div>
                                            </div>
                                        </div>

                                        <br>

                                        <div class="form-group">
                                            <label>Secondary School</label>
                                            <input type="text" class="form-control" id="secondary_school" name="schools[]">
                                            </div> 
                                    <div class="row">
                                        <div class="col-8">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" class="form-control" id="school_address1" name="school_address[]">
                                              </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="form-group">
                                                <label>School Year</label>
                                                <input type="text" class="form-control" id="school_sy1" name="school_sy[]">
                                              </div>
                                        </div>
                                        
                                    </div>

                                    <br>

                                    <div class="form-group">
                                        <label>Senior High Schoool</label>
                                        <input type="text" class="form-control" id="shs_school" name="schools[]">
                                      </div>
                                
                                <div class="row">
                                    <div class="col-8">
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input type="text" class="form-control" id="school_address2" name="school_address[]">
                                          </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="form-group">
                                            <label>School Year</label>
                                            <input type="text" class="form-control" id="school_sy2" name="school_sy[]">
                                          </div>
                                    </div>
                                  
                                </div>

                                <br>

                                <div class="form-group">
                                    <label>College</label>
                                    <input type="text" class="form-control" id="college_school" name="schools[]">
                                  </div>
                            
                            <div class="row">
                                <div class="col-8">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" class="form-control" id="school_address3" name="school_address[]">
                                      </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                    <label>School Year</label>
                                            <input type="text" class="form-control" id="school_sy3" name="school_sy[]">
                                      </div>
                                </div>
                              
                            </div>

                                        <button class="btn btn-secondary" type="button" onclick="stepper1.previous()">Previous</button>
                                        <button class="btn btn-primary"  type="button" onclick="stepper1.next()">Next</button>
                                    </div>
                
                                    <div id="test-l-3" role="tabpanel" class="bs-stepper-pane" aria-labelledby="stepper1trigger3">
            <div>
                <br><h3>Experience</h3>
            </div>
            <!-- Container for experience entries -->
            <div class="experience-entries">
                <!-- Initial experience entry -->
                <div class="experience-entry">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label>Company</label>
                                <input type="text" class="form-control" name="exp_company[]" placeholder="Company">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label>Position</label>
                                <input type="text" class="form-control" name="exp_position[]" placeholder="Position">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Work Description</label>
                        <input type="text" class="form-control" name="work_experience[]" placeholder="Experience">
                    </div>
                    
                    <div class="row">
                        <div class="col-8">
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" class="form-control" name="work_address[]" placeholder="Address">
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="form-group">
                                <label>Year</label>
                                <input type="text" class="form-control" name="exp_year[]" placeholder="Year">
                            </div>
                          
                        </div>
                    </div>
                </div>
            </div>

        <div class="row">
         <div class="col-12 mb-3 d-flex justify-content-end">
        <button class="btn btn-success mr-2" type="button" id="addExperienceButton">Add Another</button>
        <button class="btn btn-danger" type="button" id="removeExperienceButton">Remove</button>
         </div>
</div>
            <button class="btn btn-secondary"type="button" onclick="stepper1.previous()">Previous</button>
            <button class="btn btn-primary"type="button" onclick="stepper1.next()">Next</button>
        </div>

                                    <div id="test-l-4" role="tabpanel" class="bs-stepper-pane" aria-labelledby="stepper1trigger4">
                                <div class="form-group">
                                    <div>
                                        <br><h3>Skills</h3> <!-- Corrected the closing tag for h3 -->
                                    </div>
                                    <div class="row">
                                     
                                                <div class="col-4">
                                                    <div class="form-group skills">
                                                        <label>Skills</label>
                                                        <input type="text" class="form-control" name="skills[]" placeholder="Skills">
                                                        
                                                    </div>
                                                </div>
                                      </div>                                                                     
                                      <button class="btn btn-success mr-2" type="button" id="addSkills">+</button>
                                      <button class="btn btn-danger" type="button" id="removeskills">-</button>                        
                                      <div>                                       
                                    </div>
                                       <br><h3>Certificates</h3> <!-- Corrected the closing tag for h3 -->
                                    <div class="row cert">
                                        <div class="col-10">
                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea class="form-control" name="cert_desc[]" rows="1"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="form-group">
                                                <label>Year</label>
                                                <input type="text" class="form-control" name="cert_year[]" placeholder="Year">
                                            </div>
                                        </div>        
                                    
                                    </div>
                                    <button class="btn btn-success mr-2" type="button" id="add_cert">+</button>
                                    <button class="btn btn-danger" type="button" id="remove_cert">-</button>
                                </div>
                                <button class="btn btn-secondary" type="button" onclick="stepper1.previous()">Previous</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                 </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bs-stepper@1.7.0/dist/js/bs-stepper.min.js"></script>
        <footer class="main-footer">
            <strong>
                &copy; 2023-2024 <a href="#" target="_blank" class="text-muted">Business Directory Systems</a>.
            </strong>
            All rights reserved.
        </footer>
        <aside class="control-sidebar control-sidebar-dark"></aside>
    </div>

    <script src="plugins/jquery/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <script src="dist/js/adminlte.js"></script>
    <script src="plugins/datatables/bootstrap 4/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables/bootstrap 4/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.0/js/bootstrap.min.js"></script>
    <script>


document.addEventListener("DOMContentLoaded", function () {
                
                var stepper1 = new Stepper(document.querySelector('#stepper1'), {
                    linear: true,
                    animation: true
                });
    
                var nextButtons = document.querySelectorAll('.btn-primary');
                nextButtons.forEach(function (button) {
                    button.addEventListener('click', function () {
                        stepper1.next();
                    });
                });
    
                var previousButtons = document.querySelectorAll('.btn-secondary');
                previousButtons.forEach(function (button) {
                    button.addEventListener('click', function () {
                        stepper1.previous();
                    });
                });
            });


    $(document).ready(function () {
                        var addExperienceButton = $("#addExperienceButton");

                        // Add an event listener to the button
                        addExperienceButton.click(function (event) {
                            // Prevent the default button behavior
                            event.preventDefault();

                            // Get the current experience entry
                            var experienceEntry = $(".experience-entry:last");

                            // Clone the experience entry
                            var clonedExperienceEntry = experienceEntry.clone();

                            // Remove the `id` attribute from the cloned experience entry
                            clonedExperienceEntry.removeAttr("id");

                            // Append the cloned experience entry to the experience entries container
                            $(".experience-entries").append(clonedExperienceEntry);

                            // Reset the form fields in the cloned entry (optional)
                            clonedExperienceEntry.find('input[type="text"]').val('');
                        });

                        // Get the button
                        var removeExperienceButton = $("#removeExperienceButton");

                        // Add an event listener to the button
                        removeExperienceButton.click(function (event) {
                            // Prevent the default button behavior
                            event.preventDefault();

                            // Check if there is more than one experience entry before removing
                            var experienceEntries = $(".experience-entry");
                            if (experienceEntries.length > 1) {
                            // Remove the last experience entry
                            experienceEntries.last().remove();
                            }
                        });

                        var addSkillsButton = $("#addSkills");

                        // Add an event listener to the button
                        addSkillsButton.click(function (event) {
                            // Prevent the default button behavior
                            event.preventDefault();

                            // Get the current skills input field
                            var skillsInput = $(".skills:last");

                            // Clone the skills input field
                            var clonedSkillsInput = skillsInput.clone();

                            // Remove the `id` attribute from the cloned skills input field
                            clonedSkillsInput.removeAttr("id");

                            // Append the cloned skills input field after the current skills input field
                            clonedSkillsInput.insertAfter(skillsInput);

                            // Reset the value of the cloned input field (optional)
                            clonedSkillsInput.find("input").val("");
                        });

                        var removeskillsButton = $("#removeskills");

                        // Add an event listener to the button
                        removeskillsButton.click(function (event) {
                            // Prevent the default button behavior
                            event.preventDefault();

                            // Check if there is more than one skills entry before removing
                            var skillsEntries = $(".skills");
                            if (skillsEntries.length > 1) {
                            // Remove the last skills entry
                            skillsEntries.last().remove();
                            }
                        });

                        var addCertButton = $("#add_cert");

                        // Add an event listener to the button
                        addCertButton.click(function (event) {
                            // Prevent the default button behavior
                            event.preventDefault();

                            // Get the current certificate entry
                            var certificateEntry = $(".row.cert:last");

                            // Clone the certificate entry
                            var clonedCertificateEntry = certificateEntry.clone();

                            // Remove the `id` attribute from the cloned certificate entry (if needed)
                            clonedCertificateEntry.removeAttr("id");

                            // Append the cloned certificate entry after the current certificate entry
                            clonedCertificateEntry.insertAfter(certificateEntry);

                            // Reset the values of the cloned inputs (optional)
                            clonedCertificateEntry.find('textarea[name="cert_desc[]"]').val('');
                            clonedCertificateEntry.find('input[name="cert_year[]"]').val('');
                        });

                        var removecert = $("#remove_cert");

                        // Add an event listener to the button
                        removecert.click(function (event) {
                            // Prevent the default button behavior
                            event.preventDefault();

                            // Check if there is more than one skills entry before removing
                            var skillsEntries = $(".row.cert");
                            if (skillsEntries.length > 1) {
                            // Remove the last skills entry
                            skillsEntries.last().remove();
                            }
                        });
                        });


</script>



</body>

</html>