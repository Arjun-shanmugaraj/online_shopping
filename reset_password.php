<?php
session_start();

// Configuration
$db_host = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'database_name';

// Connect to database
$conn = mysqli_connect($db_host, $db_username, $db_password, $db_name);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if OTP is valid
if (isset($_SESSION['otp_valid']) && $_SESSION['otp_valid'] == true) {
    // Check if form is submitted
    if (isset($_POST['new_password']) && isset($_POST['confirm_password'])) {
        $new_password = $_POST['new_password'];
        $confirm_password = $_POST['confirm_password'];
        $email = $_SESSION['email'];

        // Validate new password and confirm password
        if ($new_password == $confirm_password) {
            // Hash new password
            $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

            // Update user's password in database
            $query = "UPDATE users SET password = '$hashed_password' WHERE email = '$email'";
            mysqli_query($conn, $query);
            // Display success message
            echo "<script>alert('Password reset successfully! You can now login with your new password !'); window.location.href='login_user.php';</script>";
        } else {
            echo "New password and confirm password do not match.";
        }
    }
} else {
    echo "Invalid OTP. Please try again.";
}

?>


<style>
form {
    border-radius:10px ;
    background-color:rgba(0, 0, 0, .5);
/*    margin-left:10% ;*/
    margin:20px auto;
    align-items: center;
    padding:50px;
    width:20%;
    box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;

  }

    label {
        display: block;
        margin-bottom: 10px;
    }

    input[type="password"] {
        width: 100%;
        height: 40px;
        margin-bottom: 20px;
        padding: 10px;
        border: 1px solid #ccc;
    }

    button[type="submit"] {
        width: 100%;
        height: 40px;
        background-color: #4CAF50;
        color: #fff;
        padding: 10px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    button[type="submit"]:hover {
        background-color: #3e8e41;
    }

    /* Add responsiveness */
    @media only screen and (max-width: 600px) {
        form {
            margin: 20px auto;
            padding: 10px;
        }
        input[type="password"] {
            height: 30px;
            margin-bottom: 10px;
        }
        button[type="submit"] {
            height: 30px;
        }
    }

    @media only screen and (max-width: 400px) {
        form {
            margin: 10px auto;
            padding: 5px;
        }
        input[type="password"] {
            height: 20px;
            margin-bottom: 5px;
        }
        button[type="submit"] {
            height: 20px;
        }
    }
</style>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <center>
        
    <h3 style="color: white;">Set new password </h3>
    </center>
    <label for="new_password">New Password:</label>
    <input type="password" id="new_password" name="new_password" required>
    <br>
    <label for="confirm_password">Confirm Password:</label>
    <input type="password" id="confirm_password" name="confirm_password" required>
    <br>
    <button type="submit">Reset Password</button>
</form>