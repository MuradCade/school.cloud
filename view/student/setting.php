<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../../assets/css/student.css" rel="stylesheet" />
    <title>Dashboard</title>
</head>
<body><nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#" style="font-weight:bold;">SMS</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav mx-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Result</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="setting.php">Setting</a>
      </li>
    </ul>
   <a href="#" class="btn btn-primary">Logout</a>
  </div>
</nav>
<!-- profile -->

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
                <button class="btn btn-secondary btn-lg">Update</button>
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

<script src="../../assets/js/bootstrap.bundle.min.js"></script>
<script src="../../assets/js/jquery.js"></script>


	<!--# Footer #-->
</body>
</html>