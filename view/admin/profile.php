<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
   

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link rel="shortcut icon" href="img/icons/icon-48x48.png" />

    <link rel="canonical" href="https://demo-basic.adminkit.io/" />

    <title>Setting</title>

    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../../assets/css/style.css" rel="stylesheet" />

    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap"
      rel="stylesheet"
    />
  </head>

  <body>
    <div class="wrapper">
      <nav id="sidebar" class="sidebar js-sidebar">
        <div class="sidebar-content js-simplebar">
          <a class="sidebar-brand" href="index.php">
            <span class="align-middle">Admin Dashboard</span>
          </a>

          <ul class="sidebar-nav">
            <li class="sidebar-item ">
              <a class="sidebar-link" href="index.php">
                <i class="align-middle" data-feather="sliders"></i>
                <span class="align-middle">Dashboard</span>
              </a>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link" href="teacher.php">
                <i class="align-middle" data-feather="user"></i>
                <span class="align-middle">Teachers </span>
              </a>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link" href="student.php">
                <i class="align-middle" data-feather="credit-card"></i>
                <span class="align-middle">Student</span>
              </a>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link"  href="parent.php">
                <i class="align-middle" data-feather="users"></i>
                <span class="align-middle">Parent</span>
              </a>
            </li>

            <li class="sidebar-item ">
              <a class="sidebar-link" href="class.php">
                <i class="align-middle" data-feather="columns"></i>
                <span class="align-middle">Classes</span>
              </a>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link" href="subject.php">
                <i class="align-middle" data-feather="check-square"></i>
                <span class="align-middle">Subject</span>
              </a>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link" href="marks.php">
                <i class="align-middle" data-feather="grid"></i>
                <span class="align-middle">Marks</span>
              </a>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link" href="exam.php">
                <i class="align-middle" data-feather="align-left"></i>
                <span class="align-middle">Exams</span>
              </a>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link" href="student_attendence.php">
                <i class="align-middle" data-feather="coffee"></i>
                <span class="align-middle">Student Attendance</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="setting.php">
                <i class="align-middle" data-feather="settings"></i>
                <span class="align-middle">Setting</span>
              </a>
            </li>
          </ul>
        </div>
      </nav>

      <div class="main">
        <nav class="navbar navbar-expand navbar-light navbar-bg">
          <a class="sidebar-toggle js-sidebar-toggle">
            <i class="hamburger align-self-center"></i>
          </a>

          <div class="navbar-collapse collapse">
            <ul class="navbar-nav navbar-align">
              <li class="nav-item dropdown">
                <a
                  class="nav-icon dropdown-toggle"
                  href="#"
                  id="alertsDropdown"
                  data-bs-toggle="dropdown"
                >
                </a>
              </li>

              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle d-none d-sm-inline-block"
                  href="#"
                  data-bs-toggle="dropdown"
                >
                  <i class="align-middle" data-feather="user"></i>
                  <span class="text-dark">Username</span>
                </a>
                <div class="dropdown-menu dropdown-menu-end ">
                  <a class="dropdown-item " href="profile.php"
                    ><i class="align-middle me-1" data-feather="user"></i>
                    Profile</a
                  >
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="setting.php"
                    ><i class="align-middle me-1" data-feather="settings"></i>
                    Settings & Privacy</a
                  >
                  <a class="dropdown-item" href="https://tayotech-customersupport.netlify.app/" target="_blank"
                    ><i
                      class="align-middle me-1"
                      data-feather="help-circle"
                    ></i>
                    Help Center</a
                  >
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Log out</a>
                </div>
              </li>
            </ul>
          </div>
        </nav>

        <main class="content">
          <div class="container-fluid p-0 d-flex align-items-center justify-content-between mb-2">
            <p class= "mb-3"><span style="font-size:14px; color:gray;">Dashboard</span> / <strong>Profile</strong></p>
         
          </div>
          <div class="card-footer mt-2" id="itemhide">
          <p class=' h5 font-bold' style="line-height:2; text-transform:uppercase;">Profile Settings</p>
        
<section style="background-color: #eee;">
  <div class="container py-5">
    

    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">
            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar"
              class="rounded-circle img-fluid" style="width: 150px;">
            <h5 class="my-2"><strong>Name :</strong> Jondoe</h5>
            <label>Choose Image</label>
            <input type="file" class="form-control">
         
          </div>
        </div>
        <div class="card mb-4 mb-lg-0">
          <div class="card-body p-0">
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">
          <p class="h4 mb-5" style="font-weight:bold !important;">Personal Information</p>

            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Full Name</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><input type="text" class="form-control" value="John Doe"></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><input type="text" class="form-control" value="example@example.com "></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Phone</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><input type="text" class="form-control" value="(097) 234-5678"></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Class</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><input type="text" class="form-control" value="Form 2A"></p>
              </div>
            </div>
            <hr>
            <!-- password change -->
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">School Name</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><input type="text" class="form-control" value="SMS"></p>
              </div>
            </div>
            <hr>
            <div class="col-sm-12 mt-4 text-start">
                <button class="btn btn-success btn-lg">Update</button>
            </div>
          </div>
        </div>
       <!-- change password -->
       <div class="col-lg-12">
        <div class="card mb-4">
          <div class="card-body">
            <p class="h4 mb-5" style="font-weight:bold !important;">Change Password</p>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">New Password</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><input type="text" class="form-control" placeholder="Enter New Password"></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Confirm New Password</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><input type="text" class="form-control" placeholder="Confirm New Password"></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Your Id</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><input type="text" class="form-control" value="08990" readonly></p>
              </div>
            </div>
            <hr>
            <div class="col-sm-12 mt-4 text-start">
                <button class="btn btn-info btn-lg">Submit</button>
            </div>
          </div>
        </div>
          
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
        
    </div>
</div>
</div>
</div>    
  

              <!-- table of data -->
              
        </div>
        <!-- end table -->
      </div>
      <div class="container" id="addteacherinfo" style='display:none'>
        <div class="card-footer rounded">
        
      
        <!-- extre space -->
        <div class="card-footer"></div>
        <br>
        <!-- account Details -->
        <div class="" id="addteacherasuser" style='display:none'>
          <!-- <p Class='h5 font-bold line-1'>ACCOUNT INFORMATION</p>
          <div class="container">
            <div class="form-group">
              <label class='form-label'>Email Address <span class='text-danger'>*</span></label>
              <input type="email" class='form-control mb-2' placeholder='Enter Email...'>
              <label class='form-label'>Username <span class='text-danger'>*</span></label>
              <input type="text" class='form-control mb-2' placeholder='Enter Username...'>
              <label class='form-label'>Password <span class='text-danger'>*</span></label>
              <input type="password" class='form-control mb-2' placeholder='Enter Password...'>
              <label class='form-label'>Confirm Password <span class='text-danger'>*</span></label>
              <input type="email" class='form-control' placeholder='Confirm Password...'>
              <button class='btn btn-success mt-2'>Add New User</button>
            </div>
          </div> -->
        </div>

        </main>
        <?php
          include_once('footer.php');
       ?>
       </div>
    </div>

    <script src="../../assets/js/bootstrap.bundle.min.js"></script>
  
  </body>
</html>
