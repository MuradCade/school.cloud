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

    <title>Dashboard</title>

    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../../assets/css/style.css" rel="stylesheet" />
    <link href="../../assets/css/student.css" rel="stylesheet" />

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
            <span class="align-middle">Studet Dashboard</span>
          </a>

          <ul class="sidebar-nav">
            <li class="sidebar-item active">
              <a class="sidebar-link" href="index.php">
                <i class="align-middle" data-feather="sliders"></i>
                <span class="align-middle">Dashboard</span>
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
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="setting.php"
                    ><i class="align-middle me-1" data-feather="settings"></i>
                    Settings & Privacy</a
                  >
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Logout</a>
                </div>
              </li>
            </ul>
          </div>
        </nav>

        <main class="content">
          <div class="container-fluid p-0 d-flex align-items-center justify-content-between mb-2">
            <p class= "mb-3"><span style="font-size:14px; color:gray;"><strong>Dashboard</strong></p>
          </div>
          <div class="card-footer mt-2" id="itemhide">
              


              <!-- table of data -->
              <div class="mt-2">

          <!-- display student data -->
<div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item semesters">
        <a class="nav-link active" href="index.php" id="semester-title">Form1</a>
      </li>
      <li class="nav-item semesters">
        <a class="nav-link" href="form2.php" id="semester-title">Form2</a>
      </li>
      <li class="nav-item semesters">
        <a class="nav-link" href="form3.php" id="semester-title">Form3</a>
      </li>
      <li class="nav-item semesters">
        <a class="nav-link  text-info" href="form4.php" id="semester-title" style="background-color:#dcd7d7 !important;">Form4</a>
      </li>
    </ul>
  </div>
  <div class="card-body">
  <table class="table table-striped  table-bordered" style="border:3px !important;">
  <thead>
    <tr>
      <th scope="col" class="titles">Courses</th>
      <th scope="col" class="titles">Mid</th>
      <th scope="col" class="titles">Final</th>
      <th scope="col" class="titles">Total</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Eng</th>
      <td>50</td>
      <td>60</td>
      <td>110</td>
    </tr>
    <tr>
      <th scope="row">Arabic</th>
      <td>40</td>
      <td>60</td>
      <td>100</td>
    </tr>
    <tr>
      <th scope="row">Somali</th>
      <td>80</td>
      <td>20</td>
      <td>100</td>
    </tr>
  </tbody>
</table>
  </div>
</div>
        </div>
        <!-- end table -->
      </div>
      <div class="container" id="addteacherinfo" style='display:none'>
        <div class="card-footer rounded">
          <p class=' h5 font-bold' style="line-height:2; text-transform:uppercase;">Add Class Information</p>
        
        <!-- teacher form -->
        <div class="card-footer">
        
        </div>
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
    <script src="../../assets/js/main.js"></script>
    
  </body>
</html>
