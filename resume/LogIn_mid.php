<?php
session_start();
$conn=mysqli_connect("localhost","root","","resume");
if(mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();

}
else
{
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $sql = "SELECT * FROM user WHERE email = '$email' AND pass = '$password'";
    $result = $conn->query($sql);
    $row = mysqli_fetch_assoc($result);
    if ($result->num_rows > 0) {
        // Login successful
        session_start();
        $_SESSION['id'] = $row['id'];
        $_SESSION['user'] = $row['fname'];
        $_SESSION["msg"]="Login successfull";
        header("Location: dashbord.php");
    } else {
        $_SESSION["msg"]="Login failed. Invalid username or password.";
        header("Location: index.php");    
    }
    
    $conn->close();

}
?>
