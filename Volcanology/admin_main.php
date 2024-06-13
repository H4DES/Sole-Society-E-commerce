<?php
session_start(); // Start session at the beginning of the script
include("./login-register/config.php");

// Handle form submission to search for volcano by ID
if(isset($_POST['submit2'])) {
    // Check if volcano_id is numeric
    if(is_numeric($_POST['volcano_id'])) {
        $volcano_id = $_POST['volcano_id'];

        // SQL query with prepared statement
        $sql = "SELECT
                    v.name AS volcano_name,
                    v.location,
                    v.type AS volcano_type,
                    v.status,
                    v.last_eruption,
                    e.eruption_times,
                    e.eruption_type
                FROM
                    volcanoes v
                INNER JOIN
                    eruptions e ON v.volcano_id = e.volcano_id
                WHERE
                    v.volcano_id = ?";

        // Prepare statement
        $stmt = $con->prepare($sql);

        // Bind parameter
        $stmt->bind_param("i", $volcano_id); // assuming volcano_id is an integer

        // Execute statement
        $stmt->execute();

        // Get result
        $result = $stmt->get_result();

        // Check if there are results
        if ($result->num_rows > 0) {
            // Fetch associative array
            $row = $result->fetch_assoc();

            // Store values in variables
            $volcano_name = $row['volcano_name'];
            $location = $row['location'];
            $volcano_type = $row['volcano_type'];
            $status = $row['status'];
            $last_eruption = $row['last_eruption'];
            $eruption_times = $row['eruption_times'];
            $eruption_type = $row['eruption_type'];

            // Free result set
            $result->free();
        } else {
            echo "No results found";
        }

        // Close statement
        $stmt->close();
    } else {
        echo "Volcano ID must be a numeric value.";
    }
}

// Handle form submission to update volcano information
if(isset($_POST['submit'])) {
    if($_POST['submit'] == 'Change Content') {
        // Sanitize inputs
        $volcano_id = mysqli_real_escape_string($con, $_POST['volcano_id']);
        $name = mysqli_real_escape_string($con, $_POST['name']);
        $location = mysqli_real_escape_string($con, $_POST['location']);
        $volcano_type = mysqli_real_escape_string($con, $_POST['volcano_type']);
        $status = mysqli_real_escape_string($con, $_POST['status']);
        $last_eruption = mysqli_real_escape_string($con, $_POST['last_eruption']);
        $eruption_times = mysqli_real_escape_string($con, $_POST['eruption_times']);
        $eruption_type = mysqli_real_escape_string($con, $_POST['eruption_type']);

        // Update query for volcanoes table
        $sql_volcanoes = "UPDATE volcanoes
                          SET
                              name = '$name',
                              location = '$location',
                              type = '$volcano_type',
                              status = '$status',
                              last_eruption = '$last_eruption'
                          WHERE
                              volcano_id = $volcano_id";

        // Update query for eruptions table
        $sql_eruptions = "UPDATE eruptions
                          SET
                              eruption_times = '$eruption_times',
                              eruption_type = '$eruption_type'
                          WHERE
                              volcano_id = $volcano_id";

        // Execute queries
        $result_volcanoes = mysqli_query($con, $sql_volcanoes);
        $result_eruptions = mysqli_query($con, $sql_eruptions);

        // Check if updates were successful
        if($result_volcanoes && $result_eruptions) {
            echo "<div class='alert alert-success' role='alert'>
                    Content updated successfully!
                 </div>";
        } else {
            echo "<div class='alert alert-danger' role='alert'>
                    Failed to update content. Please try again.
                 </div>";
        }
    } elseif ($_POST['submit'] == 'Logout Account') {
        // Logout logic
        session_unset(); // Unset all session variables
        session_destroy(); // Destroy the session
        header("Location: admin_login.php"); // Redirect to login page after logout
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./login-register/style2.css">
    <link rel="stylesheet" href="./login-register/bootstrap/bootstrap.min.css"/>
    <title>Admin Login</title>
</head>
<body>
    <div class="container">
        <div class="box form-box">
            <header>Search ID of Volcano</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="volcano_id">Volcano ID</label>
                    <input type="text" name="volcano_id" id="volcano_id">
                </div>

                <div class="field">
                    <input type="submit" class="btn btn-primary" name="submit2" value="Search ID">
                </div>
            </form>
        </div>

        <div class="box form-box">
            <header>Change Content</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="name">Volcano Name</label>
                    <input type="text" name="name" id="name" value="<?php echo isset($volcano_name) ? htmlspecialchars($volcano_name) : ''; ?>">
                </div>

                <div class="field input">
                    <label for="location">Volcano Location</label>
                    <input type="text" name="location" id="location" value="<?php echo isset($location) ? htmlspecialchars($location) : ''; ?>">
                </div>

                <div class="field input">
                    <label for="volcano_type">Volcano Type</label>
                    <input type="text" name="volcano_type" id="volcano_type" value="<?php echo isset($volcano_type) ? htmlspecialchars($volcano_type) : ''; ?>" >
                </div>

                <div class="field input">
                    <label for="status">Volcano Status</label>
                    <input type="text" name="status" id="status" value="<?php echo isset($status) ? htmlspecialchars($status) : ''; ?>" >
                </div>

                <div class="field input">
                    <label for="last_eruption">Volcano Last Eruption</label>
                    <input type="text" name="last_eruption" id="last_eruption" value="<?php echo isset($last_eruption) ? htmlspecialchars($last_eruption) : ''; ?>" >
                </div>

                <div class="field input">
                    <label for="eruption_times">Volcano Eruption Times</label>
                    <input type="text" name="eruption_times" id="eruption_times" value="<?php echo isset($eruption_times) ? htmlspecialchars($eruption_times) : ''; ?>" >
                </div>

                <div class="field input">
                    <label for="eruption_type">Volcano Eruption Type</label>
                    <input type="text" name="eruption_type" id="eruption_type" value="<?php echo isset($eruption_type) ? htmlspecialchars($eruption_type) : ''; ?>" >
                </div>

                <div class="field">
                    <input type="hidden" name="volcano_id" value="<?php echo isset($volcano_id) ? $volcano_id : ''; ?>">
                    <input type="submit" class="btn btn-primary" name="submit" value="Change Content">
                </div>

                <div class="field">
                    <input type="submit" class="btn btn-primary" name="submit" value="Logout Account">
                </div>
            </form>
        </div>
    </div>

    <!-- Success Modal -->
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
                </
