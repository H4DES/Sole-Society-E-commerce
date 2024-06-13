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
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="box form-box">
            <?php
                include("./login-register/config.php");
                if(isset($_POST['submit'])){
                    $email = mysqli_real_escape_string($con, $_POST['email']);
                    $password = mysqli_real_escape_string($con, $_POST['password']);

                    $result = mysqli_query($con, "SELECT * FROM users WHERE email='$email' AND password='$password'") or die("Select Error");
                    $row = mysqli_fetch_assoc($result);
                    if(is_array($row) && !empty($row)){
                        $_SESSION['valid'] = $row['email'];
                        $_SESSION['username'] = $row['username'];
                        $_SESSION['user_id'] = $row['user_id'];
                        echo "<script type='text/javascript'>
                                document.addEventListener('DOMContentLoaded', function() {
                                    var myModal = new bootstrap.Modal(document.getElementById('successModal'));
                                    myModal.show();
                                    setTimeout(function() {
                                        window.location.href = 'index.php';
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
                        echo "<a href='index2.php'><button class='btn btn-danger'>Go Back</button></a>";
                    }
                } else {
            ?>
            <header>Login</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" required>
                </div>  

                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" required>
                </div>

                <div class="field">
                    <input type="submit" class="btn btn-primary" name="submit" value="Login" required>
                </div>

                <div class="links">
                    Don't have an account? <a href="register2.php">Sign up</a>
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
