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

    <title>Teacher</title>

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

            <li class="sidebar-item active">
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

            <li class="sidebar-item">
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
                <i class="align-middle" data-feather="bar-chart-2"></i>
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
            <p class= "mb-3"><span style="font-size:14px; color:gray;">Dashboard</span> / <strong>Teacher</strong></p>
            <button class="addbtn"><i
                      class="align-middle me-1"
                      data-feather="plus-circle"
                    ></i> Create New</button>
          </div>
          <div class="card-footer mt-2" id="itemhide">
              <div class="">
                <label class='form-label'>Search Particular Teacher</label>
              <input type="text" placeholder='Search Here ..' class='form-control w-full' style="height:40px" id="focus" onkeyup="myFunction()">
              </div>


              <!-- table of data -->
              <div class="table-responsive mt-2">

              <table class="table" id="table">
              <thead>
    <tr>
      <th class="th-sm">Employe Id
      </th>
      <th class="th-sm">Fullname
      </th>
      <th class="th-sm">Phone
      </th>
      <th class="th-sm">Subject Handling
      </th>
      <th class="th-sm">Incharge Class
      </th>
      <th class="th-sm">Action
      </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1403</td>
      <td>John Doe</td>
      <td>087654456789</td>
      <td>Chemistry</td>
      <td>F2</td>
      <td>
        <button class="btn btn-danger mb-1">Delete</button>
        <button class="btn btn-success">Update</button>
      </td>
    </tr>
    <tr>
      <td>1403</td>
      <td>John Doe</td>
      <td>087654456789</td>
      <td>Chemistry</td>
      <td>F2</td>
      <td>
        <button class="btn btn-danger  mb-1">Delete</button>
        <button class="btn btn-success">Update</button>
      </td>
    </tr>
    <tr>
      <td>1403</td>
      <td>John Doe</td>
      <td>087654456789</td>
      <td>Chemistry</td>
      <td>F2</td>
      <td>
        <button class="btn btn-danger  mb-1">Delete</button>
        <button class="btn btn-success">Update</button>
      </td>
    </tr>
            </tbody>
          </table>
        </div>
        <!-- end table -->
      </div>
      <div class="container" id="addteacherinfo" style='display:none'>
        <div class="card-footer rounded">
          <p class=' h5 font-bold' style='line-height:2'>PERSONAL DETAILS</p>
          <div class="d-flex mt-3 ml-20">
            <p style='font-weight:bold; margin-right:120px;'>Profile Image</p>
            <p>Gender</p>
          </div>
          <div class="d-flex ml-20">
          <img src="../../assets/img/user.jpg" alt="user-logo" class='img-md'>
          <div class="d-flex space">
            <p> <input type="checkbox" checked> Male</p>
            <p class='checkbox-space'></p>
            <p> <input type="checkbox"> Female</p></div>
          </div>
        </div>
        
        <!-- teacher form -->
        <div class="card-footer">
        <div class="form-group">
              <form>
             <div class="container">
             <div class="row px-4">
                <div class='col-12 col-md-4  space-100 col-lg-4'>
                 <label class='form-label font-bold-100 text-md-info'>First Name</label>
                  <input type="text" class='form-control' placeholder='Enter Firstname ..'>
                 </div>
                 <div class='col-12 col-md-4 space-100 col-lg-4'>
                 <label class='form-label font-bold-100'>Middle Name</label>
                  <input type="text" class='form-control' placeholder='Enter Middlename ..'>
                 </div>
                 <div class='col-12 col-md-4 space-100 col-lg-3'>
                 <label class='form-label font-bold-100'>Last Name</label>
                  <input type="text" class='form-control' placeholder='Enter Lastname ..'>
                 </div>
                </div>
             </div>
                <!-- second row input field -->
                <div class="container">
                <div class="row  px-4 mt-4">
                <div class='col-12 col-md-4 space-100 col-lg-4 space-100'>
                 <label class='form-label font-bold-100'>Date Of Birth</label>
                  <input type="date" class='form-control'>
                 </div>
                 <div class='col-12 col-md-4 space-100 col-lg-4 space-100'>
                 <label class='form-label font-bold-100'>Phone</label>
                  <input type="tel" class='form-control' placeholder='example 063...'>
                 </div>
                 <div class='col-12 col-md-4 space-100 col-lg-3 space-100'>
                 <label class='form-label font-bold-100'>Qualification</label>
                  <input type="text" class='form-control' placeholder='Enter Qualification...'>
                 </div>
                </div>
                </div>
                <!-- third row input field -->
                <div class="container">
                <div class="row  px-4 mt-4">
                <div class='col-12 col-md-4 space-100 col-lg-4 space-100'>
                 <label class='form-label font-bold-100'>Current Position</label>
                  <input type="text" class='form-control' placeholder='Enter Current Position...'>
                 </div>
                 <div class='col-12 col-md-4 space-100 col-lg-4 space-100'>
                 <label class='form-label font-bold-100'>Joining Date</label>
                  <input type="date" class='form-control'>
                 </div>
                 <div class='col-12 col-md-4 space-100 col-lg-3 space-100'>
                 <label class='form-label font-bold-100'>Leaving Date</label>
                  <input type="date" class='form-control'>
                 </div>
                </div>
                <div class="row px-4 mt-3">
                <div class='col-12 col-md-4  space-100 col-lg-4'>
                 <label class='form-label font-bold-100 text-md-info'>Subject Handling</label>
                  <input type="text" class='form-control' placeholder='Subject Handling'>
                 </div>
                 <div class='col-12 col-md-4 space-100 col-lg-4'>
                 <label class='form-label font-bold-100'>Incharge Class</label>
                  <input type="text" class='form-control' placeholder='Incharge Class'>
                 </div>
                 <div class='col-12 col-md-4 space-100 col-lg-3'>
                 <label class='form-label font-bold-100'>Employe Code</label>
                  <input type="text" class='form-control' placeholder='Enter Eploye Id'>
                 </div>
                </div>
                <div class="row px-4 mt-3">
                <div class='col-12 col-md-4  space-100 col-lg-4'>
                 <label class='form-label font-bold-100 text-md-info'>Street Address</label>
                  <input type="text" class='form-control' placeholder='Street Address'>
                 </div>
                 <div class='col-12 col-md-4 space-100 col-lg-4'>
                 <label class='form-label font-bold-100'>City Name</label>
                  <input type="text" class='form-control' placeholder='City Name'>
                 </div>
                 <div class='col-12 col-md-4 space-100 col-lg-3'>
                 <label class='form-label font-bold-100'>Country</label>
                  <input type="text" class='form-control' placeholder='Country'>
                 </div>
                </div>
                <div class="px-4">
                <button class='btn btn-primary mt-4 w-full px-5'>Save</button>
                </div>
              </div>
              </form>
            </div>
        </div>
        <!-- extre space -->
        <div class="card-footer"></div>
        <br>
        <!-- account Details -->
        <div class="card-footer" id="addteacherasuser" style='display:none'>
          <p Class='h5 font-bold line-1'>ACCOUNT INFORMATION</p>
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
          </div>
        </div>

        </main>
        <?php
          include_once('footer.php');
       ?>
       </div>
    </div>

    <script src="../../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../../assets/js/main.js"></script>
    <script defer>
        // filter table by search
        function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("focus");
  filter = input.value.toUpperCase();
  table = document.getElementById("table");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
    </script>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        var ctx = document
          .getElementById("chartjs-dashboard-line")
          .getContext("2d");
        var gradient = ctx.createLinearGradient(0, 0, 0, 225);
        gradient.addColorStop(0, "rgba(215, 227, 244, 1)");
        gradient.addColorStop(1, "rgba(215, 227, 244, 0)");
        // Line chart
        new Chart(document.getElementById("chartjs-dashboard-line"), {
          type: "line",
          data: {
            labels: [
              "Jan",
              "Feb",
              "Mar",
              "Apr",
              "May",
              "Jun",
              "Jul",
              "Aug",
              "Sep",
              "Oct",
              "Nov",
              "Dec",
            ],
            datasets: [
              {
                label: "Users Growth",
                fill: true,
                backgroundColor: gradient,
                borderColor: window.theme.primary,
                data: [
                  2115, 1562, 1584, 1892, 1587, 1923, 2566, 2448, 2805, 3438,
                  2917, 3327,
                ],
              },
            ],
          },
          options: {
            maintainAspectRatio: false,
            legend: {
              display: false,
            },
            tooltips: {
              intersect: false,
            },
            hover: {
              intersect: true,
            },
            plugins: {
              filler: {
                propagate: false,
              },
            },
            scales: {
              xAxes: [
                {
                  reverse: true,
                  gridLines: {
                    color: "rgba(0,0,0,0.0)",
                  },
                },
              ],
              yAxes: [
                {
                  ticks: {
                    stepSize: 1000,
                  },
                  display: true,
                  borderDash: [3, 3],
                  gridLines: {
                    color: "rgba(0,0,0,0.0)",
                  },
                },
              ],
            },
          },
        });
      });
    </script>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        // Pie chart
        new Chart(document.getElementById("chartjs-dashboard-pie"), {
          type: "pie",
          data: {
            labels: ["Chrome", "Firefox", "IE"],
            datasets: [
              {
                data: [4306, 3801, 1689],
                backgroundColor: [
                  window.theme.primary,
                  window.theme.warning,
                  window.theme.danger,
                ],
                borderWidth: 5,
              },
            ],
          },
          options: {
            responsive: !window.MSInputMethodContext,
            maintainAspectRatio: false,
            legend: {
              display: false,
            },
            cutoutPercentage: 75,
          },
        });
      });
    </script>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        // Bar chart
        new Chart(document.getElementById("chartjs-dashboard-bar"), {
          type: "bar",
          data: {
            labels: [
              "Jan",
              "Feb",
              "Mar",
              "Apr",
              "May",
              "Jun",
              "Jul",
              "Aug",
              "Sep",
              "Oct",
              "Nov",
              "Dec",
            ],
            datasets: [
              {
                label: "This year",
                backgroundColor: window.theme.primary,
                borderColor: window.theme.primary,
                hoverBackgroundColor: window.theme.primary,
                hoverBorderColor: window.theme.primary,
                data: [54, 67, 41, 55, 62, 45, 55, 73, 60, 76, 48, 79],
                barPercentage: 0.75,
                categoryPercentage: 0.5,
              },
            ],
          },
          options: {
            maintainAspectRatio: false,
            legend: {
              display: false,
            },
            scales: {
              yAxes: [
                {
                  gridLines: {
                    display: false,
                  },
                  stacked: false,
                  ticks: {
                    stepSize: 20,
                  },
                },
              ],
              xAxes: [
                {
                  stacked: false,
                  gridLines: {
                    color: "transparent",
                  },
                },
              ],
            },
          },
        });
      });
    </script>

    <script>
      document.addEventListener("DOMContentLoaded", function () {
        var date = new Date(Date.now() - 5 * 24 * 60 * 60 * 1000);
        var defaultDate =
          date.getUTCFullYear() +
          "-" +
          (date.getUTCMonth() + 1) +
          "-" +
          date.getUTCDate();
        document.getElementById("datetimepicker-dashboard").flatpickr({
          inline: true,
          prevArrow: '<span title="Previous month">&laquo;</span>',
          nextArrow: '<span title="Next month">&raquo;</span>',
          defaultDate: defaultDate,
        });
      });
    </script>
  </body>
</html>
