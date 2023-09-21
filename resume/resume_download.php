<?php
session_start();
$conn=mysqli_connect("localhost","root","","resume");
if(mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();

}
else
{

//fetch data from database
$id=$_SESSION['id'];
$sql = "SELECT * FROM user WHERE id='$id'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

// Create resume
$resume = "RESUME\n\n";
$resume .= "Name: " . $row["fname"] . " ".$row["lname"] ."\n";
$resume .= "Email: " . $row["email"] . "\n";
$resume .= "Phone: " . $row["phone"] . "\n\n";



//address 

$sql = "SELECT * FROM address WHERE add_id='$id'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$resume .= "ADDRESS:\n" . $row["address"] .' '.$row["city"].' '.$row["city"].' '. $row["state"].' '.$row["pin"]. "\n\n";

//experience

$sql = "SELECT * FROM workexp WHERE exp_id='$id'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$resume .= "Work Experience:\nPOST:" . $row["pname"] . "\n";
$resume .= "Company:" . $row["cname"] . "\n";
$resume .= "Duration:" . $row["smonth"] ."-".$row["syear"]." TO ". $row["emonth"] ."-".$row["eyear"].  "\n";
$resume .=  $row["prof_des"] . "\n\n";


//eduction
$sql = "SELECT * FROM education WHERE e_id='$id'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$resume .= "Education\nCollege Name:" . $row["sname"] . '-'. $row["slocation"] . "\n";
$resume .= "Degree: " . $row["degree"] . "\n";
$resume .= "Duration:" . $row["smonth"] ."-".$row["syear"]." TO ". $row["emonth"] ."-".$row["eyear"].  "\n";



$sql = "SELECT * FROM skill WHERE s_id='$id'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$resume .= "Skills:\n" . $row["skill"] . "\n";

//write resume to a file
$file = fopen("resume.txt","w");
fwrite($file, $resume);
fclose($file);
$conn->close();

//download file
header("Content-Type: application/txt");
header("Content-Disposition: attachment; filename=resume.txt");
header("Pragma: no-cache");
header("Expires: 0");
readfile("resume.txt");
exit();
}
?>
