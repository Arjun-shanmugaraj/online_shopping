<?php
// Configuration
$dbhost = "localhost";
$dbname = "online_shopping";
$dbuser = "root";
$dbpass = "";

// Create connection
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

session_start();
$_SESSION['mobile']=$_POST['mobile']; 
$_SESSION['name']=$_POST['name'];
$_SESSION['email']=$_POST['email'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $mobile=$_POST['mobile'];
    $password = $_POST["password"];
    $repeat_password = $_POST["repeat_password"];
    $email = $_POST["email"];

    // Initialize error array
    $errors = array();

    // Check if passwords match
    if ($password != $repeat_password) {
        $errors[] = "Passwords do not match";
    }

    // Check if email already exists
    $sql = "SELECT * FROM login WHERE email='$email'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $errors[] = "Email already exists";
    }

    // Check for errors
    if (!empty($errors)) {
        echo "<div class='error'>";
        foreach ($errors as $error) {
            echo "<script>alert('$error');</script>";
            // echo "<p>$error</p>";
        }
        echo "</div>";
    } else {
        // Hash password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Insert user into database
        $sql = "INSERT INTO login (name, password, email) VALUES ('$name', '$hashed_password', '$email')";
        if ($conn->query($sql) === TRUE) {
             echo "<script>alert('Register successfully !'); window.location.href='product.php';</script>";

        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

$conn->close();
?>