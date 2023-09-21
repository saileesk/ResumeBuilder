<?php
session_start();
$conn=mysqli_connect("localhost","root","","resume");
if(mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();

}
else
{
$e_id=$_SESSION['id'];
$sname = $_POST["sname"];
$slocation = $_POST["slocation"];
$smonth = $_POST["smonth"];
$syear = $_POST["syear"];
$emonth = $_POST["emonth"];
$eyear = $_POST["eyear"];
$degree = $_POST["degree"];

// Insert data into the "education" table
$sql = "INSERT INTO education (e_id, sname, slocation, smonth, syear, emonth, eyear, degree)
VALUES ('$e_id', '$sname', '$slocation', '$smonth', '$syear', '$emonth', '$eyear', '$degree')";

    if ($conn->query($sql) === TRUE) {
        header('location:pdetails.php');
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>