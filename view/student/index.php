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
        <a class="nav-link active" href="index.php">Result</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="setting.php">Setting</a>
      </li>
    </ul>
   <a href="#" class="btn btn-primary">Logout</a>
  </div>
</nav>


<!-- display student data -->
<div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link active" href="index.php">Form1</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="form2.php">Form2</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="form3.php">Form3</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="form4.php">Form4</a>
      </li>
    </ul>
  </div>
  <div class="card-body">
  <table class="table table-striped  table-bordered table-lg">
  <thead>
    <tr class="table-secondary">
      <th scope="col" class="titles">Courses</th>
      <th scope="col" class="titles">Mid</th>
      <th scope="col" class="titles">Final</th>
      <th scope="col" class="titles">Total</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Eng</th>
      <td>40</td>
      <td>60</td>
      <td>160</td>
    </tr>
    <tr>
      <th scope="row">Arabic</th>
      <td>40</td>
      <td>60</td>
      <td>160</td>
    </tr>
    <tr>
      <th scope="row">Somali</th>
      <td>40</td>
      <td>60</td>
      <td>160</td>
    </tr>
  </tbody>
</table>
  </div>
</div>
<script src="../../assets/js/bootstrap.bundle.min.js"></script>
<script src="../../assets/js/jquery.js"></script>


	<!--# Footer #-->
</body>
</html>