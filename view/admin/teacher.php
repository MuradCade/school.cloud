<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta
      name="description"
      content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5"
    />
    <meta name="author" content="AdminKit" />
    <meta
      name="keywords"
      content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web"
    />

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link rel="shortcut icon" href="img/icons/icon-48x48.png" />

    <link rel="canonical" href="https://demo-basic.adminkit.io/" />

    <title>AdminKit Demo - Bootstrap 5 Admin Template</title>

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
          <a class="sidebar-brand" href="index.html">
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
              <a class="sidebar-link" href="pages-profile.html">
                <i class="align-middle" data-feather="user"></i>
                <span class="align-middle">Teachers </span>
              </a>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link" href="pages-sign-in.html">
                <i class="align-middle" data-feather="credit-card"></i>
                <span class="align-middle">Student</span>
              </a>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link" href="pages-sign-up.html">
                <i class="align-middle" data-feather="users"></i>
                <span class="align-middle">Parent</span>
              </a>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link" href="ui-buttons.html">
                <i class="align-middle" data-feather="columns"></i>
                <span class="align-middle">Classes</span>
              </a>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link" href="ui-forms.html">
                <i class="align-middle" data-feather="check-square"></i>
                <span class="align-middle">Subject</span>
              </a>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link" href="ui-cards.html">
                <i class="align-middle" data-feather="grid"></i>
                <span class="align-middle">Marks</span>
              </a>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link" href="ui-typography.html">
                <i class="align-middle" data-feather="align-left"></i>
                <span class="align-middle">Exams</span>
              </a>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link" href="icons-feather.html">
                <i class="align-middle" data-feather="coffee"></i>
                <span class="align-middle">Student Attendance</span>
              </a>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link" href="charts-chartjs.html">
                <i class="align-middle" data-feather="bar-chart-2"></i>
                <span class="align-middle">Notify</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="charts-chartjs.html">
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
                <div class="dropdown-menu dropdown-menu-end">
                  <a class="dropdown-item" href="pages-profile.html"
                    ><i class="align-middle me-1" data-feather="user"></i>
                    Profile</a
                  >
                  <a class="dropdown-item" href="#"
                    ><i class="align-middle me-1" data-feather="pie-chart"></i>
                    Analytics</a
                  >
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="index.html"
                    ><i class="align-middle me-1" data-feather="settings"></i>
                    Settings & Privacy</a
                  >
                  <a class="dropdown-item" href="#"
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
          <div class="container-fluid p-0 d-flex align-items-center justify-content-between">
            <h1 class="h3 mb-3"><strong>Teacher</strong></h1>
            <button class="addbtn"><i
                      class="align-middle me-1"
                      data-feather="plus-circle"
                    ></i> Create New</button>
          </div>
        </main>

        <?php
          include_once('footer.php');
       ?>
       </div>
    </div>

    <script src="../../assets/js/bootstrap.bundle.min.js"></script>

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
