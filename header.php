<?php 
session_start();
include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Flood Hotspots Monitoring System</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="" rel="icon">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.1.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body style="background-color: #f3f5fa;">

<style type="text/css">
/* Media queries for responsiveness */
@media screen and (max-width: 1200px) {
  body {
    background-color: lightgray;
    font-size: 10px;
  }
}

@media screen and (max-width: 992px) {
  body {
    background-color: lightblue;
    font-size: 10px;
  }
}

@media screen and (max-width: 768px) {
  .title {
    font-size: 15px;
  }
}

@media screen and (max-width: 576px) {
  .logo img {
    height: 33px;
  }
  .title {
    font-size: 12px;
  }
}

@media screen and (max-width: 400px) {
  .title {
    font-size: 10px;
  }
}

@media screen and (max-width: 240px) {
  .title {
    font-size: 2px;
  }
}

.modal-dialog {
  margin-top: 150px;
}

.modal-dialog-centered {
  display: block;
  align-items: flex-start;
  min-height: auto;
}

.modal-content {
  margin: 0 auto;
  max-height: 90vh;
  overflow-y: auto;
}
</style>

<header id="header" class="sticky-top header-inner-pages" style="background: #0072bc;">
  <div class="container d-flex align-items-center">
    <h5 style="font-weight: bold; margin-left: -20px;" class="logo me-auto">
      <a href="#"><img src="images/logo_New.PNG" alt="Logo"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <label class="title" style="color: white;">Flood&nbsp;Hotspots&nbsp;Monitoring&nbsp;System</label>
    </h5>

    <nav id="navbar" class="navbar">
      <ul>
        <li><a class="getstarted scrollto btn-popup4" href="#">Login</a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->
  </div>
</header><!-- End Header -->

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Login Modal -->
<div class="modal fade" id="custModal4" tabindex="-1" aria-labelledby="custModalLabel4" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <label class="modal-title" id="custModalLabel4">LOGIN TO SYSTEM</label>
        <button type="button" class="btn-close btn-sm btn-outline-danger" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body" id="loginModalBody">
        <div class="row">
          <div class="col-sm-12">
            <div class="card">

<?php 
if (isset($_POST['loginbtn'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $hash_password = sha1($password);

    // Query for local_observer
    $query = $con->prepare("SELECT * FROM local_observer WHERE email = ? AND password=? AND status='Active'");
    $query->execute(array($email, $hash_password));
    $response = $query->rowCount();

    if ($response > 0) {
        // Login successful for local_observer


      $row=$query->fetch(PDO::FETCH_ASSOC);
      $name=$row['firstname']." ".$row['lastname'];

      $_SESSION['observersession']=$email;
      $_SESSION['observerid']=$row['id'];
      $_SESSION['namesession']=$name;
        ?>
        <script>
            setTimeout(function() {
                swal({
        title: "Welcome <?=$row['firstname']?> <?=$row['lastname']?>",
                    text: "Successfully",
                    type: "success",
                    timer: 1500,  // Auto-dismiss after 1.5 seconds
                    showConfirmButton: true
                }, function() {
                    window.location = "Observers/"; // Redirect after alert is closed
                });
            }, 1000); // Delay of 1 second before showing the alert
        </script>
        <?php
    } else {
        // Query for rwb_observer
        $sql = $con->prepare("SELECT * FROM rwb_observer WHERE email = ? AND password=? AND status='Active'");
        $sql->execute(array($email, $hash_password));
        $response2 = $sql->rowCount();

        if ($response2 > 0) {
            // Login successful for rwb_observer
          $row=$sql->fetch(PDO::FETCH_ASSOC);

          $name=$row['firstname']." ".$row['lastname'];
          $role=$row['user_role'];

          $_SESSION['rwbsession']=$email;
          $_SESSION['rwbid']=$row['id'];
          $_SESSION['staffname']=$name;
          $_SESSION['role']=$role;

            ?>
            <script>
                setTimeout(function() {
                    swal({
                        title: "Welcome <?=$row['firstname']?> <?=$row['lastname']?>",
                        text: "Successfully",
                        type: "success",
                        timer: 1500,  // Auto-dismiss after 1.5 seconds
                        showConfirmButton: true
                    }, function() {
                        window.location = "Admin/"; // Redirect after alert is closed
                    });
                }, 1000); // Delay of 1 second before showing the alert
            </script>
            <?php
        } else {
            // No user found in either table
            ?>

  <script>
                setTimeout(function() {
                    swal({
                        title: "User Not found",
                        text: "Successfully",
                        type: "error",
                        timer: 1500,  // Auto-dismiss after 1.5 seconds
                        showConfirmButton: true
                    }, function() {
                        window.location = "."; // Redirect after alert is closed
                    });
                }, 1000); // Delay of 1 second before showing the alert
            </script>



            <?php
        }
    }
}
?>




<form method="POST" action="" id="loginForm">
  <div class="card-body">
    <span>Email</span>
    <input type="email" name="email" class="form-control" id="email" > 
    
        <span>Password</span>
  <div class="input-group">
            <input type="password" name="password" class="form-control" id="password">
            <div class="input-group-append">
                <button style="height: 100%" type="button" class="btn btn-outline-secondary" onclick="togglePasswordVisibility()">
                    <i id="password-icon" class="fa fa-eye"></i>
                </button>
            </div>
        </div>
      
    </div>
    
  <input type="submit" name="loginbtn" class="btn btn-info text-light form-control" value="SignIn">
  <br>
</form>

            </div>
          </div>
        </div>
      </div>

      <div class="modal-footer">
        <center>
          <a href="#" id="forgetPasswordLink">Forget Password?</a>
        </center>
      </div>

    </div>
  </div>
</div>

<!-- Forget Password Modal -->
<div class="modal fade" id="custModal3" tabindex="-1" aria-labelledby="custModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <label class="modal-title" id="custModalLabel">FORGET PASSWORD</label>
        <button type="button" class="btn-close btn-sm btn-outline-danger" data-bs-dismiss="modal"></button>
      </div>

      <form method="POST" action="" id="forgetForm">
        <div class="modal-body" id="registerModalBody">
          <label>Email</label>
          <input type="text" name="forget_email" id="forget_email" class="form-control">
          <br>
          <input type="submit" name="login" class="btn btn-info text-light form-control" value="Send Link">
        </div>
      </form>

      <div class="modal-footer">
        <center>
          <br>
          <a href="#" id="backToLoginLink">Back to Login</a>
        </center>
      </div>
    </div>
  </div>
</div>

<!-- Vendor JS Files -->
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

<script type="text/javascript">
$(document).ready(function() {
  $('.btn-popup3').click(function() {
    $('#custModal3').modal('show');
  });

  $('.btn-popup4').click(function() {
    $('#custModal4').modal('show');
  });

  $('#forgetPasswordLink').click(function(e) {
    e.preventDefault();
    $('#custModal4').modal('hide');
    $('#custModal3').modal('show');
  });

  $('#backToLoginLink').click(function(e) {
    e.preventDefault();
    $('#custModal3').modal('hide');
    $('#custModal4').modal('show');
  });
});

document.getElementById('loginForm').addEventListener('submit', function(event) {
  var email = document.getElementById('email').value;
  var password = document.getElementById('password').value;

  if (!email) {
    event.preventDefault();
    toastr.options = {
      "positionClass": "toast-top-right",
      "timeOut": "5000",
    };
    toastr.error('Please Enter Email.');
  }

  if (!password) {
    event.preventDefault();
    toastr.options = {
      "positionClass": "toast-top-right",
      "timeOut": "5000",
    };
    toastr.error('Please Enter Password.');
  }
});

document.getElementById('forgetForm').addEventListener('submit', function(event) {
  var forget_email = document.getElementById('forget_email').value;
  if (!forget_email) {
    event.preventDefault();
    toastr.options = {
      "positionClass": "toast-top-right",
      "timeOut": "5000",
    };
    toastr.error('Please Enter Email.');
  }
});


  function togglePasswordVisibility() {
        var passwordField = document.getElementById('password');
        var passwordIcon = document.getElementById('password-icon');

        if (passwordField.type === "password") {
            passwordField.type = "text";
            passwordIcon.classList.remove('fa-eye');
            passwordIcon.classList.add('fa-eye-slash');
        } else {
            passwordField.type = "password";
            passwordIcon.classList.remove('fa-eye-slash');
            passwordIcon.classList.add('fa-eye');
        }
    }

</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
</body>
</html>
