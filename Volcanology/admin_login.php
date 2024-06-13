<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=".//login-register/style2.css">
    <link rel="stylesheet" href="./login-register/bootstrap/bootstrap.min.css"/>
    <title>Admin Login</title>
</head>
<body>
    <div class="container">
        <div class="box form-box">
            <?php
                include("./login-register/config.php");
                if(isset($_POST['submit'])){
                    $email = mysqli_real_escape_string($con, $_POST['username']);
                    $password = mysqli_real_escape_string($con, $_POST['password']);

                    $result = mysqli_query($con, "SELECT * FROM admin WHERE username='$username' AND password='$password'") or die("Select Error");
                    $row = mysqli_fetch_assoc($result);
                    if(is_array($row) && !empty($row)){
                        $_SESSION['valid'] = $row['username'];
                        $_SESSION['username'] = $row['username'];
                        $_SESSION['admin_id'] = $row['admin_id'];
                        echo "<script type='text/javascript'>
                                document.addEventListener('DOMContentLoaded', function() {
                                    var myModal = new bootstrap.Modal(document.getElementById('successModal'));
                                    myModal.show();
                                    setTimeout(function() {
                                        window.location.href = 'admin_main.php';
                                    }, 2000);
                                });
                              </script>";
                    } else {
                        // Display error message if login fails
                        echo "<div class='alert alert-danger d-flex align-items-center' role='alert'>
                                <svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:'><use xlink:href='#exclamation-triangle-fill'/></svg>
                                <div>
                                    Wrong Username or Password!
                                </div>
                            </div>";
                        echo "<a href='admin_login.php'><button class='btn btn-danger'>Go Back</button></a>";
                    }
                } else {
            ?>
            <header>Admin Account Login</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" required>
                </div>  

                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" required>
                </div>

                <div class="field">
                    <input type="submit" class="btn btn-primary" name="submit" value="Login" required>
                </div>

                <div class="links">
                    Don't have an account? <a href="admin_register.php">Sign up</a>
                </div>
            </form>
            <?php } ?>
        </div>
    </div>

    <!-- This modal appear when a success login completed -->
    <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header d-flex align-items-center justify-content-center">
            <h5 class="modal-title text-center" id="successModalLabel">Login Successful</h5>
          </div>
          <div class="modal-body">
            <div class="alert alert-success d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                <div>
                    Login Successful Redirecting to homepage...
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
