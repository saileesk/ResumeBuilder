<?php
session_start();
$conn=mysqli_connect("localhost","root","","resume");
if(mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();

}
else
{
$s_id=$_SESSION['id'];
$skill = $_POST["skill"];

// Insert data into the "skill" table
$sql = "INSERT INTO skill (s_id,skill)
VALUES ('$s_id', '$skill')";

    if ($conn->query($sql) === TRUE) {
        header('location:dashbord.php');
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>