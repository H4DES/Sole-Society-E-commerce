<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=".//login-register/style2.css">
    <link rel="stylesheet" href="./login-register/bootstrap/bootstrap.min.css" />

    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
  </symbol>
</svg>

    <title>Admin Account Register</title>
</head>

<body>
    <div class="container">
        <div class="box form-box">

            <?php
            include("./login-register/config.php");
            if (isset($_POST["submit"])) {
                $username = $_POST["username"];
                $password = $_POST["password"];

                $verify_query = mysqli_query($con, "SELECT username FROM admin WHERE username='$username'");

                if (mysqli_num_rows($verify_query) != 0) {
                    echo "  <div class='message'>
                                    <p>This email is used, Try another One Please!</p>
                                </div> <br>";
                    echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button>";
                } else {
                    mysqli_query($con, "INSERT INTO admin (username, password) VALUES ('$username', '$password')") or die("Error Occurred");

                    // echo "  <div class='message'>
                    //             <p>Registration Complete!</p>
                    //         </div> <br>";
                    // echo "<a href='index2.php'><button class='btn'>Login Now</button>";  

                    echo "
                            
                    <div class='alert alert-success d-flex align-items-center' role='alert'>
                    <svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Success:'><use xlink:href='#check-circle-fill'/></svg>
                    <div>
                      Registration Completed!
                    </div>
                  </div>
                  
                          
                            
                                ";

                            echo "<a href='index2.php'><button class='btn btn-success'>Login Now</button>"; 
                }
            } else {
            ?>

                <header>Admin Account Register</header>

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
                        <input type="submit" class="btn btn-primary" name="submit" value="Register" required>
                    </div>

                    <div class="links">
                        Already have account? <a href="admin_login.php">Sign in</a>
                    </div>
                </form>
        </div>
    <?php } ?>
    </div>
    <script src="assets/bootstrap/bootstrap.bundle.min.js"></script>
</body>

</html>