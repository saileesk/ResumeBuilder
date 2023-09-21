<?php
session_start();
$conn=mysqli_connect("localhost","root","","resume");
if(mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();

}
else
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $pass = $_POST['pass'];
    $sql = "INSERT INTO user (fname, lname, email, phone, pass) 
            VALUES ('$fname', '$lname', '$email', '$phone', '$pass')";
    if ($conn->query($sql) === TRUE) {
        $_SESSION["msg"]="Registraton successfull";
        header('location:index.php');
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>
