<?php
session_start();
$conn=mysqli_connect("localhost","root","","resume");
if(mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();

}
else
{
    $add_id=$_SESSION['id'];
    $address = $_POST["address"];
    $city = $_POST["city"];
    $state = $_POST["state"];
    $pin = $_POST["pin"];
    
    // Insert data into the "address" table
    $sql = "INSERT INTO address (add_id, address, city, state, pin)
    VALUES ('$add_id', '$address', '$city', '$state', '$pin')";

    if ($conn->query($sql) === TRUE) {
        header('location:profExp.php');
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>