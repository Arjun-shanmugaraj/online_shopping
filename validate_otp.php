
<style>
    /* Add some basic styling to the form */
    form {
    border-radius:10px ;
    background-color:rgba(0, 0, 0, .5);
/*    margin-left:10% ;*/
    margin:20px auto;
    align-items: center;
    padding:50px;
    width: fit-content;
    box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;

  }

    label {
        display: block;
        margin-bottom: 10px;
    }

    input[type="number"] {
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
<?php
session_start();

// Configuration
$db_host = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'online_shopping';

// Connect to database
$conn = mysqli_connect($db_host, $db_username, $db_password, $db_name);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if form is submitted
if (isset($_POST['otp'])) {
    $otp = $_POST['otp'];
    $email = $_SESSION['email'];

    // echo "$email";

    // Check if OTP is valid
    $query = "SELECT * FROM login WHERE email = '$email' AND otp = '$otp'";
    $result = mysqli_query($conn, $query);
    $num_rows = mysqli_num_rows($result);

    if ($num_rows > 0) {
        // OTP is valid, proceed to password reset
        $_SESSION['otp_valid'] = true;
        echo "<script>alert('OTP Verified !'); window.location.href='reset_password.php';</script>";
        exit;
    } else {
        echo "<script>alert('Invalid OTP');</script>";
    }
}

?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <label for="otp">OTP:</label>
    <input type="number" id="otp" name="otp" required>
    <button type="submit">Validate OTP</button>
</form>